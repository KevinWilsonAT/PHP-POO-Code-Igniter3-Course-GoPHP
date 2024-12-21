<?php
    include './Employee.php';
    $obj = new Employee();
    
    $empList = $obj->getAllEmployees();
    echo "<pre>";
    print_r($empList);
?>

<html>
    <head>
        <title>List Of Employees</title>
    </head>
    <body>
        <h1>List Of Employees</h1>
        <?php
        if (count($empList) > 0){
            ?>
            <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Salary</th>
                <th>City</th>
            </tr>
            <?php
                foreach ($empList as $emp) {
            ?>
            <tr>
                <td><?php echo $emp['id'];?></td>
                <td><?php echo $emp['name'];?></td>
                <td><?php echo $emp['email'];?></td>
                <td><?php echo $emp['salary'];?></td>
                <td><?php echo $emp['city'];?></td>
            </tr>
                <?php
            }
            ?>
        </table>
            <?php
        }
        ?>
    </body>
</html>