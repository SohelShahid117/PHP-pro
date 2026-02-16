<?php

$str = "welcome to phplearn.welcome to phplearn.welcome to phplearn.";
$pattern = "/phplearn/i";

echo "match ".preg_match($pattern,$str);
echo "<br/>";
echo "total matched : ".preg_match_all($pattern,$str);
echo "<br/>";
echo preg_replace($pattern,"php",$str);
echo "<br/>";


?>