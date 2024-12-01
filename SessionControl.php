<?php
include("Layout.php");


if(!$_SESSION["oturum"])
{
  header("location:Login.php");
}

?>