<?php
function ClassAutoLoader($className){
    include "./Classes/" . $className . ".php";             // cette fonction va permettre d'includer les classes à utiliser
}