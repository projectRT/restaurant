<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

        <div class="container-fluid bg">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12"></div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                   
                    <form id="sign" method="post" action="sp.php" onsubmit="return validation(this);">
                      <h1>Sign up</h1>
                       <div class="form-group">
                            <label>First Name:</label>
                            <input type="text" class="form-control" placeholder="First Name" id="firstname" name="firstname">
                            <span id="fn" style="color: red; font-size: 17px; font-weight: bolder; text-align: center;"></span>
                        </div>
                        <div class="form-group">
                            <label>Last Name:</label>
                            <input type="text" class="form-control" placeholder="Last Name" id="lastname" name="lastname">
                            <span id="ln" style="color: red; font-size: 17px;font-weight: bolder; text-align: center;"></span>
                        </div>
                        <div class="form-group">
                            <label>Username:</label>
                            <input type="text" class="form-control" placeholder="username" id="username" name="username">
                            <span id="un" style="color: red; font-size: 17px;font-weight: bolder; text-align: center;"></span>
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                            <span id="emails" style="color: red; font-size: 17px;font-weight: bolder; text-align: center;"></span>
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
                            <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                            <span id="pw" style="color: red; font-size: 17px;font-weight: bolder; text-align: center;"></span>
                        </div>
                        
                        <div class="checkbox">
                            <label><input type="checkbox">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Sign Up</button>
                    </form>
                    
                    
                    
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12"></div>

            </div>        
        </div>
        
    <script type="text/javascript">
    
        function validation(form){
            
           var firstname = document.getElementById('firstname').value;
           var lastname = document.getElementById('lastname').value;
           var username = document.getElementById('username').value;
           var email = document.getElementById('email').value;
           var password = document.getElementById('password').value;
        
        if(firstname ==""){
                    document.getElementById('fn').innerHTML="First name can't be empty";
                    return false;
                }
        if(lastname ==""){
                 document.getElementById('ln').innerHTML="Last name can't be empty";
                return false;
              }
        if(username==""){
            document.getElementById('un').innerHTML="Username can't be empty";
            return false;
        }
        if(email ==""){
                    document.getElementById('emails').innerHTML="E-mail can't be empty";
                    return false;
         }
        var reg=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
        if(reg.test(email)==false){
            document.getElementById('emails').innerHTML="E-mail must be in prpoer format";
            return false;
        }
        
        if(password ==""){
                    document.getElementById('pw').innerHTML="Password can't be empty";
                    return false;
                }
        else{
                alert('Congratulations '+firstname+' You are logged in.');
                   return true; 
                }
                
            }
        
    </script>
    
    
        </body>
</html>