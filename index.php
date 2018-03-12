<?php 

$links = array(
    "whatsapp" => "https://chat.whatsapp.com/invite/Hcz6GtqxJ8Z0C5NuUDhIrI", 
    "boeken" => "https://drive.google.com/drive/folders/0B3QX7v_nrvn9RjNDVWJUTVpWZzQ?usp=sharing", 
    "samenvatting"=>"https://drive.google.com/drive/folders/1WdroHuz2JB9LXdveRVX25hGktHCHudfx?usp=sharing"
);

if (array_key_exists($_SERVER['REQUEST_URI'], $links)) {
	header('Location: ' + $links[$_SERVER['REQUEST_URI']]);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>gewoon.de</title>
</head>
<body>

<?php foreach ($links as $key => $value) {
		echo '<a href="'.$key.'">'.$key.'</a> <br/>';
	} ?>

</body>
</html>