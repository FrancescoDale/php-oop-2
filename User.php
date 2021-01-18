<?php

class User {

    public $alias;
    public $avatar;
    public $mail;
    public $postCount;

    //costruttore

    function __construct($_alias, $_avatar, $_mail, $_postCount) {
        $this->alias = $_alias;
        $this->avatar = $_avatar;
        $this->mail = $_mail;
        $this->postCount = $_postCount;
    }




}


?>
