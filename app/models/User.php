<?php

class User extends Eloquent
{
    protected $talbe = 'users';
    protected $fillable = ['name', 'email', 'password'];
}
