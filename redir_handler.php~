<link rel="stylesheet" href="./glob_style.css">
<?PHP

if(isset($_GET["uri"])){
	$app_uri = $_GET["uri"];
	$app_uri = trim($app_uri);
	$app_host = explode('/', $app_uri)[0];
	if(file_exists("./archive/".$app_host."/META.INF")){
		if (strpos($app_uri, '/') !== false) {
			$rep = file_get_contents("http://127.0.0.1/archive/".$app_uri);
			echo $rep;
		}else{
			echo file_get_contents("http://127.0.0.1/archive/".$app_uri."/index.php");
		}
		$handle = fopen("./archive/".$app_host."/META.INF", "r");
		if ($handle) {
	    		while (($line = fgets($handle)) !== false) {
	    	    	if(substr($line,0,5) == "name:"){
						$title = str_replace("name:","",$line);
						echo "<title>".$title."</title>";
					}
		    	}
		    fclose($handle);
		} else {
            echo '<div class="feature">Error: Application either does not exist or META.INF missing.</div>';
			echo 'Requested URI: '.$app_uri." | Request processed on ".date('l jS \of F Y h:i:s A');
		}
	}else{
		echo '<div class="feature">Error: Application either does not exist or META.INF missing.</div>';
		echo 'Requested URI: '.$app_uri." | Request processed on ".date('l jS \of F Y h:i:s A');
	}
}

?>
