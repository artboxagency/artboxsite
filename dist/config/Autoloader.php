<?php
function loadClassFromIndex($class) {
  require_once "utils/Class/". $class . '.php';
}

spl_autoload_register('loadClassFromIndex');
