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
         <h3>Register</h3>  
        </div>  
        <div class="panel-body">  
          
         <form action="<?= base_url('Register/register'); ?>" method="post" class="user">  
          <div class="row">  
           <div class="col-sm-6">  
            <div class="form-group">  
                    <label class="control-label" for="firstname">First Name</label> 
                      <div >  
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required="">    
                      </div>  
                  </div>  
           </div>  
           <div class="col-sm-6">  
            <div class="form-group">  
                    <label class="control-label" for="lastname">Last Name</label>  
                      <div >  
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required="">   
                      </div>  
                  </div>  
           </div>  
          </div>  
          <div class="form-group">  
                  <label class="control-label" for="email">Email</label>  
                    <div>  
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">    
                    </div>  
                </div>  
                <div class="form-group">  
                  <label class="control-label" for="password">Password</label>  
                    <div>  
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="">  
                       
                    </div>  
                </div>  
                <div class="form-group">  
                  <label class="control-label" for="password">Confirm Password</label>
                    <div>  
                      <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" required="">
                    </div>  
                </div>  
                <div class="form-group">   
                  <div class="row">  
                    <div class="col-sm-offset-5 col-sm-3 btn-submit">  
                      <button type="submit" class="btn btn-success">Register</button>  
                    </div>  
                  </div>  
                </div>  
         </form>  
        </div>  
        <div class="panel-footer text-center">  
         <h5><a href="http://codesquery.com">GOODSISGOOD</a></h5>  
        </div>  
       </div>  
      </div>  
     </div>  
    </div>  
   </div>  
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>
</html>