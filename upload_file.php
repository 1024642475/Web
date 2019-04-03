<?php
$temp=explode(".",$_FILES['file']['name']);
$extension=end($temp);
if($_FILES['file']['error']>0)
{
    echo "Wrong!";
}
else {
    echo "文件名:" . $_FILES['file']['name'] . "<br>";
    echo "文件类型" . $_FILES['file']['type'] . "<br>";
    echo "文件大小" . $_FILES['file']['size'] . "<br>";
    echo "文件存储位置" . "upload/" .".". $_FILES['file']['name'];
}
move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES['file']['name']);
?>

