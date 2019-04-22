<link rel="stylesheet" href="./glob_style.css">
<?PHP

if(isset($_GET["uri"])){
	$app_uri = $_GET["uri"];
	$app_uri = trim($app_uri);
	if(file_exists("./archive/".explode('/',$app_uri)[0]."/META.INF")){
		if (strpos($app_uri, '/') !== false) {
			$rep = file_get_contents("http://127.0.0.1/archive/".$app_uri);
			echo $rep;
		}else{
			echo file_get_contents("http://127.0.0.1/archive/".$app_uri."/index.php");
		}
	}else{
		echo '<div class="feature">Error: Application either does not exist or META.INF missing.</div>';
		echo 'Requested URI: '.$app_uri." | Request processed on ".date('l jS \of F Y h:i:s A');
	}
}

?>
