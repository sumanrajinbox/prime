<?php ?>
<?php



?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link href="../../../asset/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<?php $this->view('public/plugin.php');

?>
</head>

<body>
	<main class="container-fluid">


		<?php $this->view('public/header.php');?>

		<?php //$this->view('menu.php');?>
		<?php include('application/views/public/menu.php');?>
		<section class="section1 row">
			<div class="col-lg-12 ">
				<img class="img-circle" src="asset/img/id.jpg" height="100" width='100'/>
				<p>

					<?php 
		foreach($data2 as $matter)
		{
			
		echo $matter['matter'];
			echo str_repeat('<br>',5);
		}
		   
		  ?>
				</p>
			</div>
		</section>
		<section class="section2 row">
			<h1>comment</h1>
			<div class="row">
				<div class="col-lg-12"> <textarea name="editor1" id="editor1">
   
            </textarea>
					<script>
						// Replace the <textarea id="editor1"> with a CKEditor
						// instance, using default configuration.
						CKEDITOR.replace( 'editor1' );
					</script>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<p class="comment"></p>
				</div>
			</div>
		</section>
		<?php $this->view('public/footer.php');?>
	</main>
</body>

</html>


<?php $this->benchmark->mark('code_end');?>