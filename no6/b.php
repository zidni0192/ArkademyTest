<?php 

	$con = mysqli_connect("localhost","root","","programmer");
	if (isset($_POST['btnProgrammer'])) {
		$nama = $_POST['programmer'];
		mysqli_query($con,"INSERT INTO users VALUES(null,'$nama')")or die(mysqli_error($con));
	}else if (isset($_POST['btnSkill'])) {
		$iduser = $_POST['id'];
		$nama = $_POST['skill'];
		mysqli_query($con,"INSERT INTO skills VALUES(null,'$nama','$iduser')")or die(mysqli_error($con));
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>PROGRAMMER</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<h1 class="text-center" style="margin: 30px 10px;">INPUT DATA AND SKILL PROGRAMMER</h1>
			<div class="card">
				<div class="card-header">
					<form class="col-lg-12 col-xs-12 col-md-12" method="POST">
						Tambahkan Nama Programmer
						<div class="form-inline">
							<input type="text" name="programmer" placeholder="Tambahkan Programmer" class="form-control col-lg-8 col-md-8 col-xs-12">
							<input type="submit" name="btnProgrammer" class="btn btn-success col-lg-4 col-md-4 col-xs-12">
						</div>
					</form>
				</div>
				<?php 
					$select = mysqli_query($con,"SELECT * from users");
					while ($data = mysqli_fetch_array($select)) {
						$select2 = mysqli_query($con,"SELECT * FROM skills where user_id='".$data['id']."'");
						$iduser = $data['id'];
				?>
				<div class="card-body form-inline">
					<div class="col-lg-6 col-md-6 col-xs-12" style="margin-bottom: 20px;">
						<div class="col-lg-12 col-md-12 col-xs-12 card-header">
							Nama : <?php echo $data['name']; ?>
						</div>

						<div class="col-lg-12 col-md-12 col-xs-12 card-header">
							Skill : 
							<?php 
								while ($data= mysqli_fetch_array($select2)) {
									echo $data['name'].',';
								}
							?>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xs-12">
						<div class="col-lg-12 col-md-12 col-xs-12 form-inline">
							<form method="POST" class="col-lg-12 col-md-12 col-xs-12">	
								<input type="hidden" name="id" value="<?php echo $iduser; ?>">							
								<input type="text" name="skill" placeholder="Tambahkan Skill" class="form-control col-lg-8 col-md-8 col-xs-12">
								<input type="submit" name="btnSkill" class="btn btn-success col-lg-4 col-md-4 col-xs-12">	
							</form>
						</div>
					</div>
				</div>
				<?php 
					}
				?>
			</div>
		</div>
	</body>
</html>

