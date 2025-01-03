<section id="contentSection">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h2>Login Here</h2>
            <?php
                
                if ($this->session->tempdata("error")) {
                    echo "<p class='alert alert-danger'>" . $this->session->tempdata("error") . "</p>";
                }
                
                if ($this->session->tempdata("warning")) {
                    echo "<p class='alert alert-warning'>" . $this->session->tempdata("warning") . "</p>";
                }

                if (validation_errors()) {
                    echo "<p class='alert alert-danger'>" . validation_errors() . "</p>";
                }
                
                echo form_open();
            ?>
            <table>
                <tr>
                    <td><input class="form-control" type="text" name="email" /></td>
                </tr>
                <tr>
                    <td><input class="form-control" type="password" name="pwd" /></td>
                </tr>
                <tr>
                    <td><input class="btn btn-primary" type="submit" value="Login" /></td>
                </tr>
            </table>
            <?php echo form_close(); ?>
        </div>
    </div>
</section>