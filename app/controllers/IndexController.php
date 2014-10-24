<?php

class IndexController extends BaseController {
    public function index() {
        $links = [
            new Link(action('IndexController@index'), 'Home'),
            new Link(action('UserController@list_all_users'), 'Users')
        ];
        return View::make('index')->with('links', $links);
    }
}
