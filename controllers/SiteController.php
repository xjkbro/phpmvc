<?php

/**
 * Class SiteController
 * @author Jason-Kyle De Lara
 * @package app\controllers
 */

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => "Jason-Kyle De Lara"
        ];
        return $this->render('home', $params);
    }
    public function contact()
    {
        $params = [];
        return $this->render('contact');
    }
    public function handleContact()
    {
        return "handle submitting data";
    }
}
