<h1>NPM</h1>
<ul>
<?php
    foreach(glob("*.tgz") as $filename) {
        echo '<li><a href="'.$filename.'">'.$filename."</a></li>";
    }   
?>
</ul>

