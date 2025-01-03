<section id="contentSection">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h1>Change Password</h1>
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
                <label>Enter Old Password</label>
                <input type="text" name="opwd" class="form-control">
            </div>
            <div class="form-group">
                <label>Enter New Password</label>
                <input type="password" name="npwd" class="form-control">
            </div>
            <div class="form-group">
                <label>Confirma New Password</label>
                <input type="password" name="cnpwd" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Validate Password" class="btn btn-primary" />
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</section>