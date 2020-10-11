<html>
<?php
include_once 'app/config/Config.php';
include 'include/head.php';
include_once 'include/classes.php';
include_once 'app/control/Router.class.php';
include 'templates/Layout.class.php';


//require 'vendor/autoload.php';
ini_set('display_errors',true);
?>
<body>
<!--        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>-->
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
    <?php
   include_once 'include/header.php';

    try {
        $p = isset($_REQUEST['p']) ? $_REQUEST['p'] : 'home';
        Router::setPage($p);
    } catch (Exception $ex) {
        MErro($ex);
    }
    ?>
    <?php
    include_once 'include/footer.php';
    ?>
</div>
</body>


</html>
