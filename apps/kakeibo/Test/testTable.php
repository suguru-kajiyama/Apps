<?php
  require("../model/database.php");

  $a = new UsersTable();
  $b = new CategoriesTable();
  $c = new BalancesTable();
  //var_dump($a-> getUser("admin","pass"));
  echo"<br>////////////<br>";
  var_dump($c->getOneDayBalances(2019,6,19,1));
  echo __DIR__;
 ?>
