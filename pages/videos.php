<!DOCTYPE html>
<html lang="en">
<?php
session_start();

if (!$_SESSION['username']) {
    header("Location: ../index.php");
}


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/cssVideos/style.css">
</head>

<body>
    <div class="videos-container">
        <div class="video-play-container">
            <div class="video-play">


            </div>
        </div>
        <div class="videos">

        </div>

    </div>
</body>
<script type="module" src="../js/videos.js"></script>

</html>