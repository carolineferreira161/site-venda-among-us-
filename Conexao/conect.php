<?php

class conect {

    protected $db;
    protected static $conect;
   
    public function getDb() {
        return $this->db;
    }

    public function setDb($db): void {
        $this->db = $db;
    }

    public static function setConect($registro): void {
        self::$conect = $conect;
    }
    

    public static function conexao() {
        if(!isset(self::$conect)){//self é this-> so que usa esse por conta de ser static
        try {
            $host = $_ENV['PGHOST']; 
            $port = $_ENV['PGPORT'];
            $dbname = $_ENV['PGDATABASE']; 
            $user = $_ENV['PGUSER']; 
            $senha = $_ENV['PGPASSWORD']; 
            
        $db = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$senha");
        echo '|conectou|';
        
        
        }catch (PDOException $ex) {
                echo "Mostrado o seguinte erro: ";
                die($ex->getMessage());
            }
    }   
       
   return $db;
  }
  
   
  }
 // conect::conexao();
  
  


