<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Form</h1>
    <?php
        echo form_open();
        ?>
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name" id="name" value="<?php echo set_value('name'); ?>">
                    <span> <?php echo form_error('name'); ?> </span>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="email" id="email" value="<?php echo set_value('email'); ?>">
                    <span> <?php echo form_error('email'); ?> </span>
                </td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td>
                    <input type="text" name="mobile" id="mobile" value="<?php echo set_value('mobile'); ?>">
                    <span> <?php echo form_error('mobile'); ?> </span>
                </td>
            </tr>
            <tr>
                <td> <input type="submit" name="save" value="Send"> </td>
            </tr>
        </table>
    <?php echo form_close(); ?>
</body>
</html>