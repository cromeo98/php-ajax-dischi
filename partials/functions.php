<?php
 
    function isLogged($get_user){
        if(empty($get_user)){
            return 'Your';
        };
        return $_GET['name'];
    };