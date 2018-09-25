<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
<style>
  
</style>
<body style="font-size:90%">
    <br/>
        <img class="logo" src="logo.png" /> 
    	<h2 style="text-align:center">Code Violation Management</h2>
	
    <div class="header">
		<h4>Login</h4>
	</div>
	<form method="post" action="login">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" placeholder="user01@abc.com" required autofocus >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" placeholder="*******" required autofocus>
		</div>
		<div class="input-group">
			<button type="submit" class="btn btn-success" name="login_user">Login</button>
		</div>
		<p>
			Not a member yet ? <a href="Register.php">Sign up</a>
		</p>
        <p>
			 <a href="#" data-target="#pwdModal" data-toggle="modal">Forgot my password</a>
        </p>
	</form>
    
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
<!--forgot password modal-->

<div>
    
</div>
<div id="pwdModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <h1 class="text-center">What's My Password?</h1>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

      </div>
      <div class="modal-body">
          <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                          <p>If you have forgotten your password you can reset it here.</p>
                            <div class="panel-body">
                                <form method="post" id="insert_pwd" style="width:100%">
                                     
                                   <div class="input-group">
                                        <input class="form-control input-lg" placeholder="E-mail Address" id="lid" type="email">
                                   </div>
                                    <input name="sendpwd"  id="sendpwd" type="submit" class="btn btn-lg btn-primary" value="Send My Password">
                                </form>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
          <div class="col-md-3">
          <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
		  </div>	
      </div>
  </div>
  </div>
</div>
<script>
    
        
      var modal = document.getElementById('pwdModal');
      var pwd = document.getElementById('sendpwd');
      var emailid = document.getElementById('lid');
      
   $('#insert_pwd').on('submit', function(event){ 
                  
                 event.preventDefault();
         
                 if($('#lid').val() == "")  
                  {  
                    alert("Email is required");  
                  }  
                 
                  else{ 
                    
                     $.ajax({  
                     url:"forgot",  
                     method:"POST",  
                     data:{emailid:emailid},
                     beforeSend:function(){ 
                         alert("Email sending");
                          $('sendpwd').val("Sending");  
                     }, 
                      success:function(data){
                          
                          $('#pwdModal').modal('hide'); 
                              
                              }
                          
                    });  
                    
                   }
 
       
   });
   
    
</script>