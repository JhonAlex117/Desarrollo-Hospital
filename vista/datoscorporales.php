<?php 

require 'header.php';
require_once 'modelo_afiliado.php';

echo $_get['documento_afiliado'];

$bd = $this->listarDatosCorporales(1112303536);

#$bd = $_get['documento_afiliado'];
echo $bd;
/*

localhost/proyectos/proyecto4x4/vista/datoscorporales.php?documento_afiliado=1112303536

*/

#$bd = $this->model->Listar(); 
#var_dump($bd);

?>

<?php
require 'footer.php';
?>
