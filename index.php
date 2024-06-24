<?php
include_once('fb-config.php');
if (isset($_SESSION['fbUserId']) and $_SESSION['fbUserId'] != "") {
	header('location: http://localhost/shivam/login/facebook/welcome.php');
	exit;
}
// $permissions = array('email'); // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/shivam/login/facebook/fb-callback.php');
?>
<!doctype html>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec" prefix="og: http://ogp.me/ns#" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login with Facebook using PHP SDK</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

</head>

<body>
	<div class="wrapper">
		<a href="<?php echo htmlspecialchars($loginUrl); ?>" class="button button--facebook">Login With Facebook</a>
	</div>
</body>


</html>
