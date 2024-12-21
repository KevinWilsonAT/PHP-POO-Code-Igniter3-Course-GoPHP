<html>
<head>
    <title> <?php echo $page_title; ?> </title>
</head>
<body>
    <h1> <?php echo $page_heading; ?> </h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php
        foreach($employees as $emp) { ?>
            <tr>
                <td> <?php echo $emp['id']; ?> </td>
                <td> <?php echo $emp['name']; ?> </td>
                <td> <?php echo $emp['email']; ?> </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>