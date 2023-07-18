<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/cssVideos/style.css">
</head>
<script>
    if (!JSON.parse(localStorage.getItem("userValue"))?.log) {
        location.href = '../index.php'
    }
</script>

<body>
    <a href="../index.php">ir a inicio</a>
    <div class="videos-container">
        <div class="video-play-container">
            <div class="video-play">
                <div class="message">

                    <p>ELEGIR ALGUN VIDEO</p>
                </div>


            </div>
            <div class="comment-container hidden">
                <div class="comment-box">
                    <p>
                        comentarios
                    </p>
                </div>
                <div class="input-comment" id_video="">

                    <textarea placeholder="Escribir comentario" class="text-comment" name="comment" id="" cols="30" rows="10"></textarea>
                    <input class="input-id-video" name="id_video" value="" hidden>
                    <button class="input-send-comment">Enviar</button>


                </div>
            </div>
        </div>
        <div class="videos">

        </div>

    </div>
</body>
<script type="module" src="../js/videos.js"></script>

</html>