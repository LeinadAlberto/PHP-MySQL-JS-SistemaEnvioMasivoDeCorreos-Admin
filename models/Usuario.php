<?php 

    class Usuario extends Conectar {


        /* TODO: Valida información ingresada en el Login del Sistema */
        public function login () {
            $conectar = parent::conexion();
            parent::set_names();

            // isset: Devuelve true si la variable existe y tiene un valor distinto de null, false de lo contrario 
            if (isset($_POST["enviar"])) {
                $correo = $_POST["correo"];
                $password = $_POST["password"];
                if (empty($correo) and empty($password)) {
                    header("Location: " . Conectar::ruta() . "index.php?m=2");
                    exit();
                } else {
                    $sql = "SELECT * FROM tm_usuario WHERE usu_correo=? and usu_pass=? and rol_id=2";
                    $sql = $conectar->prepare($sql);
                    $sql->bindValue(1, $correo);
                    $sql->bindValue(2, $password);
                    $sql->execute();
                    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
                    if (is_array($resultado)==true and count($resultado)>0) {
                        $_SESSION["usu_id"] = $resultado["usu_id"];
                        $_SESSION["usu_nom"] = $resultado["usu_nom"];
                        $_SESSION["usu_apep"] = $resultado["usu_apep"];
                        $_SESSION["usu_apem"] = $resultado["usu_apem"];
                        $_SESSION["usu_correo"] = $resultado["usu_correo"];
                    } else {
                        header("Location: " . Conectar::ruta() . "index.php?m=1");
                    }
                }
            } 
        }
    }


?>