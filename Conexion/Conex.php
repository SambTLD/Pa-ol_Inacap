
<?php
define('DB_SERVER', 'localhost:3306');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'bddpanol1');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
 class Conex
 {
  private static $instance;
  private $host = "localhost";
  private $user = "root";
  private $pass = "";
  private $bd = "bddpanol1";

  private function __construct()
  {

  }

  public static function getInstance()
  {
   if(!self::$instance instanceof self)
    {
     self::$instance = new self;
    }
    return self::$instance;
  }

  public function openConnection()
  {
   try
   {
    $this->conexion = mysqli_init();
    $this->conexion->real_connect($this->host, $this->user, $this->pass, $this->bd);
   }
   catch(Exception $e)
   {
    $this->conexion = NULL;
    return 0;
   }
  }

  public function useConnection()
  {
   if($this->conexion != NULL)
    return $this->conexion;
   else
    return 0;
  }

  public function closeConnection()
  {
   $this->conexion->close();
  }
 }
?>