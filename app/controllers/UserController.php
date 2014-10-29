<?php

class UserController extends BaseController {
    public function list_all_users() {
        $users = User::all();

        return View::make('users')->with('users', $users);
    }

    public function add_user() {
        $user = new User();
        $user->fill(Input::all());
        $user->save();

        $users = User::all();

        return View::make('users')->with([
            'users' => $users,
            'added' => $user
        ]);
    }

    public function show_user($id) {
        $user = User::find($id);
        return View::make('user')->with([
            'user' => $user,
            'columns' => [
                'id' => 'ID',
                'name' => 'Name',
                'email' => 'E-Mail'
            ]
        ]);
    }

    public function del_user($id) {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            $msg = 'Delete successfully.';
            $msg_type = 'success';
        } else {
            $msg = 'User not found.';
            $msg_type = 'error';
        }

        $users = User::all();

        return View::make('users')->with([
          'users' => $users,
          'msg' => $msg,
          'msg_type' => $msg_type
        ]);
    }

    public function auth_user() {
        $username = Request::get('username');
        $password = Request::get('password');

        $user = User::where('name', '=', $username)
                      ->first();
        if ($user && $user->password === $password) {
            $msg = '登入成功';
            $msg_type = 'bg-success';
        } else {
            $msg = '登入失敗';
            $msg_type = 'bg-warning';
        }

        $users = User::all();

        return View::make('users')->with([
            'msg' => $msg,
            'msg_type' => $msg_type,
            'users' => $users
        ]);
    }
}
