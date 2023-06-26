<?php

namespace Colors;

class OldData {

    static public function flashData($data) 
    {
        $_SESSION['flash'] = $data;
    }

    static public function getFlashData() 
    {
        $data = $_SESSION['flash'] ?? null;
        unset($_SESSION['flash']);
        return $data;
    }
  

}