<?php 

require "modelo_conexion.php";

class afiliado{
    public function __construct(){
        
    }

    public function insert($documento_afiliado,$nombre1_afiliado,$nombre2_afiliado,$apellido1_afiliado,$apellido2_afiliado,$sexo_afiliado,$correo_afiliado,$telefono_afiliado,$direccion_afiliado,$estado_civil_afiliado,$nivel_educativo_afiliado,$fecha_nacimiento_afiliado,$nivel_fisico_afiliado,$ciudadFK){
        $sql="INSERT afiliado (documento_afiliado,nombre1_afiliado,nombre2_afiliado,apellido1_afiliado,apellido2_afiliado,sexo_afiliado,correo_afiliado,telefono_afiliado,direccion_afiliado,estado_civil_afiliado,nivel_educativo_afiliado,fecha_nacimiento_afiliado,nivel_fisico_afiliado,ciudadFK) INTO VALUES('$documento_afiliado','$nombre1_afiliado','$nombre2_afiliado','$apellido1_afiliado','$apellido2_afiliado','$sexo_afiliado','$correo_afiliado','$telefono_afiliado','$direccion_afiliado','$estado_civil_afiliado','$nivel_educativo_afiliado','$fecha_nacimiento_afiliado','$nivel_fisico_afiliado','$ciudadFK')";
        return ejecutarConsulta($sql);

    }

    public function eliminar($id_afiliado){
        $sql="DELETE * FROM afiliado WHERE id_afiliado='$id_afiliado'";
        return ejecutarConsulta($sql);
    }

    public function listar(){
        $sql="SELECT afiliado.id_afiliado,afiliado.documento_afiliado,afiliado.nombre1_afiliado, afiliado.nombre2_afiliado, afiliado.apellido1_afiliado, afiliado.apellido2_afiliado,afiliado.sexo_afiliado,afiliado.correo_afiliado,afiliado.telefono_afiliado,afiliado.direccion_afiliado,afiliado.estado_civil_afiliado,afiliado.nivel_educativo_afiliado,afiliado.fecha_nacimiento_afiliado,afiliado.nivel_fisico_afiliado,ciudad.nombre_ciudad FROM afiliado,ciudad WHERE ciudad.id_ciudad = afiliado.ciudadFK";
        return ejecutarConsulta($sql);
    }

    public function listarDatosCorporales($documento_afiliado){
      $sql = "SELECT imc, porcentaje_grasa_corporal, peso, musculo_esqueletico, edad_corporal, perimetro_cintura, perimetro_cadera, frecuencia_cardiaca, indice_grasa_viceral, tension_arterial, metabolismo_basal, fecha_registro FROM datos_corporales, afiliado WHERE afiliadoFK IN (
	SELECT id_afiliado FROM afiliado WHERE documento_afiliado = '$documento_afiliado')
ORDER BY fecha_registro DESC LIMIT 3";
      return ejecutarConsulta($sql);
    }

    public function listarDepartamento(){
        $sql="SELECT * FROM departamento";
        return ejecutarConsulta($sql);
    }

    public function listarCiudad($id_departamento){
        $sql="SELECT ciudad.* FROM ciudad, departamento WHERE departamentoFK = '$id_departamento'";
        return ejecutarConsulta($sql);
    }

    
}



?>
