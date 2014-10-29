<?php

class IndexController extends BaseController {
    public function index() {
        $links = [
            new Link(action('IndexController@index'), 'Home'),
            new Link(action('UserController@list_all_users'), 'Users'),
            new Link(action('UserController@auth_user'), 'Login'),
        ];
        return View::make('index')->with('links', $links);
    }
}
