<?php //echo system_url();?>
<link href="asset/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<header class=" header row ">
  <div class="col-sm-2 col-xs-4 logo "><a href="<?php echo base_url();?>"><img class="img-circle " height="100" width="100" src="<?php echo base_url('asset/img/programmer.png');?>"/></a></div>
  <div class="col-sm-8 col-xs-4 ">
    <h1 class="hidden-xs">Prime <a class="btn-danger btn" href="<?php echo base_url("index.php/test/test");?>">Test</a></h1>
	  
   <h4></h4>
  </div>
  <div class="col-sm-2 col-xs-4 ">
    <div class="row">
    <div class="col-lg-4 hidden-xs"><img class=" img-rounded ppic" style="margin-top:5px;"  src="<?php echo base_url('asset/img/programmer2.png');?>"/>
    <div class="btn-group-sm" style="margin-top:5px;">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Account</button>
  <!--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
  </button>-->
  <ul class="dropdown-menu" role="menu">
    <li><a href="<?php echo base_url('index.php/user/getcpatcha');?>">
      <button class="btn btn-default btn-xs form-control">Login</button>
      </a></li>
    <li><a href="<?php echo base_url('index.php/user/signuppage');?>">
      <button class="btn btn-default btn-xs  form-control">Signup</button>
      </a></li>
  </ul>
</div>

</div>
    <div class="col-lg-8">
    
    
    
    
    
    
    </div>
      </div>
      
      
     
      
      
    </ul>
  </div>
</header>
