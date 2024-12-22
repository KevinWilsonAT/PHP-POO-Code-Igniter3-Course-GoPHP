<html>
<head>
    <title>Register Here</title>
</head>
<body>
    <h1>Register Here</h1>
    <?php echo form_open();

    if ($this->session->tempdata("error")) {
        echo "<p>" . $this->session->tempdata("error") . "</p>";
    }
    
    if ($this->session->tempdata("success")) {
        echo "<p>" . $this->session->tempdata("success") . "</p>";
    }
    
    ?>
    <table>
        <tr>
            <td>Username</td>
            <td> <input type="text" name="uname" value="<?php echo set_value("uname"); ?>" /> </td>
            <?php echo form_error('uname'); ?>
        </tr>
        <tr>
            <td>Email</td>
            <td> <input type="text" name="email" value="<?php echo set_value("email"); ?>" /> </td>
            <?php echo form_error('email'); ?>
        </tr>
        <tr>
            <td>Password</td>
            <td> <input type="text" name="pwd" /> </td>
            <?php echo form_error('pwd'); ?>
        </tr>
        <tr>
            <td>Confirm Password</td>
            <td> <input type="text" name="cpwd" /> </td>
            <?php echo form_error('cpwd'); ?>
        </tr>
        <tr>
            <td>Mobile</td>
            <td> <input type="text" name="mobile" value="<?php echo set_value("mobile"); ?>" /> </td>
            <?php echo form_error('mobile'); ?>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="gender" value="Male" <?php if(set_value('gender') == "Male") echo "checked"; ?> />Male
                <input type="radio" name="gender" value="Female" <?php if(set_value('gender') == "Female") echo "checked"; ?> />Female
                <?php echo form_error('gender'); ?>
            </td>
        </tr>
        <tr>
            <td> <input type="submit" value="Register" /> </td>
        </tr>
    </table>
    <?php echo form_close(); ?>
</body>
</html>