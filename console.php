<?php
/**
 * PHPConsole
 * @author Blessed Jason Mwanza
 * @github https://github.com/blessedjasonmwanza/PHPConsole 
 */
class PHPConsole{
    function warn($msg){
        ob_start();
        var_dump($msg);
        echo '<script>console.warn(`'.ob_get_clean().'`);</script>';
    }
    function error($msg){
        ob_start();
        var_dump($msg);
       echo '<script>console.error(`'.ob_get_clean().'`);</script>';
    }
    function log($msg){
        ob_start();
        var_dump($msg);
        echo  '<script>console.log(`'.ob_get_clean().'`);</script>';
    }
}

?>