<?php

$name = "SohelShahid";
echo strlen($name)."<br/>";

$short_description = "I'm Engr Sohel Shahid.I love programming.I'm a problem solver.I'm an entreptrenuer";
echo str_word_count($short_description)."<br/>";

echo strrev($name)."<br/>";

$nick_name = "Sohel";
// $para = "Sohel,How r u?.Sohel,r u enjoy coding?";
$para = "How r u?.Sohel,r u enjoy coding?";

echo strpos($para,$nick_name)."<br/>";

?>