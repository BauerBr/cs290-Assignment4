
<?php
//http://php.net/manual/en/function.json-encode.php
//Bryan Bauer
if($_GET == NULL) {
	echo "Nothing is here! (_GET)";

}

if($_POST == NULL) {
	echo "Nothing is here! (_POST)";
}

if($_POST != NULL) {
	$json_value = json_encode($_POST);
	echo $json_value;
	
}

if($_GET != NULL) {
	$json_value2 = json_encode($_GET);
	echo $json_value2;

}
?>