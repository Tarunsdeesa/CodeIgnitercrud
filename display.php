<!-- <?php
$name=$_SESSION['username'];
// print_r($_SESSION['username']);
// exit;

?> -->


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://localhost/codelgniter2/assets/css/display.css">
<script src="http://localhost/codelgniter2/assets/css/display.js"></script>
</head>
<body>
    <form action="" method="POST">
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Employees</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="http://localhost/codelgniter2/index.php/welcome/register/register.php" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Full_Name</th>
						<th>Mail_Address</th>
						<th>Passsword</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
                        <?php foreach($users as $k){ ?> 
                        <tr>
						<td><?php echo $k->Full_Name; ?></td>
                        <td><?php echo $k->Email; ?></td>
                        <td><?php echo $k->Passsword; ?></td>
                       
						<td>
							<a href="http://localhost/codelgniter2/index.php/register/edit/<?=$k->id?>" class="edit"><i class="material-icons" title="Edit">&#xE254;</i></a>
							<a href="http://localhost/codelgniter2/index.php/register/delete/<?=$k->id?>" class="delete" ><i class="material-icons"title="Delete">&#xE872;</i></a>
						</td>
					</tr>
                    <?php   }; ?>
					 
				</tbody>
			</table>
			
		</div>
	</div>        
</div>

			</form>
		</div>
	</div>
</div>

			</form>
		</div>
	</div>
</div>

			</form>
		</div>
	</div>
</div>
</form>

<!-- <?php
print_r($users);
?> -->
</body>
</html>