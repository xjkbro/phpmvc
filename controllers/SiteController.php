<?php

/**
 * Class SiteController
 * @author Jason-Kyle De Lara
 * @package app\controllers
 */

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

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
        return $this->render('contact');
    }
    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        var_dump($body);
        exit;
        return "handle submitting data";
    }
}
