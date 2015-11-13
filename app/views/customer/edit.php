<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstrap/bootstrap.css'); ?>">
	<style>
		.formRow {
			width: 300px;
			margin-left: auto;
			margin-right: auto;
		}
		#submitBtn {
			width: 200px;
			margin-top: 2px;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 5px;
		}
	</style>
</head>
<body>

<form class="jumbotron" name="CustomerForm" method="post" action="<?= base_url('customer/update'); ?>">
		<input class="formRow form-control" type="text" name="firstName" placeholder="First Name" maxlength="50" value=" <?php echo $customer_data->firstName; ?>"/><br>
		<input class="formRow form-control form-control form-control form-control form-control" type="text" name="lastName" placeholder="Last Name" maxlength="50" value=" <?php echo $customer_data->lastName; ?>"/><br>
		<input class="formRow form-control form-control form-control form-control" type="text" name="email" placeholder="E-mail" maxlength="70" value="<?php echo $customer_data->email; ?>"/><br>
		<input class="formRow form-control form-control form-control" type="text" name="cpf" placeholder="CPF" maxlength="11" value="<?php echo $customer_data->cpf; ?>"/><br>
		<input class="formRow form-control form-control" type="date" name="birthday" placeholder="Birthday" maxlength="10" value="<?php echo $customer_data->birthday; ?>"/><br>
		<input name="Is_active" type="checkbox" value="1" <?php echo ($customer_data->Is_active == 1) ? 'checked="checked"' : '' ?>>Is active!<br>
		<input id="submitBtn" class="btn btn-primary btn-block" type="submit" value="Submit">
		<input name="id" type="hidden" value="<?php //echo $usuario['id'] ?>">
</form>
</body>
</html>