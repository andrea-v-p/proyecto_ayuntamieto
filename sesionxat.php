<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style/xat_style.css">
	<title>Inicia Xat</title>
</head>
<body>
<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
<?php
session_start();

function formulario(){
	echo('<div class="container">
    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Please sign in</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" action="sesionxat.php" method="post">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="nick" name="nick1" type="text" required="true">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="code" name="code" type="text" value="" required="true">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>

</div>');
}

if(!isset($_POST["code"])){
	formulario();
}else {
	if ((string)$_POST["code"] == (string)"1234") {
		$_SESSION["nick"] = $_POST["nick"];
		header("Location: xat.php");
	}else{
		echo ('<p class="error">Codigo no correcto</p>');
		formulario();
	}
}
?>
</body>
</html>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>