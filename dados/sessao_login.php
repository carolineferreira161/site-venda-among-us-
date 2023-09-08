
<?php
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
        
    $host = $_ENV['PGHOST']; 
    $port = $_ENV['PGPORT'];
    $dbname = $_ENV['PGDATABASE']; 
    $user = $_ENV['PGUSER']; 
    $password = $_ENV['PGPASSWORD']; 

     print_r($_POST['email']);
     print_r($_POST['senha']);
   
   
    include_once ('conect.php');
     $email=$_POST['email'];
     $senha=$_POST['senha'];

    $teste=new PDO("pgsql:host=$host;port=5432;dbname=$dbname", $user, $password);

     $mysql="SELECT * FROM usuarios WHERE email='$email' and senha = '$senha'";

     $result=$teste->prepare($mysql);
     $result->execute();
   
   if($result->execute()){
        echo 'SIM LOGIN!';
    }else{
        echo 'NAO LOGIN!';
    }
      echo 'acessou a conta';
    
}else{
    echo'não acessou o cliente';

}



 