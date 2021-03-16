<?php

class Pokemon{

    private $pseudo;
    private $password;

    function __construct($pseudo, $password){
        $this->pseudo = $pseudo;
        $this->password = $password;
    }

    function hello(){
        return "Hello";
    }


    function isConnected(){

        // if($this->pseudo == "Pikachu" && $this->password == "pikapika"){
        //     return true;
        // }else{
        //     return false;
        // } 也可以写成下面的样子

        return $this->pseudo == "Pikachu" && $this->password == "pikapika";
    }

}

