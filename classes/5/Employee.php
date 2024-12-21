<?php
    class Employee {
        
        private $con;
        
        public function __construct(){
            $this->con = mysqli_connect("localhost", "root", "", "db_gophp_ci3");
        }
        
        public function __destruct() {
            mysqli_close($this->con);
        }
        
        public function getAllEmployees() {
            $data = [];
            $result = mysqli_query($this->con, "SELECT * FROM employee");
            
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $data[] = $row;
                }
                return $data;
            }

            else {
                return $data;
            }
        }

        public function getMaxSalaryEmployee() {
            $data = [];
            $result = mysqli_query($this->con, "SELECT * FROM employees ORDER BY salary DESC LIMIT 1");
            
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                return $row;
            }
            
            else {
                return $data;
            }
        }
        
        public function getMinSalaryEmployee() {
            $data = [];
            $result = mysqli_query($this->con, "SELECT * FROM employees ORDER BY salary ASC LIMIT 1");
            
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                return $row;
            }
            
            else {
                return $data;
            }
        }
    }