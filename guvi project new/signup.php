<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="parsley.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="parsley.min.js"></script>
</head>
<body>
    <div class="container">
        <!--Data or Content-->
        <div class="box-1">
            <div class="content-holder">
                <h2>Create Your Own Sunshine!</h2>
               
                <button class="button-1" onclick="signup()">Sign up</button>
                <button class="button-2" onclick="login()">Login</button>
            </div>
        </div>
    
        
        
        <div class="box-2">
            <div class="login-form-container">
                <h1>Login Form</h1>
                <form data-parsley-validate>
                    <input type="text" placeholder="Username" class="input-field" data-parsley-required >
                   <br><br>
                   <input type="password" placeholder="Password" class="input-field" data-parsley-required>
                   <br><br>
                  <input class="login-button" type="submit" value="submit"></input>
                </form>
               
                
         
            </div>
    
    
    
        <div class="signup-form-container">
            <h1>Sign Up Form</h1>
            <form data-parsley-validate>
                <input type="text" placeholder="Username" class="input-field" data-parsley-required>
                <br><br>
                <input type="email" placeholder="Email" class="input-field"data-parsley-required>
                <br><br>
                <input type="password" placeholder="Password" class="input-field"data-parsley-required>
                <br><br>
                <input class="signup-button"  type="submit" value="submit"></input>
            </form>
           
            

        </div>
    
        
        </div>
        <script src="4.js"></script> 
        
</body>
</html>