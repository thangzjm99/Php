<?php 
    include 'model/Students_m.php';
    class Student_c extends Member_m
    {
        private $student;
        function __construct()
        {
            $this->student = new Member_m();
        }

        public function student(){
            if(isset($_GET['method']))
            {
                $method = $_GET['method'];
            }
            else 
            {
                $method = 'index';

            }

            switch($method){
                case'index': 
                    $rs=$this->student->getStudent();
                    include_once 'views/list_member.php';
                break;
                case 'edit': 
                    include_once 'views/edit_member.php';
                break;
                default : 
                break;
            }
           
        }
    }
?>