<?php 
class Connect{
    private const host = 'localhost';
    private const user = 'root';
    private const pass='';
    private const db = 'php0720e2_itplus';
    protected $conn = null;
    function __construct(){
        $this->conn=mysqli_connect(self::host,self::user,self::pass,self::db) or die('Cant connect to db');
        if($this->conn)
        {
            mysqli_set_charset($this->conn,'utf8');
            
        }
        else{
            echo 'Cant connect db';
        }
    }
    
        
    
}

$conn = new Connect();
?>