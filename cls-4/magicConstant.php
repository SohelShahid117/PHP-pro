<?php
echo "magic constant <br/>";
echo __LINE__;
echo "<br/>";
echo __DIR__;
echo "<br/>";
echo __LINE__;
echo "<br/>";
echo __FILE__;
echo "<br/>";

function userDefined(){
    echo __FUNCTION__;
}
userDefined();
?>