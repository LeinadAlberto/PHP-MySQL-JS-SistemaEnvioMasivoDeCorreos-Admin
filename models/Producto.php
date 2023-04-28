<?php 

    class Producto extends Conectar {

        /* TODO: Inserta 1 registro a la vez en la Tabla Producto */
        public function insert_producto($prod_nom, $prod_precion, $prod_preciod, $prod_url, $prod_img, $prod_cupon, $prod_descrip) {
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "INSERT INTO tm_producto (prod_id, prod_nom, prod_precion, prod_preciod, prod_url, prod_img, prod_cupon, prod_descrip, fech_crea, fech_modi, fech_elim, estado)
            VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, now(), NULL, NULL, 1)";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $prod_nom);
            $sql->bindValue(2, $prod_precion);
            $sql->bindValue(3, $prod_preciod);
            $sql->bindValue(4, $prod_url);
            $sql->bindValue(5, $prod_img);
            $sql->bindValue(6, $prod_cupon);
            $sql->bindValue(7, $prod_descrip);
            $sql->execute();
            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        /* TODO: Obtener Registros Tabla Producto */
        public function get_producto() {
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "SELECT * FROM tm_producto WHERE estado=1";
            $sql = $conectar->prepare($sql);
            $sql->execute();
            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        } 

        /* TODO: Obtiene un 1 registro por id de la Tabla Producto */
        public function get_producto_x_id($prod_id) {
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "SELECT * FROM tm_producto WHERE estado=1 AND prod_id=?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $prod_id);
            $sql->execute();
            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        /* TODO: Modifica 1 registro por id en la  Tabla Producto */
        public function update_producto($prod_id, $prod_nom, $prod_precion, $prod_preciod, $prod_url, $prod_img, $prod_cupon, $prod_descrip) {
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "UPDATE tm_producto 
            SET prod_nom=?, 
                prod_precion=?, 
                prod_preciod=?, 
                prod_url=?, 
                prod_img=?, 
                prod_cupon=?, 
                prod_descrip=?, 
                fech_modi=now() 
            WHERE prod_id=?"; 
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $prod_nom);
            $sql->bindValue(2, $prod_precion);
            $sql->bindValue(3, $prod_preciod);
            $sql->bindValue(4, $prod_url);
            $sql->bindValue(5, $prod_img);
            $sql->bindValue(6, $prod_cupon);
            $sql->bindValue(7, $prod_descrip);
            $sql->bindValue(8, $prod_id);
            $sql->execute();
            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        /* TODO: Elimina un Registro de la Tabla Producto */
        public function delete_producto($prod_id) {
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "UPDATE tm_producto SET estado=0 WHERE prod_id=?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $prod_id);
            $sql->execute();
            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        } 
    }


?>