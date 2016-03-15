<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sportar</title>
    <!-- set up used character set -->
    <meta charset="utf-8" />
    <!--main css file -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/Linh's%20css.css">

</head>

<body onload="process()">
    <div id="page_wrapper">
        <?php 
            include_once '/templates/header.php';
            include_once '/templates/topNav.php';
        ?>
            <div id="content">
                <?php
            include_once '/templates/sideNav.php'
            ?>

                    <!-- content - all important stuff -->
                    <section id="mainContent">

                    </section>

                    <!--    Here include the content of actual page    -->
            </div>

            <footer>Copyright © Sportar shop online.</footer>
    </div>


    <script type="text/javascript" src="store.js"></script>
</body>

</html>