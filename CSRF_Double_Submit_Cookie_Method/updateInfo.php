<!DOCTYPE html>
<html>
	<head>
		<title>Cross Site Request Forgery Protection</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="stylesheet.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script>
        $(document).ready(function(){
            var cookieVal = "";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            var csrf = decodedCookie.split(';')[2]

            if(csrf.split('=')[0]= "csrf"){
                cookieVal = csrf.split('csrf=')[1];
                document.getElementById("csrf_token").setAttribute('value',cookieVal);
            }
        });
    </script>
	</head>
    <body>
    <div class="sidenav">
         <div class="login-main-text">
            <h1>CSRF Double Submit Cookie Method</h1>
            <h2><br>Test Application
            <br> Home Page</h2>
            <p>Enter some text to test the application.</p>
         </div>
    </div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <form class="form" action="validateReq.php" method="post">
                            <div class="form-group">
                                
                                <input type="text" name="updatepost" class="form-control">
                            </div>
                            <div id="div1">
					              <input type="hidden" name="token"  id="csrf_token"/>
					        </div>
                            <div class="form-group">
                                <input type="submit"  class="btn btn-info btn-md"   value="updatepost">
                            </div>
                </form>
            </div>       
                      <a  class="btn btn-info btn-md" href = "logout.php">logout</a>
        </div>
    </div>
    </body>
</html>
