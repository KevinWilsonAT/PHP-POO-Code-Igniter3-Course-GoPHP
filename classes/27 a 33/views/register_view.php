<section id="contentSection">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h2>Register Here</h2>
            <?php
                if ($this->session->tempdata("error")) {
                    echo "<p class='alert alert-danger'>" . $this->session->tempdata("error") . "</p>";
                }
                
                if ($this->session->tempdata("success")) {
                    echo "<p class='alert alert-success'>" . $this->session->tempdata("success") . "</p>";
                }
                
                echo form_open();
            ?>
            <table class="table">
                <tr>
                    <td>Username</td>
                    <td> <input class="form-control" type="text" name="uname" value="<?php echo set_value("uname"); ?>" /> </td>
                    <?php echo form_error('uname'); ?>
                </tr>
                <tr>
                    <td>Email</td>
                    <td> <input class="form-control" type="text" name="email" value="<?php echo set_value("email"); ?>" /> </td>
                    <?php echo form_error('email'); ?>
                </tr>
                <tr>
                    <td>Password</td>
                    <td> <input class="form-control" type="text" name="pwd" /> </td>
                    <?php echo form_error('pwd'); ?>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td> <input class="form-control" type="text" name="cpwd" /> </td>
                    <?php echo form_error('cpwd'); ?>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td> <input class="form-control" type="text" name="mobile" value="<?php echo set_value("mobile"); ?>" /> </td>
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
                    <td> <input class="btn btn-primary" type="submit" value="Register" /> </td>
                </tr>
            </table>
            <?php echo form_close(); ?>
        </div>
    </div>
</section>