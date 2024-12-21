<html>
<head>
    <title>Contacts View List</title>
</head>
<body>
    <h1>Contacts View List</h1>

    <?php if(count($records) > 0) { ?>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Message</th>
            <th>City</th>
        </tr>
        <tr>
        <?php foreach($records as $rec) { ?>
            <td> <?php echo $rec->id; ?></td>
            <td> <?php echo $rec->name; ?></td>
            <td> <?php echo $rec->email; ?></td>
            <td> <?php echo $rec->mobile; ?></td>
            <td> <?php echo $rec->message; ?></td>
            <td> <?php echo $rec->city; ?></td>
        <?php } ?>
        </tr>
    </table>
    <?php
    }
    else {
        echo "<p>No records found.</p>";
    }
    ?>

</body>
</html>