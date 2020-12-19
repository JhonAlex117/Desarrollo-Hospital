<?php 
require_once "../modelo/modelo_afiliado.php";

$afiliado = New afiliado();

$id_afiliado=isset($_POST["id_afiliado"])? LimpiarCadena($_POST["id_afiliado"]):"";
$iddistrito=isset($_POST["iddistrito"])? LimpiarCadena($_POST["iddistrito"]):"";
$nombre=isset($_POST["nombre"])? LimpiarCadena($_POST["nombre"]):"";
$apellido=isset($_POST["apellido"])? LimpiarCadena($_POST["apellido"]):"";
$documento_afiliado=isset($_POST["documento_afiliado"])? LimpiarCadena($_POST["documento_afiliado"]):"";

switch ($_GET["op"]) {
    case 'guardar':
        $rpta =  $afiliado->insert($documento_afiliado,$nombre1_afiliado,$nombre2_afiliado,$apellido1_afiliado,$apellido2_afiliado,$sexo_afiliado,$correo_afiliado,$telefono_afiliado,$direccion_afiliado,$estado_civil_afiliado,$nivel_educativo_afiliado,$fecha_nacimiento_afiliado,$nivel_fisico_afiliado,$ciudadFK);
        echo $rpta ? "Afiliado Registrado" : "Afiliado no se puede registrar";
        break;

        case 'eliminar':
            $rpta =  $afiliado->eliminar($id_afiliado);
            echo $rpta ? "Afiliado Eliminado" : "Afiliado no se puedo eliminar";
        break;
    
        case 'listar':
            $rpta =  $afiliado->listar();
            $data = Array();
            while($reg=$rpta->fetch_object()){
                $data[]=array(
                    "0"=> '<button onclick="listarDatosCorporales('.$reg->documento_afiliado.')"> <i class="fa fa-area-chart"></i></button>',
                    "1"=> '<button onclick="eliminar('.$reg->id_afiliado.')"> <i class="fa fa-trash"></i></button>',
                    "2"=>$reg->documento_afiliado,
                    "3"=>$reg->nombre1_afiliado,
                    "4"=>$reg->nombre2_afiliado,
                    "5"=>$reg->apellido1_afiliado,
                    "6"=>$reg->apellido2_afiliado, 
                    "7"=>$reg->sexo_afiliado,
                    "8"=>$reg->correo_afiliado,
                    "9"=>$reg->telefono_afiliado,
                    "10"=>$reg->direccion_afiliado,
                    "11"=>$reg->estado_civil_afiliado,
                    "12"=>$reg->nivel_educativo_afiliado,
                    "13"=>$reg->fecha_nacimiento_afiliado,
                    "14"=>$reg->nivel_fisico_afiliado,
                    "15"=>$reg->nombre_ciudad
                    
                );
            }
            $results= array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecord"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
        break;
/*
listarDatosCorporales
*/
        case 'listarDatosCorporales':
            $rpta =  $afiliado->listarDatosCorporales($documento_afiliado);
            #$data = Array();
            #echo $rpta;
            #echo $rpta ? "Afiliado Eliminado" : "Afiliado no se puedo eliminar";
          echo "
            <script charset='utf-8'> 

           new Morris.Line({
            element: 'myfirstchart',

              data: [
            ", foreach( $bd as $r ): ?> ,"
                { year: <?php echo "'".$r->fecha_registro."'"; ?>, 
                value: <?php echo $r->imc; ?> ,
                value2: <?php echo $r->porcentaje_grasa_corporal; ?> ,
                value3: <?php echo $r->peso; ?>,
                value4: <?php echo $r->musculo_esqueletico; ?>,
                value5: <?php echo $r->edad_corporal; ?>,
                value6: <?php echo $r->perimetro_cintura; ?>,
                value7: <?php echo $r->perimetro_cadera; ?>,
                value8: <?php echo $r->frecuencia_cardiaca; ?>,
                value9: <?php echo $r->indice_grasa_viceral; ?>, 
                value10: <?php echo $r->tension_arterial; ?>, 
                value11: <?php echo $r->metabolismo_basal; ?>, 

              },
            <?php  endforeach; ?>
              ],
            xkey: 'year',
            ykeys: [ 'value', 'value2', 'value3','value4','value5','value6','value7','value8','value9','value10','value11',
            ],
              parseTime: false,
            labels: ['imc', 'porcentaje_grasa_corporal', 'peso', 'musculo_esqueletico', 'edad_corporal', 'perimetro_cintura', 'perimetro_cadera', 'frecuencia_cardiaca', 'indice_grasa_viceral', 'tension_arterial', 'metabolismo_basal', ],
            resize: true
          });

            </script>
          "
        break;
        case 'selectDepartamento':
            $rpta =  $afiliado->listarDepartamento();
            while($reg=$rpta->fetch_object()){
                echo '<option value='.$reg->id_departamento.'>'.$reg->nombre_departamento.'</option>';
            }
        break;

        case 'selectCiudad':
            $id_departamento= $_POST['id_departamento'];
            $rpta =  $afiliado->listarCiudad($id_departamento);
            while($reg=$rpta->fetch_object()){
                echo '<option value='.$reg->id_ciudad.'>'.$reg->nombre_ciudad.'</option>';
            }
        break;
}


?>
