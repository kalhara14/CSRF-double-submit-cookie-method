<!DOCTYPE html>
<html>
	<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="stylesheet.css" rel="stylesheet" id="bootstrap-css">
	<title>Cross Site Request Forgery Protection</title>
    </head>
    <body>
    <div class="sidenav">
         <div class="login-main-text">
            <h1>CSRF Double Submit Cookie Method</h1>
            <h2><br>Test Application
            <br> Login Page</h2>
            <p>Login from here to access.</p>
         </div>
    </div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <form class="form1" action="validateLogin.php" method="post">
                            <div class="form-group">
                                <label for="username">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" >Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="Login" class="btn btn-info btn-md" value="Login">
                            </div>   
                </form>
            </div>
         </div>
    </div>
    </body>
</html>