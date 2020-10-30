<?php 
    include 'config/myConfig.php';

    class Member_m extends Connect
    {
        function __construct()
        {
            parent::__construct();
            
        }


        public function getStudent(){
           $sql = 'Select * from tbl_student,tbl_faculty where tbl_student.facultys_id=tbl_faculty.id';
           $query = mysqli_query($this->conn,$sql);

           $result = array();
           while($row = mysqli_fetch_assoc($query))
           {
               $result[]=$row;
           }
           return $result;
        }

        public function getStudentID($id)
        {
            $sql = "Select * from tbl_student where id = :id";
            $pre = $this->pdo->prepare($sql);
            
        }
    }


?>