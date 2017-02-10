<?php ?>
<?php



?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link href="../../../asset/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<?php $this->view('public/plugin.php');?>
</head>

<body>
	<main class="container-fluid">


		<?php $this->view('admin/header.php');?>

		<?php //$this->view('menu.php');?>
		<?php include('application/views/admin/menu.php');?>
		<section class="section1 row">

			<div class="col-lg-12 ">
				<h1> Administrator home  page 
	  </h1>
	  

			</div>
		</section>
		<section class="section2 row"></section>
		<?php $this->view('public/footer.php');?>
	</main>
</body>

</html>


<?php $this->benchmark->mark('code_end');?>