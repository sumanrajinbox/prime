<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign Up</title>
<link href="asset/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<?php $this->view('admin/plugin.php');?>
</head>

<body>
<main class="container-fluid">
 
  <?php $this->view('admin/header.php');?>
  <?php include('application/views/admin/menu.php');?>
  <section class="section1 row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
      <div class="panel panel-warning">
        <div class="panel-heading">
          <h4>Signup</h4>
        </div>
        <div class="panel-body">
          <div class="col-lg-12"> <?php echo form_open(base_url('index.php/user/signup'),'class="form-horizontal"');?>
            <div class="form-group">
              <label class="control-label  col-sm-4" for="fname">First name</label>
              <div class="col-sm-7"> <?php echo  form_input(['type'=>'text','name'=>'fname','class'=>'form-control','placeholder'=>'First name','id','fname','value'=>set_value('fname')]);?>
                <?= form_error('fname');?>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-4" for="lname">Last name</label>
              <div class="col-sm-7"> <?php echo  form_input(['type'=>'text','name'=>'lname','class'=>'form-control','placeholder'=>'Last name','id','lname','value'=>set_value('lname')]);?>
                <?= form_error('lname');?>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-4" for="email">Email</label>
              <div class="col-sm-7"> <?php echo  form_input(['type'=>'text','name'=>'email','class'=>'form-control','placeholder'=>'Enter email address','id','email','value'=>set_value('email')]);?>
                <?= form_error('email');?>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-4" for="password">Password</label>
              <div class="col-sm-7"> <?php echo  form_input(['type'=>'password','name'=>'password','placeholder'=>'Enter your password','id'=>'password','class'=>'form-control']);?>
                <?= form_error('password');?>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-4" for="cpassword">Confirm Password</label>
              <div class="col-sm-7"> <?php echo  form_input(['type'=>'password','name'=>'cpassword','placeholder'=>'Re-password','id'=>'cpassword','class'=>'form-control']);?>
                <?= form_error('cpassword');?>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-4" ></label>
              <div class="col-sm-7"> <?php echo  form_submit('signup_submit','Signup',['class'=>'btn btn-primary form-control']);?> </div>
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