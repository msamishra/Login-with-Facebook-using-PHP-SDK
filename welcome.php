<?php include_once('fb-config.php');
print_r($_SESSION);
print_r($_COOKIE);
if (!isset($_SESSION['fbUserId']) and $_SESSION['fbUserId'] == "") {
	header('location: http://localhost/shivam/login/facebook/index.php');
	exit;
} ?>
<!doctype html>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec" prefix="og: http://ogp.me/ns#" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login with Facebook using PHP SDK</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center p-5">
				<p>Welcome <em class="text-danger"><?php echo $_SESSION['fbUserName'] ?></em></p>
				<a href="logout.php" class="btn btn-lg btn-danger"><i class="fa fa-fw fa-power-off"></i> Logout</a>
			</div>
		</div>
	</div>
</body>

</html>