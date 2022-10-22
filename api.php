<?php
    header("Access-Control-Allow-Origin: *");
    header('Content-Type: application/json; charset=utf-8');
    
    echo <<<HTML
        <p class="mensaje" >Hola Mundo soy el php : ${_SERVER['SCRIPT_FILENAME']}</p>
    HTML;
?>