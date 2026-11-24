const object = {
    consulCedula: function(ci){
        $.ajax({
            url: '/sis_clap/public/consulCedula/'+ci, 
            dataType: 'json',
            success: function(res){
                if(res.status == "fall"){
                    $('#nf-l-m').html(res.message);
                    $('#nf-l').removeAttr('style');
                    $('#nf-l').attr('style', 'padding: 15px');
                    $('#nombreL').val("");
                    $('#btn-submit').prop('disabled', true);
                }

                if(res.status == "ok" && res[0] != null){
                    $('#btn-submit').prop('disabled', false);
                    $('#nf-l').attr('style', 'display: none');
                    $('#nombre').val(res[0].nombre);
                    $('#fechanacimiento').val(res[0].fechanacimiento);
                    $('#discapacidades_id').append(`<option selected value="${res[0].discapacidad_id}">${res[0].discapacidad}</option>`);
                    if(res[0].sexo == "Masculino"){
                        $("#se-mas").prop("checked", true)
                        $('#se-mas').prop("class", "btn btn-primary")
                        $('#se-fem').attr("class", "btn btn-default")
                    }

                    if(res[0].sexo == "Femenino"){
                        $("#se-fem").prop("checked", true)
                        $('#se-mas').prop("class", "btn btn-default")
                        $('#se-fem').prop("class", "btn btn-primary")
                    }

                    if(res[0].nacionalidad == "V"){
                        $("#ven").prop("checked", true)
                        $("#ext").prop("checked", false)
                        $('#na-ven').prop("class", "btn btn-primary")
                        $('#na-ext').prop("class", "btn btn-default")
                    }

                    if(res[0].nacionalidad == "E"){
                        $("#ven").prop("checked", false)
                        $("#ext").prop("checked", true)
                        $('#na-ven').prop("class", "btn btn-default")
                        $('#na-ext').prop("class", "btn btn-primary")
                    }
                        
                }
                // Nacionalidad

                // Sexo
                
            }   
        })
    },

    consulCedulaJC: function(ci){
        $.ajax({
            url: '/sis_clap/public/consulCedulaJC/'+ci, 
            dataType: 'json',
            success: function(res){
                if(res.status == "fall"){
                    $('#nf-l-m').html(res.message);
                    $('#nf-l').removeAttr('style');
                    $('#nf-l').attr('style', 'padding: 15px');
                    $('#nombreL').val("");
                    $('#btn-submit').prop('disabled', true);
                }

                if(res.status == "ok" && res[0] != null){
                    $('#btn-submit').prop('disabled', false);
                    $('#nf-l').attr('style', 'display: none');
                    $('#nombre').val(res[0].nombre);
                    $('#fechanacimiento').val(res[0].fechanacimiento);
                    $('#discapacidades_id').append(`<option selected value="${res[0].discapacidad_id}">${res[0].discapacidad}</option>`);
                    if(res[0].sexo == "Masculino"){
                        $("#se-mas").prop("checked", true)
                        $('#se-mas').prop("class", "btn btn-primary")
                        $('#se-fem').attr("class", "btn btn-default")
                    }

                    if(res[0].sexo == "Femenino"){
                        $("#se-fem").prop("checked", true)
                        $('#se-mas').prop("class", "btn btn-default")
                        $('#se-fem').prop("class", "btn btn-primary")
                    }

                    if(res[0].nacionalidad == "V"){
                        $("#ven").prop("checked", true)
                        $("#ext").prop("checked", false)
                        $('#na-ven').prop("class", "btn btn-primary")
                        $('#na-ext').prop("class", "btn btn-default")
                    }

                    if(res[0].nacionalidad == "E"){
                        $("#ven").prop("checked", false)
                        $("#ext").prop("checked", true)
                        $('#na-ven').prop("class", "btn btn-default")
                        $('#na-ext').prop("class", "btn btn-primary")
                    }
                        
                }
                // Nacionalidad

                // Sexo
                
            }   
        })
    },

    consulCedulaLC: function(ci){
        $.ajax({
            url: '/sis_clap/public/consulCedulaLC/'+ci, 
            dataType: 'json',
            success: function(res){
                if(res.status == "fall"){
                    $('#nf-l-m').html(res.message);
                    $('#nf-l').removeAttr('style');
                    $('#nf-l').attr('style', 'padding: 15px');
                    $('#nombreL').val("");
                    $('#btn-submit').prop('disabled', true);
                }
                
                if(res.status == "ok" && res[0] != null){
                    $('#btn-submit').prop('disabled', false);
                    $('#nf-l').attr('style', 'display: none');
                    $('#nombreL').val(res[0].nombre);                        
                }
                
            }   
        })
    },

    consulCedulaJF: function(ci){
        $.ajax({
            url: '/sis_clap/public/consulCedulaJF/'+ci, 
            dataType: 'json',
            success: function(res){
                if(res.status == "fall"){
                    $('#nf-l-m').html(res.message);
                    $('#nf-l').removeAttr('style');
                    $('#nf-l').attr('style', 'padding: 15px');
                    $('#nombreL').val("");
                    $('#btn-submit').prop('disabled', true);
                }
                
                if(res.status == "ok" && res[0] != null){
                    $('#btn-submit').prop('disabled', false);
                    $('#nf-l').attr('style', 'display: none');
                    $('#nombre').val(res[0].nombre);
                    $('#telefono_movil').val(res[0].telefono_movil);
                    $('#telefono_fijo').val(res[0].telefono_fijo);                  
                        
                }
                
            }   
        })
    },

    consulCedulaEst: function(ci){
        $.ajax({
            url: '/sis_clap/public/consulCedulaEst/'+ci, 
            dataType: 'json',
            success: function(res){
                if(res.status == "fall"){
                    $('#nf-l-m').html(res.message);
                    $('#nf-l').removeAttr('style');
                    $('#nf-l').attr('style', 'padding: 15px');
                    $('#nombreL').val("");
                    $('#btn-submit').prop('disabled', true);
                }
                
                if(res.status == "ok" && res[0] != null){
                    $('#btn-submit').prop('disabled', false);
                    $('#nf-l').attr('style', 'display: none');
                    $('#nombre').val(res[0].nombre);
                    $('#telefono_movil').val(res[0].telefono_movil);
                    $('#telefono_fijo').val(res[0].telefono_fijo);                  
                        
                }

                    
               
                // Nacionalidad

                // Sexo
                
            }   
        })
    },

    consulCedulaResponsable: function(ci){
        $.ajax({
            url: '/sis_clap/public/consulCedulaResponsable/'+ci, 
            dataType: 'json',
            success: function(res){
                if(res.status == "fall"){
                    $('#nf-l-m').html(res.message);
                    $('#nf-l').removeAttr('style');
                    $('#nf-l').attr('style', 'padding: 15px');
                    $('#nombreR').val("");
                    $('#btn-submit').prop('disabled', true);
                }
                
                if(res.status == "ok" && res[0] != null){
                    $('#btn-submit').prop('disabled', false);
                    $('#nf-l').attr('style', 'display: none');
                    $('#nombreR').val(res[0].nombre);                                         
                }

                    
               
                // Nacionalidad

                // Sexo
                
            }   
        })
    },

    consulCedulaIns: function(ci){
        $.ajax({
            url: '/sis_clap/public/consulCedulaIns/'+ci, 
            dataType: 'json',
            success: function(res){
                if(res.status == "fall"){
                    $('#nf-l-m').html(res.message);
                    $('#nf-l').removeAttr('style');
                    $('#nf-l').attr('style', 'padding: 15px');
                    $('#nombre_resp').val("");
                    $('#btn-submit').prop('disabled', true);
                }
                
                if(res.status == "ok" && res[0] != null){
                    $('#btn-submit').prop('disabled', false);
                    $('#nf-l').attr('style', 'display: none');
                    $('#nombre_resp').val(res[0].nombre);              
                        
                }
                // Nacionalidad
                // Sexo
            }   
        })
    },

    consulParroquias: function(id){
        $.ajax({
            url: '/sis_clap/public/consulParroquias/'+id, 
            dataType: 'json',
            success: function(res){
                let template;
                template+= `<option value="">---Seleccione---</option>`;
                res.forEach(e => {
                    template+= `<option value="${e.id}">${e.descripcion}</option>`;
                })
                $('#parroquia').html(template);
            }   
        })
    },

    consulSectores: function(id){
        $.ajax({
            url: '/sis_clap/public/consulSectores/'+id, 
            dataType: 'json',
            success: function(res){
                console.log(res)
                // let template;
                // template+= `<option value="">---Seleccione---</option>`;
                // res.forEach(e => {
                //     template+= `<option value="${e.id}">${e.descripcion}</option>`;
                // })
                // $('#sector').html(template);
                $('#sector').val(res.id).trigger('change');
            }   
        })
    },

    consulClap: function(id){
        $.ajax({
            url: '/sis_clap/public/consulClap/'+id, 
            dataType: 'json',
            success: function(res){
                console.log(res)
                let template;
                template+= `<option value="">---Seleccione---</option>`;
                res.forEach(e => {
                    template+= `<option value="${e.id}">${e.nombre_clap}</option>`;
                })
                $('#clap').html(template);
            }   
        })
    },

    filtro: function(form){
        console.log(form)
        $.ajax({
            type: "POST",
            url: $('#form-filtro').attr('action'), 
            data: form,
            processData: false,
            contentType: false,
            success: function(res){
                console.log(res)
                $('tbody').html(res);
            
                
            }, error : function(err) {
              
               console.log(err)
            },   
        })
    },

    notificarClap: function(form){
        //console.log(form)
        $.ajax({
            type: "POST",
            url: '/sis_clap/public/notificarClap', 
            data: form,
            processData: false,
            contentType: false,
            success: function(res){

                //console.log(res)
                $("#modalNA").modal("hide");
                $("#fechatope").prop('class', 'form-group');
                $("#text_fecha").html('');
                $("#montopagar").prop('class', 'form-group');
                $("#text_monto").html('');
                    Swal.fire({
                        title: '<strong>¡Notificación Enviada!</strong>',
                        icon: 'success',
                        html:
                        '<p>Usted ha Notificado de manera correcta a las familias del CLAP la fecha y el monto del próximo beneficio que se entregara</p>',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    setTimeout(() => {
                    window.location.reload();
                    }, 2000);
                
            }, error : function(res) {
              
                if (res.responseJSON.errors.fecha_tope) {
                    $("#fechatope").prop('class', 'form-group has-error')
                    $("#text_fecha").html('<b>'+res.responseJSON.errors.fecha_tope+'<b>')
                }else{
                    $("#fechatope").prop('class', 'form-group');
                    $("#text_fecha").html('');
                }

                if (res.responseJSON.errors.monto_pagar) {
                    $("#montopagar").prop('class', 'form-group has-error')
                    $("#text_monto").html('<b>'+res.responseJSON.errors.monto_pagar+'<b>')
                }else{
                    $("#montopagar").prop('class', 'form-group');
                    $("#text_monto").html('');
                }

            },   
        })
    },

    editNotificarClap: function(form) {
        //console.log(form)
        $.ajax({
            type: "GET",
            url: '/sis_clap/public/editNotificarClap', 
            data: form,
            processData: false,
            contentType: false,
            success: function(res){

                    $("#modalEditNA").modal("hide");
                    $("#fechatopeEdit").prop('class', 'form-group');
                    $("#text_fechaEdit").html('');
                    $("#montopagarEdit").prop('class', 'form-group');
                    $("#text_montoEdit").html('');
                        Swal.fire({
                            title: '<strong>¡Notificación Editada!</strong>',
                            icon: 'success',
                            html:
                            '<p>Usted ha Editado de forma correcta la Notificación del próximo beneficio para las familias del CLAP</p>',
                            showConfirmButton: false,
                            timer: 1500
                        })
                      setTimeout(() => {
                        window.location.reload();
                      }, 2000);
               

            }, error : function(res) {

                if (res.responseJSON.errors.fecha_tope) {
                    $("#fechatopeEdit").prop('class', 'form-group has-error')
                    $("#text_fechaEdit").html('<b>'+res.responseJSON.errors.fecha_tope+'<b>')
                }else{
                    $("#fechatopeEdit").prop('class', 'form-group');
                    $("#text_fechaEdit").html('');
                }

                if (res.responseJSON.errors.monto_pagar) {
                    $("#montopagarEdit").prop('class', 'form-group has-error')
                    $("#text_montoEdit").html('<b>'+res.responseJSON.errors.monto_pagar+'<b>')
                }else{
                    $("#montopagarEdit").prop('class', 'form-group');
                    $("#text_montoEdit").html('');
                }
            },   
        })
    },

    confirmarPagos: function(form){
        //console.log(form);
        $.ajax({
            type: "POST",
            url: '/sis_clap/public/confirmarPagos',
            data: form, 
            processData: false,
            contentType: false,
            success: function(res){

                console.log(res)

                if(res == 'bien'){
                    $("#fechapago").prop('class', 'form-group');
                    $("#text_fechapago").html('');
                    $("#refe").prop('class', 'form-group');
                    $("#text_refe").html('');
                    $("#rutafoto").prop('class', 'form-group');
                    $("#text_rutafoto").html('');
                    $("#modal_confir_pagos").modal("hide");
                        Swal.fire({
                            title: '<strong>¡Confirmación Exitosa!</strong>',
                            icon: 'success',
                            html:
                            '<p>Usted acaba de confirmar al distribuidor asignado el pago total del beneficio</p>',
                            showConfirmButton: false,
                            timer: 2500
                        })
                      setTimeout(() => {
                        window.location.reload();
                      }, 2500);
                }else{

                    $("#fechapago").prop('class', 'form-group');
                    $("#text_fechapago").html('');
                    $("#refe").prop('class', 'form-group');
                    $("#text_refe").html('');
                    $("#rutafoto").prop('class', 'form-group');
                    $("#text_rutafoto").html('');
                    $("#modal_confir_pagos").modal("hide");
                        Swal.fire({
                            title: '<strong>¡Error al Confirmar!</strong>',
                            icon: 'error',
                            html:
                            '<p>Intentelo más tarde</p>',
                            showConfirmButton: false,
                            timer: 2500
                        })
                      setTimeout(() => {
                        window.location.reload();
                      }, 2500);

                }


            }, error : function(res) {
                console.log(res.responseJSON.errors)

                if (res.responseJSON.errors.fecha_pago) {
                    $("#fechapago").prop('class', 'form-group has-error')
                    $("#text_fechapago").html('<b>'+res.responseJSON.errors.fecha_pago+'<b>')
                }else{
                    $("#fechapago").prop('class', 'form-group');
                    $("#text_fechapago").html('');
                }

                if (res.responseJSON.errors.referencia) {
                    $("#refe").prop('class', 'form-group has-error')
                    $("#text_refe").html('<b>'+res.responseJSON.errors.referencia+'<b>')
                }else{
                    $("#refe").prop('class', 'form-group');
                    $("#text_refe").html('');
                }

                if (res.responseJSON.errors.ruta_foto) {
                    $("#rutafoto").prop('class', 'form-group has-error')
                    $("#text_rutafoto").html('<b>'+res.responseJSON.errors.ruta_foto+'<b>')
                }else{
                    $("#rutafoto").prop('class', 'form-group');
                    $("#text_rutafoto").html('');
                }
            },   
        })

    },

    finalizarAtencion: function(id) {
        //console.log(id);
        $.ajax({
            type: "GET",
            url: '/sis_clap/public/finalizarAtencion/'+id, 
            processData: false,
            contentType: false,
            success: function(res){

                //console.log(res)

                if(res == 'bien'){
                    $("#modalNA").modal("hide");
                        Swal.fire({
                            title: '<strong>¡Atención Finalizada con Éxito!</strong>',
                            icon: 'success',
                            html: false,
                            showConfirmButton: false,
                            timer: 1500
                        })
                      setTimeout(() => {
                        window.location.reload();
                      }, 2500);
                }

            }, error : function(res) {
                console.log(res)
            },   
        })
    },

    listaStatusPagos: function(id) {
        //console.log(id);
        $.ajax({
            type: "GET",
            url: '/sis_clap/public/listaStatusPagos/'+id, 
            processData: false,
            contentType: false,
            success: function(res){

            console.log(res.pagos)

            if (res.persoPagaron > 0) {
                console.log('mostar');
                $("#familiasPagaron").html('<b>Beneficios Pagados: '+res.persoPagaron+'</b>');
                $("#tabla_pagos").html('');
                res.pagos.forEach(e => {
                    $("#tabla_pagos").append(`
                        <div class="list-group-item">
                        <h4 class="list-group-item-heading"><i class="fa fa-user" aria-hidden="true"></i> ${e.nombre} - <small><b>Jefe de Familia</b></small></h4>
                        <span class="badge" style=" font-size: 15px; background-color: #5cb85c; color: #fff; text-shadow: black 0.1em 0.1em 0.2em">PAGO</span>
                        <ul class="list-inline text-center">
                        <li>
                            <h5 class="list-group-item-text"><b>Cédula:</b> ${e.cedula}</h5>
                        </li>
                        <li>
                            <h5 class="list-group-item-text" title="Telefono"><i class="fa fa-phone" aria-hidden="true"></i> ${e.telefono_movil}</h5>
                        </li>
                        <li>
                            <h5 class="list-group-item-text" title="Referencia"><b>Referencia de Pago:</b> ${e.referencia}</h5>
                        </li>
                        <li>
                            <h5 class="list-group-item-text" title="Fecha de Pago"><b>Fecha de Pago:</b> ${e.fecha_pago}</h5>
                        </li>
                        <li>
                            <a class="list-group-item-text btn btn-primary" href="/sis_clap/public/download/${e.pago_id}" title="Capture" download><i class="fa fa-download"></i></a>
                        </li>
                        </ul>
                    </div>
                  `)
                })
            }else{
                $("#tabla_pagos").html(`
                    <div class="list-group-item text-center">
                        <h4 class="list-group-item-heading">En estos momentos ningún Jefe de Familia a realizado el pago del beneficio</h4>
                    </div>
                `);
            }

            }, error : function(res) {
                console.log(res)
            },   
        })
        
    },


}

const validator = {
    soloNumeros: function(event){
        var code = (event.which) ? event.which : event.keyCode;

        if(code==8) { // backspace.
            return true;
        } else if(code>=48 && code<=57) { // is a number.
            return true;
        } else{ // other keys.
            return false;
        }
    },

    soloLetras: function (event) {
        if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
			event.returnValue = false;
    }
}