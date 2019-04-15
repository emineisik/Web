<?php 

function print_pre($data){
	echo "<pre>".print_r($data,true)."</pre>";

}
/*
echo "ALL <br /><br /><br />";
print_pre($_REQUEST);
*/


echo "POST<br /><br /><br />";
print_pre($_POST);


echo "GET<br /><br /><br />";
print_pre($_GET);
?>