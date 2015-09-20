<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Autoloader
 *
 * @author Alexey.Luciancikov <bock89@mail.ru>
 */
class Autoloader {
    protected $_direactory = __DIR__;
    public function __construct($dir = "") {
        if(!empty($dir))
        {
            $this->_direactory = $dir;
        }
    }
    public static function register($dir = "")
    {
        $autoloadeer = new static($dir);
        
        spl_autoload_register(array($autoloadeer, 'load'));
    }
    public function load($name)
    {
        $class = str_replace('\\', DIRECTORY_SEPARATOR, $name);
        if(file_exists($this->_direactory.DIRECTORY_SEPARATOR.$class.'.php'))
        {
            require_once $this->_direactory.DIRECTORY_SEPARATOR.$class.'.php';
        }
        
    }
}
