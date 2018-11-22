<?php
    require_once __DIR__ . '/header2.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>プロジェクト掲示板</title>
	<link rel="stylesheet" type="text/css" href="project.css">
</head>
<body>

<div class="container">
<form class="form-signin">
<h2 class="form-signin-heading">Please sign in</h2>

mail : <input type="email" class="input-block-level" value="example.co.jp"><br>
pass : <input type="password" class="input-block-level" value="BeOS"><br><br>
<input type="button" class="btn btn-large btn-primary" onclick="location.href='project.php'" value="ログイン">

</form>
</div>

</body>
</html>

