<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>Test2</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstrap/bootstrap.css'); ?>">
	<style>
	#formRow {
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
	.table {
		width: 800px;
		margin-left: 100px;
	}
	#checkbox {
		text-align: left;
	}

	</style>
</head>
<body>
	<div class="jumbotron">
		<form name="CustomerForm" method="post" action="<?= base_url('customer/store'); ?>">
				<input class="form-control" id="formRow" type="text" name="firstName" placeholder="First Name" maxlength="50"/><br>
				<input class="form-control" id="formRow" type="text" name="lastName" placeholder="Last Name" maxlength="50"/><br>
				<input class="form-control" id="formRow" type="text" name="email" placeholder="E-mail" maxlength="70"/><br>
				<input class="form-control" id="formRow" type="text" name="cpf" placeholder="CPF" maxlength="11"/><br>
				<input class="form-control" id="formRow" type="date" name="birthday" placeholder="Birthday" maxlength="10"/><br>
				<input id="checkbox" name="Is_active" type="checkbox" value="1"/>Is active!<br>
				<input class="btn btn-primary btn-block" id="submitBtn" type="submit" value="Submit">
		</form>
	</div>
		<table class="table">
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>E-mail</th>
				<th>CPF</th>
				<th>Birthday</th>
				<th>Is active?</th>
				<th>Action</th>
			</tr>

			<?php foreach($customers_array as $cust): ?>
			<tr>
				<td><?php echo $cust->firstName; ?></td>
				<td><?php echo $cust->lastName; ?></td>
				<td><?php echo $cust->email; ?></td>
				<td><?php echo $cust->cpf; ?></td>
				<td><?php echo $cust->birthday; ?></td>
			<td>
				<?php
					if ($cust->Is_active == "1") {
					    echo "Sim";
					} else {
					    echo "Não";
					}
				?>
			</td>
				<td>
					  <a href="<?= base_url('customer/edit/' . $cust->id); ?>">Edit<a>
					<a href="<?= base_url('customer/delete/' . $cust->id); ?>">Delete<a>
				</td>
			</tr>
			<?php endforeach; ?>

		</table>
</body>
</html>