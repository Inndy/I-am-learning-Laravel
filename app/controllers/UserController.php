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
}
