<?php

function autoload($class_name) {
    require_once ($class_name . ".php");
}

spl_autoload_register("autoload");