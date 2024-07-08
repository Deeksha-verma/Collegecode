<?php

function redirect($url,$message)
{
    $_session['message']= $message;
    header('Location: '.$url);
    exit();
}



?>