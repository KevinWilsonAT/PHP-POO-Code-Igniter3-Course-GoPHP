<html>
<head>
    <title>URL Helper</title>
</head>
<body>
    <?php echo heading("URL Helper",1); ?>

    <p>Base URL: <?php echo base_url(); ?> </p>
    <p>Site URL: <?php echo site_url(); ?> </p>
    <p>Current URL: <?php echo current_url(); ?> </p>
    <p>URI String: <?php echo uri_string(); ?> </p>
    <p>Index Page: <?php echo index_page(); ?> </p>

    <?php
        echo anchor('https://google.com.br', 'Google', 'title="Visit Google"');
        echo anchor('https://facebook.com.br', 'Facebook', 'title="Visit Facebook"');
    ?>
</body>
</html>