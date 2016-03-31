<!-- Top navigation bar -->
<nav id="topNavBar">
    <ul>
        <li><a <?php if ($current_page=="home" ) { echo 'class="active"' ; }?> href="index.php">Home</a></li>
        <li><a <?php if ($current_page=="shop" ) { echo 'class="active"' ; }?> href="shop.php">Shop</a></li>
        <li><a <?php if ($current_page=="visit" ) { echo 'class="active"' ; }?> href="visit.php">Visit</a></li>
        <li><a <?php if ($current_page=="contact" ) { echo 'class="active"' ; }?> href="contact.php">Contact</a></li>
        <li><a <?php if ($current_page=="about" ) { echo 'class="active"' ; }?> href="about.php">About</a></li>
        <li><a <?php if ($current_page=="questions" ) { echo 'class="active"' ; }?> href="questions.php">Questions</a></li>
    </ul>
</nav>