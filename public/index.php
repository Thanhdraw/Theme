<?php
require('../helpers/function_sys.php');
require('../config/db.php');
get_header();


?>


<?php
get_main();
$mod = $_GET['mod'] ?? 'public';
$act = $_GET['act'] ?? 'index';
$path = $mod . '/' . $act . '.php';
echo "<br>";
echo $path;
if (file_exists($path)) {
    require($path);
} else {
    require('../views/404.php');
}

?>



<?php
get_footer();


?>
