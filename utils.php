<?php
  require_once("conn.php");

  function generateToken() {
    $s = '';
    for($i=1; $i<=16; $i++) {
      $s .= chr(rand(65,90));
    }
    return $s;
  }

  function getUserFromUsername($username) {
    global $conn;
    $sql = sprintf(
      "SELECT * FROM users WHERE username = '%s'",
      $username
    );
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row;
  }

  function escape($str) {
    return htmlspecialchars($str, ENT_QUOTES);
  }

?>