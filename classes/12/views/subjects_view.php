<html>
<head>
    <title>List of subjects</title>
</head>
<body>
    <h1>List of subjects</h1>

    <?php print_r($subjects); ?>

    <ul>
        <?php foreach($subjects as $v) { ?>
        <li><?php echo $v; ?></li>
        <?php } ?>
    </ul>
</body>
</html>