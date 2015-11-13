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

				<?php
					// include_once('inc/conexao.php');
					// $sql = "SELECT id, firstName, lastName, email, cpf, birthday, Is_active FROM usuarios";
					// $result = $conn->query($sql);

					// if ($result->num_rows > 0) {
					    // echo "<table>";
					    // while($row = $result->fetch_assoc()) {
				?>
			<tr>
				<td><?php //echo $row["firstName"] ?></td>
				<td><?php //echo $row["lastName"] ?></td>
				<td><?php //echo $row["email"] ?></td>
				<td><?php //echo $row["cpf"] ?></td>
				<td><?php //echo $row["birthday"] ?></td>
			<td>
				<?php
								//if ($row["Is_active"] == "1") {
					    //echo "Sim";
					//} else {
					   // echo "Não";
					//}
				?>
			</td>
				<td>
					  <a href="edit.php?id=<?php //echo $row['id'] ?>">Edit<a>
					<a href="delete.php?id=<?php //echo $row['id'] ?>">Delete<a>
				</td>
		</tr>
			<?php	        
				        // echo "<tr><td>".$row["firstName"]."</td><td>".$row["lastName"]."</td><td>".$row["email"]."</td><td>".$row["cpf"]."</td><td>".$row["birthday"]."</td><td>".$row["Is_active"]."</td></tr>";
				    // }
				    // echo "</table>";
				// } else {
				//     echo "0 results";
				// }
				// $conn->close();
			?>

			</table>
</body>
</html>