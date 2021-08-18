<?php

/**
 * Class AuthController
 * @author Jason-Kyle De Lara
 * @package app\controllers
 */

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

class AuthController extends Controller
{
    public function login()
    {
        return $this->render('login');
    }
    public function register(Request $request)
    {
        if ($request->isPost())
            return "handle submit";
        return $this->render('register');
    }
}
