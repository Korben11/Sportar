
<?php
function loadContent(){

    global $current_page;
    ob_start();                      // start capturing output
    include('templates/' .$current_page .'Content.php');    // execute the file
    $content = ob_get_contents();    // get the contents from the buffer
    ob_end_clean();

    echo $content;
}
?>