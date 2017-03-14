<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function validateRoutingParam(){
    
    $state = true;
    
    if(!isset($_GET["r"])){
        $state = false;
        }
    
    if(isset($_GET["r"])){
        $r = $_GET["r"];
        if(!file_exists("Views/". $r .".php")){
            $state =  false;
        }
    }
    
    return $state;
    
}

function runApplication(){
if (validateRoutingParam() == true){
        $r = $_GET["r"];
        include "Views/". $r .".php";
    } else {
        include "Views/dashboard.php";
    }
}