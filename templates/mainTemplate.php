<?php
require '/php/session.php';
require '/php/phpFunctions.php';

?>

<!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Sportar</title>
        <!-- set up used character set -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--main css file -->
        <?php require '/templates/cssRes.php' ?>

    </head>

    <body>
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
                            <?php
                                loadContent();
                            ?>
                        </section>

                        <!--    Here include the content of actual page    -->
                </div>

                <footer>Copyright © Sportar shop online.</footer>
        </div>


        <?php require '/templates/scriptRes.php' ?>
    </body>

    </html>