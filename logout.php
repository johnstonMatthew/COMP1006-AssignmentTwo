<?php
  session_start();// Start the Session 
  session_unset();// Clear all Session Variables
  session_destroy();// End/Destroy the Current Session
  Header('Location: index.php');// Send the User to the Index Page so That They can
?>