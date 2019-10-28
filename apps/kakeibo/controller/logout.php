<?php
  class Logout{
    public function main(){
      session_start();
      $_SESSION['userId'] = null;
    }
  }
 ?>
