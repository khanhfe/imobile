<!DOCTYPE html>
<html>
<head>
	<base href="http://localhost:8080/imobile/">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>iMobile.com - Điện thoại, Tablet, Laptop chính hãng</title>
	<link href="public/img/icon/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<link rel="stylesheet" href="public/css/header.css">
	<link rel="stylesheet" href="public/css/<?php echo($data['page']) ?>.css">
	<script src="public/js/jquery-2.2.4.min.js"></script>
</head>
<body>
	<?php require_once 'blocks/header.php'; ?>
	<?php require_once 'pages/user/'.$data['page'].'.php'; ?>
	<script src="public/js/searching.js"></script>
</body>
</html>