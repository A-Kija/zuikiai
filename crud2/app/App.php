<?php
namespace Colors;

use Colors\Controllers\RacoonController;

class App {

    static public function start() 
    {
        echo '<h1>App</h1>';

        $url = explode('/', $_SERVER['REQUEST_URI']);
        array_shift($url);

        return self::router($url);

    }

    static private function router($url)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && count($url) == 1 && $url[0] == 'racoon') {
           return (new RacoonController)->index();
        }
        else if($_SERVER['REQUEST_METHOD'] == 'GET' && count($url) == 2 && $url[0] == 'racoon') {
            return (new RacoonController)->show($url[1]);
        }

        else {
            echo '<h1>404</h1>';
        }
    }

}