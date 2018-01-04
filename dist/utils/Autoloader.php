<?php
function loadClassFromRoot($class) {
  require_once "Class/". $class . '.php';
}

spl_autoload_register('loadClassFromRoot');
