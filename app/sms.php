<?php
	require '../config/config.php';
	if(empty($_SESSION['username']))
		header('Location: login.php');	

		try {
			$stmt = $connect->prepare('SELECT * FROM users');
			$stmt->execute();
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		catch(PDOException $e) {
			$errMsg = $e->getMessage();
		}

		if(isset($_POST['sms_alert'])) {
			try {
				print_r($_POST);
				foreach ($_POST['check'] as $key => $value) {
				}

				exit();
				header('Location: sms.php');
			}
			catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
		}
?>
<?php include '../include/header.php';?>
	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#212529;" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="../index.php">To-Let</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="login.php"><?php echo $_SESSION['fullname']; ?> <?php if($_SESSION['role'] == 'admin'){ echo "(Admin)"; } ?></a>
            </li>
            <li class="nav-item">
              <a href="../auth/logout.php" class="nav-link">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<?php include '../include/side-nav.php';?>
<section class="wrapper" style="margin-left:16%;margin-top: -11%;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php
					if(isset($errMsg)){
						echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
					}
				?>
				<h2>List Of Users</h2>
				<div class="table-responsive text-center">
					<form action="" method="post">
						<table class="table table-bordered">
						  <thead>
						    <tr>
						      <th><input type="checkbox" name="" id="selectAll"></th>
						      <th>Full Name</th>
						      <th>Contact</th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php 
						  		foreach ($data as $key => $value) {				  			
								   echo '<tr>';
								      echo '<th scope="row"><input type="checkbox" name="check[]" value="'.$value['mobile'].'" id="selectAll$key"></th>';
								      echo '<td>'.$value['fullname'].'</td>';
								      echo '<td>'.$value['mobile'].'</td>';
								   echo '</tr>';
						  		}
						  	?>
						  </tbody>
						</table>
						<input type="textarea" name="message" class="form-control" placeholder="Enter Message(Message Body)" required>
						<br>
						<button type="submit" class="btn btn-success" name='sms_alert' value="sms_alert">Send SMS</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include '../include/footer.php';?>
<script type="text/javascript">

	$('#selectAll').click(function(){
		console.log("Welcome to sms alert"+$(this).prop("checked"));	
		$("input:checkbox").prop('checked', $(this).prop("checked"));	
	});
	
	
</script>