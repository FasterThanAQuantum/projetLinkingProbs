<?php
$servername= "localhost";
$identifiant= "root";
$password= "root";
$dbName="mohamed_balizi";

// Create connection
$conn = new mysqli($servername,$identifiant, $password, $dbName);
$successfullyResgistered = false;

if(isset($_POST['exampleFirstName']) && isset($_POST['exampleInputLogin']) && isset($_POST['exampleLastName']) && isset($_POST['exampleInputEmail']) && isset($_POST['exampleInputPassword']) && isset($_POST['exampleRepeatPassword'])) {
  if ($_POST['exampleInputPassword']==$_POST['exampleRepeatPassword']) {
    $FirstName=$_POST['exampleFirstName'];
    $LastName=$_POST['exampleLastName'];
    $Login=$_POST['exampleInputLogin'];
    $Email=$_POST['exampleInputEmail'];
    $Password=$_POST['exampleInputPassword'];
      if ($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
      }else{
        $sql = "INSERT INTO mmiusers (idUser,loginUser,passwordUser,nomUser,prenomUser,ageUser,weightUser,heightUser,sexeUser,emailUser) VALUES (NULL, '$Login', '$Password', '$FirstName','$LastName', NULL, NULL, NULL, NULL, '$Email')";
        $result = $conn->query($sql);
        if ($result) {
          $successfullyResgistered = true;
        }else {
          require_once 'registerError.php';
        }

      }
  }else {
      require_once 'registerError.php';
  }
}

  if ($successfullyResgistered) {
    require_once 'registeredCore.php';
  } else {
    require_once 'registerError.php';
  }


 ?>
