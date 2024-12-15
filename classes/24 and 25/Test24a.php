<html>
	<head>
		<title>Test 24</title>
	</head>
	<body>
		<h1>Test 24</h1>
		<?php

		if($this->session->tempdata("error")) {
			echo "<p>".$this->session->tempdata("error")."</p>";
		}
		if($this->session->tempdata("success")) {
			echo "<p>".$this->session->tempdata("success")."</p>";
		}

		// echo validation_errors();
		echo form_open();
		?>

		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="<?php echo set_value("uname"); ?>"></td>
				<?php echo form_error('uname'); ?>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="<?php echo set_value("email"); ?>"></td>
				<?php echo form_error('email'); ?>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="<?php echo set_value("pwd"); ?>"></td>
				<?php echo form_error('pwd'); ?>
			</tr>
			<tr>
				<td>Confirm Password</td>
				<td><input type="password" name="<?php echo set_value("cpwd"); ?>"></td>
				<?php echo form_error('cpwd'); ?>
			</tr>
			<tr>
				<td>Mobile</td>
				<td><input type="text" name="<?php echo set_value("mobile"); ?>"></td>
				<?php echo form_error('mobile'); ?>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="Male" <?php if (set_value('gender') == "Male") echo "checked" ?> />Male
					<input type="radio" name="gender" value="Female" <?php if (set_value('gender') == "Female") echo "checked" ?> />Female
					<?php echo form_error('gender'); ?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Register"></td>
			</tr>
			
		</table>
	</body>
</html>