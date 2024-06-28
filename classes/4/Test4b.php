<?php
    include './Test4.php';
    $obj = new Employee();
    
    $empList = $obj->getAllEmployees();
    echo "<pre>";
    print_r($empList);
?>

<html>
    <head>
        <title>List Of Empoyees</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <?php if(count($empList) > 0){
                    foreach ($empList as $x){
                ?>
                <div class="col-md-3">
                    <p><b>ID</b>: <?php echo $x['id'];?></p>
                    <p><b>Name</b>: <?php echo $x['name'];?></p>
                    <p><b>Salary</b>: <?php echo $x['salary'];?></p>
                    <p><b>City</b>: <?php echo $x['city'];?></p>
                </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </body>
</html>