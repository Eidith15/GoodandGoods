<html>
    <head>
		<title><?= $title; ?></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >  
        <style type="text/css">  
        .form-box{  
        max-width: 500px;  
        position: relative;  
        margin: 5% auto;  
        }  
   </style>  
		
    </head>
    <body>
        <!-- <h1>Selamat Datang</h1> -->

  </head>
  <body>
    
    <div class="wrapper">  
    <div class="container">  
     <div class="row">  
      <div class="form-box">  
       <div class="panel panel-primary">  
        <div class="panel-heading text-center">  
         <h3>Login</h3>  
        </div>  
        <div class="panel-body">    
            <form action="<?= base_url('Register/register'); ?>" method="post" class="user">  
                <div class="row">  
                    <div class="col-sm-12">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="username">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="password">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                    </div>
                <div class="form-group">   
                    <div class="row">  
                        <div class="col-sm-offset-5 col-sm-3 btn-submit">  
                            <button type="submit" class="btn btn-success">Login</button>  
                        </div>  
                    </div>  
                </div>  
            </form>  
        </div>
    </div>
                <div class="panel-footer text-center">  
                    <h5>
                        <a href="http://codesquery.com">GOODSISGOOD</a>
                    </h5>  
                </div>  
</div>