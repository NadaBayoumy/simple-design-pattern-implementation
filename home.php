<!-- this the the master controller -->

<?php
define("Direct",1);
// this constnt means I will define constant here to know if it is defined in the other pages i will load the correct script but if this constant is not defined redirect to a certain page or just exit the application
// define it here and check defined there



//require_once("views/index.php");

// Routing
$view_id = (isset($_GET['id']) && is_numeric($_GET['id'])) ? (int)$_GET["id"] : 1 ;
//echo "view id is" .$view_id;


if($view_id === 1)
{
	$current_view = "index";
}
elseif($view_id === 2)
{
	$current_view = "items";
}
elseif($view_id === 3)
{
	$current_view = "shoppingcart";
}
else
{
	$current_view = "index";
}

//Now please Empty the Get, I took what is needed and remove all other
$_GET = array();
$_POST = array();



// Serve correct view


?>
<html>

<body>

<?php require_once("views/".$current_view.".php"); ?>
</body>

</html>

