var tabla;

function init(){
    mostrarForm(false);
    listar();
    $.post("../controlador/controlador_afiliado.php?op=selectDepartamento", function(r)
    {
        $("#id_departamento").html(r);
        $('#id_departamento').selectpicker("refresh");
    }
    
    )
}

function limpiar(){

}

function mostrarForm(flag){
    limpiar();
    if(flag){
        $("#listadoRegistros").hide();
        $("#formularioRegistros").show();
        $("#btnGuardar").prop("disabled", false);
        $("#btnAgregar").hide();
        $("#nuevo").show();
        $("#mlista").hide();
    }else{
        $("#listadoRegistros").show();
        $("#formularioRegistros").hide();
        $("#btnAgregar").show();
        $("#nuevo").hide();
        $("#mlista").show();
    }
}

function cancelarForm(){
    mostrarForm(false);
    limpiar();
    
}

function listar(){
    tabla = $("#tablaListado").dataTable(
        {
            "aProcessing":true,
            "aServerSide":true,
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdf'

            ],
            "ajax":
            {
                url:'../controlador/controlador_afiliado.php?op=listar',
                type:"get",
                dataType:"json",
                error: function (e){
                     console.log(e.responseText);
                }
            },
            "bDestroy":true,
            "iDisplayLength":16,
            "order":[[0,"desc"]],
        }).DataTable();
}

function listarDatosCorporales(documento_afiliado){
  
//  var dato = $.post("../../controlador/controlador_afiliado.php?op=listarDatosCorporales", (documento_afiliado : documento_afiliado), function (e){
//    console.log("hello");
//  });
  //console.log(dato);

 //  $.ajax({
 //    url: '../../controlador/controlador_afiliado.php?op=listarDatosCorporales',
 //    type: 'post',
 //    dataType: 'Array',
 //    data: data
 //  })
 //  .done(function(){
 //    console.log("succes");
 //  })
 //  })
 //  .fail(function(){
 //    console.log("error");
 //  })
 //  })
 //  .always(function(){
 //    console.log("complete");
 //  });

}

init();
