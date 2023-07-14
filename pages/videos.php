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
    <a href="../index.php">ir a inicio</a>
    <div class="videos-container">
        <div class="video-play-container">
            <div class="video-play">
                <div class="message">

                    <p>ELEGIR ALGUN VIDEO</p>
                </div>


            </div>
            <div class="comment-container">
                <div class="comment-box">
                    <p>
                        comentarios
                    </p>
                </div>
                <div class="input-comment">
                    <textarea placeholder="Escribir comentario" class="text-comment" name="" id="" cols="30" rows="10"></textarea>
                    <input class="input-send-comment" type="submit" value="enter">
                </div>
            </div>
        </div>
        <div class="videos">

        </div>

    </div>
</body>
<script type="module" src="../js/videos.js"></script>

</html>