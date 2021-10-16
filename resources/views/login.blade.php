<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel</title>
</head>
<body>

	{{ Session::get('session'); }}

	<form action="/login/process" method="post">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      	Username :
		<input type="text" name="username"> <br/>
		Password :
		<input type="text" name="pass"> <br/>
		<input type="submit" value="Submit">
	</form>

</body>
</html>