<?php

class Config {
    private static $_instance = NULL;
    private $_domain;
    private $_data;

    private function __construct() {
        $_data = json_decode(file_get_contents('config.json'), true);
        if (isset($_data['domain'])) {
            $this->$_domain = $_data['domain'];
        } else {
            $this->$_domain = "localhost";
        }
    }

    public static function getInstance() {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    public function __clone() {
        die('Clone is not allowed.'.E_USER_ERROR);
    }

    public function e_domain() {
        echo "http://" . $this->$_domain;
    }

    public function e_pic_domain() {
        echo "http://pic." . $this->$_domain;
    }

    public function e_album_url() {
        echo "http://pic." . $this->$_domain . "/album";
    }

    public function e_login_url() {
        echo "http://" . $this->$_domain . "/admin/login.php";
    }
}