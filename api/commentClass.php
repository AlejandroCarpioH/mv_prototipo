<?php

use NunoMaduro\Collision\Adapters\Phpunit\State;

class comment
{
    private static $comment = array();
    private static mysqli $con;

    function __construct(mysqli $con, string $user, int $id_video)
    {
        $query = "SELECT username, comment, date_comment FROM comment WHERE id_video = ?";
        $stmt = $con->prepare($query);

        if ($stmt === false) {
            die("sentencia mal realizada");
        }
        $stmt->bind_param("i", $id_video);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($results = $result->fetch_assoc()) {

            $data = array(
                "user" => $results['username'],
                "comment" => $results['comment'],
                "date" => $results['date_comment']
            );
            self::$comment[] =  $data;
        }
    }

    public static function getComment()
    {
        return self::$comment;
    }

    public static function setComment(mysqli $conn, string $comment, string $username, int $id_video)
    {
        date_default_timezone_set('America/Santiago');
        self::$con = $conn;
        // $comment = $_POST['comment'];
        // $username = $_SESSION['username'];
        // $id_video = $_POST['id_video'];
        $date = date('Y-m-d H:i:s');

        // echo ("$comment $id_video $date");
        $query = "INSERT INTO comment (username, id_video, comment, date_comment) VALUES (?,?,?,?)";

        $stmt = self::$con->prepare($query);
        $stmt->bind_param("siss", $username, $id_video, $comment, $date);

        if ($stmt->execute()) {
            echo ("se inserto correctamente");
        }
    }
}
