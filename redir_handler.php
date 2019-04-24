<link rel="stylesheet" href="./glob_style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?PHP

if(isset($_GET["uri"])){
	$app_uri = $_GET["uri"];
	$app_uri = trim($app_uri);
	$app_host = explode('/', $app_uri)[0];
	if(file_exists("./archive/".$app_host."/META.INF")){
		if (strpos($app_uri, '/') !== false) {
			if(!file_exists("./archive/".$app_uri)){
				echo '<div class="feature">Error: The requested file was not found. (404)</div>';
				die('Requested URI: '.$app_uri." | Request processed on ".date('l jS \of F Y h:i:s A'));
			}
			$rep = file_get_contents("http://127.0.0.1/archive/".$app_uri);
			$rep = str_replace('href="','href="./redir_handler.php?uri='.$app_uri.'/',$rep);
			echo $rep;
		}else{
			$rep = file_get_contents("http://127.0.0.1/archive/".$app_uri."/index.php");
			$rep = str_replace('href="','href="./redir_handler.php?uri='.$app_uri.'/',$rep);
			echo $rep;
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
