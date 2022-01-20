<?php

function auth($role){
    if($_SESSION['admin']){
        if($_SESSION['role'] == $role){

        }else{
            header("location:/HRS/login.php"); 
        }

    }else{
        header("location:/HRS/login.php");
    }
    
}







?>