<?php
class registration
{
    private static $response = array();

    function __construct(mysqli $con, string $username, string $password, string $email)
    {
        // $email = $_POST["email"];
        // $password = $_POST["password"];

        $date = date('Y-m-d');
        $query_1 = "SELECT * FROM users WHERE username = ?";

        $stmt_1 = $con->prepare($query_1);

        if ($stmt_1 === false) {
            die("sentencia mal realizada");
        }

        $stmt_1->bind_param("s", $username);
        $stmt_1->execute();
        $result = $stmt_1->get_result();

        if ($result->num_rows > 0) {
            self::$response["response"] = false;
            self::$response["message"] = "nombre de usuario ya existe";

            // echo ("<script>alert('nombre de usuario ya existe')</script>");
            // echo '<script>window.location.href = "../index.php"</script>';
            $con->close();
        } else {
            $query = "INSERT INTO users (username, password, email, create_datetime, fecha_ingreso) VALUES(?,?,?,?,?)";
            $stmt = $con->prepare($query);

            $stmt->bind_param("sssss", $username, $password, $email, $date, $date);

            if ($stmt->execute()) {
                self::$response["response"] = true;
                self::$response["message"] = "se registro correctamente";
                // echo ("<script>alert('se registro correctamente')</script>");
                // echo '<script>window.location.href = "../index.php"</script>';
            }
        }
    }

    // $username = $_POST["username"];

    public static function getRegistration()
    {
        return self::$response;
    }
}
