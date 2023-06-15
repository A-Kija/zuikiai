<?php



class MarsoPalydovas {
    
        private static $instance = [];
        private $title;
    
        private function __construct($title)
        {
            $this->title = $title;
        }
    
        public static function getMarsoPalydovas()
        {
            if (!isset(self::$instance[0])) {
                return self::$instance[0] = new self('Deimas');
            }
            if (!isset(self::$instance[1])) {
                return self::$instance[1] = new self('Fobas');
            }
            return self::$instance[rand(0, 1)];
        }
  
        private function __clone()
        {
            // return $this->title == 'Deimas' ? self::$instance[0] : self::$instance[1];
        }
    
        private function __wakeup()
        {
            // return $this->title == 'Deimas' ? self::$instance[0] : self::$instance[1];
        }
    
        public function __sleep()
        {
            return ['title'];
        }
    
        public function __destruct()
        {
            echo '<h1>Marso palydovas sunaikintas</h1>';
        }
}