<?php
    require_once "Controller.php";
    
    $id = \filter_input(\INPUT_GET,'id');
    $cont = new Controller();
    if($cont->areFriends($id)){
       echo true;
    } else{
        $cont->makeFriends($id);

    }
