<section id="contentSection">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h1>Edit Profile</h1>
            <?php
                if (validation_errors()) {
                    echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
                }

                if ($this->session->tempdata("success")) {
                    echo "<div class='alert alert-success'>" . $this->session->tempdata("success") . "</div>";
                }

                if ($this->session->tempdata("error")) {
                    echo "<div class='alert alert-danger'>" . $this->session->tempdata("error") . "</div>";
                }

                echo form_open();
            ?>

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="uname" value="<?php echo $user->username; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="mobile" value="<?php echo $user->mobile; ?>" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Update Profile" class="btn btn-primary" />
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</section>