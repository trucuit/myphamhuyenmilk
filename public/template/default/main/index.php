<!DOCTYPE html>
<html>
<head>
	<?php

	echo $this->_title;
	echo $this->_metaHTTP;
	echo $this->_metaName;
	echo $this->_fileCSS;
	echo $this->_fileJS;

	$imageURL = $this->_dirImg;
	?>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300i,400,500,700,700i" rel="stylesheet">
</head>
<body>
	<!--header-->
	<?php include_once 'html/header.php' ?>
	<!--//header-->

	<!--banner-->
	<?php include_once 'html/banner.php' ?>
	<!--//banner-->

	<!--content-->
	<?php include_once MODULE_PATH . DS . $this->_moduleName . DS . 'views' . DS . $this->_fileView . '.php'; ?>
	<!--//content-->

	<!--footer-->
	<?php include_once 'html/footer.php' ?>
	<!--//footer-->
</body>
</html>
