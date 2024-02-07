<!DOCTYPE html>
<html>
    <Footer>
        <center>
     <div class="footer">
      @2024 All rights reserved by us.
      
    <?php
    $filename = basename($_SERVER['PHP_SELF']);
    $lastModified = filemtime($_SERVER['SCRIPT_FILENAME']);
    echo "<p> $filename was last modified: " . date("F d Y H:i:s.", $lastModified) ."</p>";
    ?>
</center>
     </div>
    </Footer>
</html>