$(document).on('change', '#cedula', function(){
    var ci = $(this).val();
    
    object.consulCedula(ci);
});

$(document).on('change', '#cedulaL', function(){
    var ci = $(this).val();
    object.consulCedulaLC(ci);
});

$(document).on('change', '#cedulaJF', function(){
    var ci = $(this).val();
    object.consulCedulaJF(ci);
});

$(document).on('change', '#cedulaJC', function(){
    var ci = $(this).val();
    object.consulCedulaJC(ci);
});

$(document).on('change', '#cedulaEst', function(){
    var ci = $(this).val();
    object.consulCedulaEst(ci);
});

$(document).on('change', '#cedulaIns', function(){
    var ci = $(this).val();
    object.consulCedulaIns(ci);
});

$(document).on('change', '#municipio', function(){
    var id = $(this).val();
    object.consulParroquias(id);
})

$(document).on('change', '#parroquia', function(){
    var id = $(this).val();
    object.consulSectores(id);
})

$(document).on('change', '#sector', function(){
    var id = $(this).val();
    object.consulClap(id);
})

$(document).on('change', '#cedulaRes', function(){
    var ci = $(this).val();
    
    object.consulCedulaResponsable(ci);
});

// Enviar filtro
$(document).on('submit', '#form-filtro', function(e){
    e.preventDefault();
    var form = new FormData(this);
    object.filtro(form);
})

//Envia la informacion de formulario de notificacion
// $(document).on('change', 'input[name=filtro]', function(e){
//     var form = $(this).val();
    
//     object.filtro(form);
// })

//Editar la informacion de formulario de notificacion
$(document).on('submit', '#form-Editnotifi', function(e){
    e.preventDefault();
    //var form = new FormData(this);
    var form = $(this).serialize();
    //console.log(form);
    object.editNotificarClap(form);
})

//Envia la informacion de formulario de notificacion
$(document).on('submit', '#form_confirpagos', function(e){
    e.preventDefault();
    var form = new FormData(this);
    //console.log(form);
    object.confirmarPagos(form);
})


// Envio de id de la atencion para cambiar el estatus a finalizado 
$(document).on('click', '.finali_aten', function(){
    let id = $(this).attr("data-id")
    //console.log(id);
    object.finalizarAtencion(id);
})

// Abrir Modal para la el listado del status de pago por atencion
$(document).on('click', '.btn_status', function(){
    let id = $(this).attr("data-id"),
    fechaatencion = $(this).attr("data-fechaatencion");
    var f = moment(fechaatencion).format('D-M-YYYY');
    $("#modal_status_pagos").modal("show");
    $("#modal_title_statuspago").html("Estatus de Pago del Beneficio programado para: "+f);
    //console.log(id);
    object.listaStatusPagos(id);
})

$('select').select2();


// $('.dataTable-audi').DataTable({language: lan});

//--------- efectos para los botones de seleccion de nacionalidad y sexo ---------
$('#na-ven').on('click', function () {
    $("#ven").prop("checked", true)
    $("#ext").prop("checked", false)
    $('#na-ven').prop("class", "btn btn-primary")
    $('#na-ext').prop("class", "btn btn-default")
})

$('#na-ext').on('click', function () {
    $("#ven").prop("checked", false)
    $("#ext").prop("checked", true)
    $('#na-ven').prop("class", "btn btn-default")
    $('#na-ext').prop("class", "btn btn-primary")
})

$(document).on('click', '#se-fem', function () {
    console.log("Hola")
    $("#se-fen").prop("checked", true)
    $("#se-mas").prop("checked", false)
    $('#se-fem').prop("class", "btn btn-primary")
    $('#se-mas').prop("class", "btn btn-default")
})


$(document).on('click', '#se-mas',function () {
    $("#fen").prop("checked", false)
    $("#mas").prop("checked", true)
    $('#se-fem').prop("class", "btn btn-default")
    $('#se-mas').prop("class", "btn btn-primary")
})


$(document).ready(function () {
    var sex = $('input:radio[name=sexo]:checked');
    if(sex){
        if(sex.val() == "Masculino"){
            $("#se-mas").prop("checked", true)
            $('#se-mas').prop("class", "btn btn-primary")
            $('#se-fem').prop("class", "btn btn-default")
        }

        if(sex.val() == "femenino"){
            $("#se-fen").prop("checked", true)
            $('#se-mas').prop("class", "btn btn-default")
            $('#se-fen').prop("class", "btn btn-primary")
        }
        
    }
})

// Metodo para que el campo de monto solo escriba numeros y las cantidades se saperan por . y con , dos decimales
  $('input[name=monto_pagar]').on('input', function() {
    // Obtener el valor del input
    let valor = $(this).val();
    
    // Remover cualquier caracter que no sea un número o un punto
    valor = valor.replace(/\D/g, "");
    
    // Dividir la cifra en miles con un punto
    valor = valor.replace(/([0-9])([0-9]{2})$/, '$1,$2');
    // Dividir los decimales con coma
    valor = valor.replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ".");
    
    // Actualizar el valor del input
    $(this).val(valor);
  });
//--------------------------------------------------------------------------

//--------- Captura de evento para confirmación de botón ELIMINAR ---------
$(document).on('submit', '.form-delete', function(e){
    e.preventDefault();
    var form = $(this)
    Swal.fire({
        title: '<strong>¡Atención!</strong>',
        icon: 'warning',
        html:
          '<p>¿Está seguro(a) de querer eliminar este registro?</p>'
          +'<p>Tenga en cuenta que si confirma la acción los datos se perderán y no podrá recuperarlos.</p><br>'
          +'<label for="justificacion">Por favor, justifique su acción:</label><input type="text" class="form-control" id="justificacion" minlenght="15" required>',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText:
          '<i class="fa fa-check"></i> ¡Si, estoy seguro!',
        cancelButtonText:
          '<i class="fa fa-remove"></i>',
      }).then((result) => {
        console.log(result)
            if(result.value == true){
                $('input[name=justificacion_final]').val($('input[id=justificacion]').val())
                e.target.submit();

            }
      })
})

// Interacción de Reportes

$(document).on('click', '#reportes', function(){
    window.open("/sis_clap/public/reportes/", "Sala Clap - Reportes", "width=1280, height=400, resizable=no") 

})

// Abro el modal par notificar la atencion al clap
$(document).on('click', '.showModal_Notificar', function(){
    
    let id = $(this).attr("data-id"),
        fechaatencion = $(this).attr("data-fechaatencion");
    var f = moment(fechaatencion).format('D-M-YYYY');
    $("#modalNA").modal("show");
    $("#modal_title_notifi").html("Notificar al CLAP la atención programada para la fecha " + f);
    $("#atenciones_id").val(id);
})

// metodo para abrir el modal de edicion de la atencion
$(document).on('click', '.showModal_EditNotificar', function(){
    let id = $(this).attr("data-id"),
        fechaatencion = $(this).attr("data-fechaatencion"),
        fechatope = $(this).attr("data-fechatope"),
        montopagar = $(this).attr("data-montopagar");
        //console.log(id+' '+fechaatencion+' '+fechatope+' '+montopagar);
    var f = moment(fechaatencion).format('D-M-YYYY');
     $("#modalEditNA").modal("show");
     $("#modal_title_Editnotifi").html("Editar Notificación del CLAP para la atención del día " + f);
     $("#notificacion_id").val(id);
     $("#Edit_fechatope").val(fechatope);
     $("#Edit_montopagar").val(montopagar);
})

$(document).on('click', '.btn_confir', function(){
    let id = $(this).attr("data-id"),
    fechaatencion = $(this).attr("data-fechaatencion");
   // console.log(id+' '+fechaatencion);
   var f = moment(fechaatencion).format('D-M-YYYY');
    $("#modal_confir_pagos").modal("show");
    $("#modal_title_confirpagos").html("Confirmación del pago de benfecios para la atención del día " + f);
    $("#atencion_id").val(id);
    
})



// Recojo los valor del id de la atencion para usarla en la notificacion
$(document).on('click', '.btn_final', function(){
    let id = $(this).attr("data-id")
    //console.log(id);
    Swal.fire({
        title: '<strong>¡Atención!</strong>',
        icon: 'info',
        html:
          '<p><b>Estas apunto de indicar que este beneficio fue entregado por el distribuidor y repartido a todas las familias del CLAP que realizaron el pago correspondiente</b></p>'
          +'<p>Si esto es correcto pulsa <b>Finalizar</b></p><br>'
          +`<button class='btn btn-primary finali_aten' data-id='`+id+`'><b>Finalizar</b></button>`,
        showCloseButton: true,
        showCancelButton: false,
        focusConfirm: false,
        confirmButtonText: false,
        cancelButtonText: false,
        showConfirmButton: false,
    })
})














