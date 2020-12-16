<?php

namespace app\controllers;

use app\core\Controller;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            "name" => "Hassan Javed",
        ];

        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

}