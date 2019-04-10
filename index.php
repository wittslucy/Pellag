<!--pageConfig has all the info about what is the
$CURRENT_PAGE and how to display Title in the browser's Tab-->
<?php include 'views/include/pageConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--head has all the info about what should be in the html head,
    also it loads all the meta only on the Home Page-->
    <?php include 'views/include/head.php'; ?>
    <!--Add the custom CSS link-->
    <link rel="stylesheet" type="text/css" href='views/css/styles.css'/>
</head>

<body>

<?php require_once 'Database/MY_PDO.php'; ?>
<!--each page has two components, the controller and action
so any other link must contain those components-->

<?php if (isset($_GET['controller'], $_GET['action'])) :
    $controller = $_GET['controller'];
    $action = $_GET['action'];
else :
    $controller = 'Pages';
    $action = 'home'; ?>
<?php endif; ?>


<header>
    <!--Page holding all navigation elements-->
    <?php include 'views/include/navigation.php'; ?>
</header>

<main>
    <!--main component-->
    <div class="container">
        <?php require_once 'routes.php'; ?>
    </div>
</main>

<footer class="footer">
    <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>


</body>

</html>
