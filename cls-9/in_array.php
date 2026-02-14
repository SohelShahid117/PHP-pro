<?php
echo "hello <br/>";
// .jpg , .txt

$extension = "mp3";
if (isset($_FILES['userFile'])) {
    $userFile = $_FILES['userFile'];
    $file_name = $userFile["name"];
    $file_array = explode(".",$file_name);
    $extension = $file_array[count($file_array)-1];
    var_dump($userFile);
    echo "<br/>";
    echo $file_name;
    echo "<br/>";
    var_dump($file_array);
    echo "<br/>";
    var_dump($file_array);
    echo "<br/>";
    echo $extension;
    echo "<br/>";

}
// exit();

$allow_format = array("jpg","JPG","png","PNG","txt","TXT","pdf","PDF");
var_dump($allow_format);
echo "<br/>";

// if(in_array("pdf",$allow_format)){
if(in_array($extension,$allow_format)){
    echo "$extension is matched <br/>";
}else{
    echo "$extension is not matched <br/>";
}

?>