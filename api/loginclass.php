<?php
header('Content-Type: text/html; charset=UTF-8');

class login
{

    private static $log = array();

    function __construct(mysqli $con, string $username, string $password)
    {
        $query = "SELECT username, password, type FROM users WHERE username = ? AND password = ?";
        $stmt = $con->prepare($query);

        if ($stmt === false) {
            die("sentencia mal realizada");
        }
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows == 1) {
            $results = $result->fetch_assoc();

            self::$log['log'] = true;
            self::$log['username'] = $results['username'];
            self::$log['type'] = $results['type'];
        } else {
            // $message = mb_convert_encoding('contraseñaaasdas o usuario incorrecto', 'ISO-8859-1', 'UTF-8');
            $message = 'contraseña o usuario incorrecto';
            self::$log['log'] = false;
            self::$log['message'] = $message;
        }
        // print_r(self::$log);
        $con->close();
    }
    public static function getLogin(): array
    {
        return self::$log;
    }
}

// if ($result->num_rows == 1) {
//     // $results = $result->fetch_assoc();

//     $con->close();
// if ($results["password"] == $password) {
//     // $_SESSION["username"] = $user;
//     // $_SESSION["type"] = $results["type"];
//     // echo "<script>alert('" . $results['type'] . "')</script>";
//     // header("Location: ../pages/adminPanel.php");
// } else {
//     // echo ("<script>alert(' usuario o contrasena incorrecta')</script>");
//     // echo '<script>window.location.href = "../index.php"</script>';
// }
// } else {
//     // echo ("<script>alert(' usuario o contrasena incorrecta')</script>");
//     // echo '<script>window.location.href = "../index.php"</script>';
//     $con->close();
// }