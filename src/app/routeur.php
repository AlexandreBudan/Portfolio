<?php

namespace App;

class Routeur
{
    public static function routage()
    {
        $request = $_SERVER['REQUEST_URI'];

        if (isset($_SESSION['user'])) {
            switch ($request) {
                case '/':
                    include_once('homePage.html');
                    break;
                case '/experience':
                    include_once('experiencePage.html');
                    break;
                case '/blog/1':
                    include_once('blogPage.html');
                    break;
            }
        }
    }
}
