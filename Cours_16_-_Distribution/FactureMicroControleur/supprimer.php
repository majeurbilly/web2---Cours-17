<?php
  session_start();
  $facture = $_SESSION['facture'];
  
  $position = $_GET['position'];

  array_splice($facture, $position, 1);

  $_SESSION['facture'] = $facture;

  header('Location: facture.php');
?>