<?php
namespace Colors;

use Colors\Controllers\RacoonController;
use Colors\Controllers\HomeController;

class App {

    static public function start() 
    {

        $url = explode('/', $_SERVER['REQUEST_URI']);
        array_shift($url);

        return self::router($url);

    }

    static private function router($url)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && count($url) == 1 && $url[0] == '') {
            return (new HomeController)->index();
        }
        
        else if ($_SERVER['REQUEST_METHOD'] == 'GET' && count($url) == 1 && $url[0] == 'racoon') {
           return (new RacoonController)->index();
        }
        else if($_SERVER['REQUEST_METHOD'] == 'GET' && count($url) == 2 && $url[0] == 'racoon') {
            return (new RacoonController)->show($url[1]);
        }

        else {
            return self::view('404', [
                'pageTitle' => 'Page Not Found 404',
            ]);
        }
    }

    static public function view($path, $data = null)
    {
        if ($data) {
            extract($data);
        }

        ob_start();

        require __DIR__ . '/../views/top.php';
        require __DIR__ . '/../views/' . $path . '.php';
        require __DIR__ . '/../views/bottom.php';

        return ob_get_clean();
    }

}