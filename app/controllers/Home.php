<?php

/**
 * Created by PhpStorm.
 * User: mhamm
 * Date: 15/11/2016
 * Time: 09:57
 */
class Home extends Controller
{
    public function index($name = '')
    {
//        $this->view('home/index', array('name' => $user->name));

        $user = User::find(1);

        $user->username = $name;
        $user->save();

    }

    public function create($username = '', $email = '')
    {
        $user = User::create([
            'username' => $username,
            'email' => $email
        ]);

        var_dump($user->id);
    }

}