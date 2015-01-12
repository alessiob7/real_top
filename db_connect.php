<?php
    class Connection{
        const DB_HOST = "192.168.56.101";
        const DB_USER = "ale";
        const DB_PASS = "prova123";
        const DB_NAME = "real_top";
        public $c;
        
        public function __construct(){
            $this->c = new mysqli(self::DB_HOST,self::DB_USER,self::DB_PASS,self::DB_NAME);
            if(!$this->c) {die("Could not connect to MySQL: ".mysqli_error()); }
        return $this->c;
        }
    }