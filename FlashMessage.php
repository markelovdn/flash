<?php


class FlashMessage
{
    public $flashMessage = []; //array

    public function __construct()
    {
        session_start();
        $this->flashMessage = require 'configFlashMessage.php'; //provide correct path to config file
    }

    /**
     * @param $name string
     * @param null $message
     * This method sets the required message.
     * It is possible to specify the name of the required message specified in the configuration file.
     */
    public function setFlashMessage ($name, $message=null) {
        if (array_key_exists($name, $this->flashMessage)) {
            $_SESSION[$name] = $this->flashMessage[$name];
        } else {
            $_SESSION[$name] = $message;
        }
    }

    /**
     * @param $name string
     * This method displays the selected message on the screen at the specified location.
     */
    public function displayFlashMessage ($name) {
        if(isset($_SESSION[$name])){
            echo $_SESSION[$name];
        } else {
            unset($_SESSION[$name]);
        }
    }
}