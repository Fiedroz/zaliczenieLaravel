<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.index', ['users' => $users]);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.show', ['user' => $user]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect('/admin/users')->with('success', 'Użytkownik został dodany.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$id,
            'role' => 'required|in:user,moderator,administrator',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
        ]);
        $userss = User::all();
        return view('admin.index', ['users' => $userss])->with('success', 'Użytkownik został zmieniony.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        $userss = User::all();
        return view('admin.index', ['users' => $userss]);
    }
}