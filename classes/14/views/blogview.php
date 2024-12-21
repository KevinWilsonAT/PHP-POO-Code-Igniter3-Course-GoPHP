<html>
<head>
    <title>All Articles</title>
</head>
<body>
    <h1>All articles</h1>
    
    <?php if(count($articles) > 0) { ?>
        <ul>
            <?php foreach($articles as $art) {
                echo "<li>" . $art['title'] . "</li>";
            } ?>
        </ul>
    <?php }
    
    else {
        echo "No records";
    }    
    ?>

</body>
</html>