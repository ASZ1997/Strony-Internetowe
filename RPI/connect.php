<?php
$MyUsername = "pi_user";  // enter your username for mysql
$MyPassword = "tajnehaslo";  // enter your password for mysql
$MyHostname = "localhost";      // this is usually "localhost" unless your database resides on a different server
$dbh = mysql_pconnect(localhost , pi_user, tajnehaslo);
$selected = mysql_select_db("meteo",$dbh); //Enter your database name here 
?>