<?php
if(isset($_POST['email']) && isset($_POST['password'])){

    
$email = $_POST['email'];
$Upassword = $_POST['password'];

echo $email;
echo $Upassword;
$dbname = "ajaxtest";
$username = "root";
$password = "";
$host = "localhost";

try{
    
    $dns = 'mysql:host='.$host.';dbname'.$dbname;
    $pdo = new PDO($dns,$username,$password);
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "INSERT INTO $dbname.j_users (email,password) VALUES(:email , :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email'=> $email, 'password'=>$Upassword]);
    echo $stmt->fetch();
    
    
    
} catch(PDOException $e) {
      
  echo $e->getMessage();
    
}




}