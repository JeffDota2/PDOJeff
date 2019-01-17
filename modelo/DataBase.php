<?php
class DataBase{
 public function insertarproducto($nombre,$descripcion,$categoria,$precio){
     $modelo= new Conexion();
     $Conexion=$modelo-> get_conexion();
     $sql= "insert into producto(nombre, descripcion, categoria, precio) values(:nombre, :descripcion,:categoria, :precio)";
     $statement = $Conexion-> prepare($sql);
     $statement -> bindParam(':nombre',$nombre);
     $statement-> bindParam(':descripcion',$descripcion);
     $statement-> bindParam(':categoria',$categoria);
     $statement-> bindParam(':precio',$precio);

     if(!$statement){
         return "Error no se puede realizar la carga";
     }else{
         $statement-> execute();
         return "la insercion se realizó con exito";
     }
 }
}