<link rel="stylesheet" href="./glob_style.css">
<?PHP

if(isset($_GET["uri"])){
	$app_uri = $_GET["uri"];
	$app_uri = trim($app_uri);
	if(file_exists("./archive/".$app_uri."/META.INF")){
		if (strpos($app_uri, '/') !== false) {
			$rep = file_get_content("http://127.0.0.1/archive/".$app_uri);
		}else{
			echo file_get_content("http://127.0.0.1/archive/".$app_uri."/index.php");
		}
	}else{
		echo '<div class="feature">Error: Application either does not exist or META.INF missing.</div>';
		echo 'Requested URI: '.$app_uri." | Request processed on ".date('l jS \of F Y h:i:s A');
	}
}

?>
