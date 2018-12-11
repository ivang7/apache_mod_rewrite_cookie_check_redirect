<?php
    
    $r = rand(0,100);
    
    if($r > 50)
    {
        setcookie ("license", "true", time()+3600);/* период действия - 1 час */
    }
    else
    {
        setcookie ("license", "false", time()+3600);/* период действия - 1 час */
    }
    
    header('Location: ' . $_SERVER[REQUEST_URI]);
    die();
?>