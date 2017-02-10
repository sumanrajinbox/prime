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
			<div class="col-lg-2"></div>
			<div class="col-lg-8 ">
				<div class="panel panel-danger">
					<div class="panel-heading">dynamic field generate </div>
					<div class="panel-body">
						<form action="" method="post" name="myform" id="myform">
						<div class="row">
							<div class="form-group text-center col-lg-4">
								<select id="person" class="form-control">
									<option value="1">Person 1 </option>
									<option value="2">Person 2 </option>
									<option value="3">Person 3 </option>
									<option value="4">Person 4 </option>
								</select>

							</div></div>
							<div class="row">
							<div id="groupi" class="form-group"> </div></div>
							<div class="form-group"><input type="submit" class="btn btn-primary" value="submit"/> </div>
					</div>
					</form>
				</div>
			</div>
			<div class="col-lg-2"></div>
		</section>
		<script>
			var inputarea = $( '#groupi' );
			var maxinput = 10;
			$( document ).ready( function () {

				$( '#person' ).on( 'change', function ( e ) {
					e.preventDefault();

					$( inputarea ).empty();
					var j = 1
					for ( i = 0; i < this.value; i++ ) {

						$( '#groupi' ).append( '<div class="row"><div class="col-lg-4"><div class=" form-group" ><input type="text" id="adult' + j + '" class="form-control" name="mytext[]" placeholder="person ' + j + '"/></div></div><div class="col-lg-6"><div class=" form-group" ><input type="email" id="email' + j + '" class="form-control" name="email[]" placeholder="Person' + j + '@xyx.com"/></div></div><div class="col-lg-2"><div class=" form-group" >mark<input type="checkbox" id="adult' + j + '" name="adult[]" placeholder="Person' + j + '@xyx.com"/></div></div></div>' ); //add input box		
						j++;
					}
					//return false;	

				} )
			} );
			var element=document.
		</script>

		<?php $this->view('public/footer.php');?>
	</main>
</body>

</html>


<?php $this->benchmark->mark('code_end');?>