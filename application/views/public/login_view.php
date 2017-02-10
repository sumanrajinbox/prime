
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link href="asset/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<?php $this->view('public/plugin.php');?>
</head>
<body>
<main class="container-fluid">
   <?php $this->view('public/header.php');?>
  <?php include('application/views/public/menu.php');?>
  <section class="section1 row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
  
      
      <div class="panel panel-warning">
        <div class="panel-heading">
          <h4>Login</h4>
          <?php 
			//echo($this->session->flashdata('errorcaptcha'));
			echo ($this->session->flashdata('unsuccess'));
			?>
        </div>
        <div class="panel-body">
          <div class="col-lg-12"> <?php echo form_open(base_url('index.php/user/login'),'class="form-horizontal"');?>
            <div class="form-group">
              <label class="control-label col-sm-3" for="uname">User name:</label>
              <div class="col-sm-7"> <?php echo  form_input(['type'=>'text','name'=>'uname','class'=>'form-control','placeholder'=>'Enter User name','id','uname','value'=>set_value('uname')]);?>
                <?= form_error('uname');?>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="password">Password:</label>
              <div class="col-sm-7"> <?php echo  form_input(['type'=>'password','name'=>'password','placeholder'=>'Enter Password','id'=>'password','class'=>'form-control']);?>
                <?= form_error('password');?>
              </div>
            </div>
            <div class="form-group">
             
              <div class="col-sm-3"> 
           
              </div>
				<div class="col-lg-3"> <?php echo $captcha['image']; ?></div>
				<div class="col-lg-4"><?php echo  form_input(['type'=>'text','name'=>'captcha','placeholder'=>'CAPTCHA','class'=>'form-control text-center',]);?></div>
				<span><?php 
			echo($this->session->flashdata('errorcaptcha'));
		
			?></span>
            </div>
            
            <div class="form-group">
              <label class="control-label col-sm-3" for="email"></label>
              <div class="col-sm-7"> <?php echo  form_submit('login_submit','Login',['class'=>'btn btn-primary form-control']);?> </div>
            </div>
            <?php echo form_close();?> </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3"></div>
  </section>
  <section class="section2 row"></section>
  <?php $this->view('public/footer.php');?>
</main>
</body>
</html>


