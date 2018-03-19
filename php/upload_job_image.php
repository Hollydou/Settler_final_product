<?php
/**
 * Created by PhpStorm.
 * User: SJB
 * Date: 1/9/17
 * Time: 10:58
 */
//information needed to upload images
$image = $_FILES['Picture'];
$fileName = $_FILES['Picture']['name'];
$fileTmpName = $_FILES['Picture']['tmp_name'];
$fileSize = $_FILES['Picture']['size'];
$fileError = $_FILES['Picture']['error'];
$fileType = $_FILES['Picture']['type'];

$imageExtension = strtolower(end(explode(".", $fileName)));
// allowed extension of images
$allowed_extension = ['jpg', 'jpeg', 'png', 'gif'];
// check if the extension of uploaded file is correct


if (!($fileError === 0)) {
    echo $fileError;
}
// not allow if image size is too big
if ($fileSize > 10000000) {
    echo 'Image is too big';
} else {
    $newName = $Jid . "." . $imageExtension;
    // file destination
    $fileDes = '../images/' . $newName;
    // move file from temp to destination
    move_uploaded_file($fileTmpName, $fileDes);

}
?>