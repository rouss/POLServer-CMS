<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'config.php';
include_once('include/mysql.php');

$mysql = new MySQL();
$result = null;

try{
	$result = $mysql->get(TBL_CHARS);
}catch(Exception $e){
	die('Caught exception: '. $e->getMessage());
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo TITLE; ?></title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="page-wrap">
	<?php
		foreach ($result as $row) {
			echo '<img src = "paperdoll.php?id='.$row['char_id'].'" style = "float: left; margin: 0 0 10px 10px;" />';
		}
	?>
	<div style = "clear: both;"></div>
	</div>
</body>
</html>