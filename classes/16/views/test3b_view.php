<!DOCTYPE html>
<html>
<head>
    <title>Basic HTML</title>
</head>
<body>
    <h1>Basic HTML</h1>
    <?php echo form_open(); ?>
    
    <table>
        <tr>
            <td>Username</td>
            <td> <?php echo form_input("uname"); ?> </td>
        </tr>
        <tr>
            <td>Email</td>
            <td> <?php echo form_input("email"); ?> </td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td> <?php echo form_input("mobile"); ?> </td>
        </tr>
        <tr>
            <td>Message</td>
            <td> <?php echo form_textarea("message"); ?> </td>
        </tr>
        <tr>
            <td> <?php echo form_submit("Save", "Save"); ?> </td>
        </tr>
    </table>
    
    <?php echo form_close(); ?>


    <!--
        <form action="">
            <input type="text" name="uname" value="ram@email.com">
            <input type="submit" name="save" value="Save">
        </form>
    -->
        
</body>
</html>