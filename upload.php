<?php
session_start();

$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["profileImage"]["name"]);
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

$check = getimagesize($_FILES["profileImage"]["tmp_name"]);
if ($check === false) {
    die("Файл не є зображенням.");
}

if ($_FILES["profileImage"]["size"] > 5000000) {
    die("Вибачте, файл занадто великий.");
}

if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    die("Вибачте, дозволені тільки JPG, JPEG, PNG і GIF файли.");
}

if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $targetFile)) {
    $_SESSION['profile_image'] = $targetFile;
    header("Location: profile.php"); 
} else {
    die("Вибачте, сталася помилка під час завантаження вашого файлу.");
}
?>
