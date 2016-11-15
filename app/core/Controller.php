<?php

/**
 * Created by PhpStorm.
 * User: mhamm
 * Date: 15/11/2016
 * Time: 09:38
 */


class Controller
{
    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = array())
    {
        require_once '../app/views/' . $view . '.php';
    }
}