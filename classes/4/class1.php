<?php
    class Employee {

        private $con = null;

        public function __construct() {
            echo "<p>Connected (Constructor)</p>";
            $this->con = mysqli_connect("localhost","root","","db_gophp_ci3");
        }

        public function __destruct() {
            echo "<p>Disconnected (Destructor)</p>";
            mysqli_close($this->con);
        }
        
        public function addEmp() {
            //mysqli_query($this->con,"INSERT QUERY");
            echo "Add Employee<br>";
        }
        
        public function viewEmp() {
            //mysqli_query($this->con,"SELECT QUERY");
            echo "View Employees<br>";
        }
        
        public function editEmp() {
            //mysqli_query($this->con,"UPDATE QUERY");
            echo "Edit Employee<br>";
        }
        
        public function deleteEmp() {
            //mysqli_query($this->con,"DELETE QUERY");
            echo "Delete Employee<br>";
        }
    }

    $Obj = new Employee();

    $Obj->addEmp();
    $Obj->viewEmp();
    $Obj->editEmp();
    $Obj->deleteEmp();

?>