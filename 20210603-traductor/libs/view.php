<?php

class View{
    function __construct(){
        echo "<p>vista base</p>";
    }

    function render($nombre){
        require 'views/' . $nombre . '.php';
    }
}