<?php

// Defining a CONSTANT array
define ("BANNEDCHARACTERS", serialize (array ("<", ">", "php", "'", "?", "|", "&", "\'", "INSERT", "*", "FROM", "WHERE")));
# use it
// $myBannedChar = unserialize (BANNEDCHARACTERS);
 ?>
