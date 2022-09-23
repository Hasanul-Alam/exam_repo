<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $user, $users;
    public function add()
    {
        return view('admin.user.add');
    }

    public function manage()
    {
        $this->users = User::all();
        return view('admin.user.manage', ['users' => $this->users]);
    }

    public function create(Request $request)
    {
        User::newUser($request);
        return redirect('/user/add')->with('message', 'User Created Successfully');
    }

    public function edit($id)
    {
        $this->user = User::find($id);
        return view('admin.user.edit', ['user' => $this->user]);
    }
    public function update(Request $request, $id)
    {
        User::updateUser($request, $id);
        return redirect('/user/manage')->with('message', 'User Updated Successfully');
    }

    public function delete($id)
    {
        User::deleteUser($id);
        return redirect('/user/manage')->with('message2', 'User Deleted Successfully');
    }

}
