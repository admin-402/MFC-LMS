<?php
if (!isset($_COOKIE['auth']) || $_COOKIE['auth'] !== 'true') {
    header('Location: signin.php');
    exit();
} else{
include '_library/load.php';
print_r($_SERVER);
print_r($_POST);
print_r($_FILES);
function getFileExtension($filename) {
    $pathInfo = pathinfo($filename);
    return $pathInfo['extension'];
}
$bookName = $_POST["book_name"];
$authorName = $_POST["author_name"];
$noOfPages = $_POST["no_of_pages"];
$noOfCopies = $_POST["no_of_copies"];
$thumbnailImage = $_FILES["thumbnail_image"]["name"];
$bookPdf = $_FILES["book_pdf"]["name"];
$thumbnailImageName = uniqid() . '.' . getFileExtension($thumbnailImage);
$bookPdfName = uniqid() . '.' . getFileExtension($bookPdf);
$result = uploadBook($bookName, $authorName, $noOfPages, $noOfCopies, $thumbnailImageName, $bookPdfName);
if ($result === "Success") {
    $targetDirectory = "uploads/";
    move_uploaded_file($_FILES["thumbnail_image"]["tmp_name"], $targetDirectory . $thumbnailImageName);
    move_uploaded_file($_FILES["book_pdf"]["tmp_name"], $targetDirectory . $bookPdfName);
    header("Location: index.html");
    exit();
} else {
    echo "Error: " . $result;
}
}
?>