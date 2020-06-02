<?php $src = $_SERVER['DOCUMENT_ROOT'];  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="dist/fonts.css">
	
	<!-- IF THIS LOCAL CONNECT WEBPACK SERVER FILES -->
	<?php if ($_SERVER['SERVER_NAME'] === 'car-team.loc'): ?>
		<link rel="stylesheet" type="text/css" href="http://localhost:8080/dist/main.css">
	<?php else: ?>
		<link rel="stylesheet" type="text/css" href="dist/main.css">
	<?php endif ?>
</head>
<body>
	<div id="wrapper">
	<?php require 'template-parts/views/blocks/c-nav.php'; ?>