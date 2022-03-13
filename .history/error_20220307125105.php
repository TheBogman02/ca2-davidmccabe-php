<!DOCTYPE html>
<html>
<link rel="stylesheet" type="css/scss" href="error.scss" />
<!-- the head section -->

<head>
    <title>Ministry Of Defense Ukraine</title>
    <link rel="stylesheet/less" type="text/css" href="error.less" />
<script src="error.js" type="text/javascript"></script>
</head>

<!-- the body section -->

<body>
    <header>
        <h1>Ukraine</h1>
    </header>

    <main>
        <h2 class="top">Error!</h2>
        <p><?php echo $error; ?></p>
        <div class="number">
        <h1>404 </h1>
        <h2>Page not found <i class="text">Not Happy!</i></h2>
    </div>
    </main>
    


    <footer>
        <p>&copy; <?php echo date("Y"); ?> Ministry Of Defense Of Ukraine.</p>
    </footer>
</body>

</html>