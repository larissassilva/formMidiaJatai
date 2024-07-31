var t;
var obj;
var dadosObj = new Array();
var idEditar;

function limpar(){
	console.log("Limpei");
	document.getElementById("form-cadastrar").reset();
}

function salvar(form) {
    console.log("Salvar");
    var form =  $("#form-cadastrar").serialize();
    console.log(form);

    $.ajax({                    
        type: 'POST',//método                  
        url: 'cadUsuario.php',
        cache: false,
        data: form,        
        dataType: 'html',
        timeout: 5000 // 5000ms,
    
        }).done(function(d) {
            // is called if request is successful
            console.log(d);
            if(d=='3'){
                console.log('3');
                //$("#btnLimpar2").trigger("click");
                console.log('SUCESSO'); 
                $("#nome").prop('required', false);
                $("#cpf").prop('required', false);
                $("#whatsapp").prop('required', false);
                $("#email").prop('required', false);
                $("#senha").prop('required', false);
                modalSucesso();
            }
            if(d=='2' || d=='1'){
                console.log('2');
                $("#nome").prop('required', false);
                $("#cpf").prop('required', false); 
                $("#whatsapp").prop('required', false);
                $("#email").prop('required', false);
                $("#senha").prop('required', false);
               // $("#btnLimpar2").trigger("click"); 
                modalErro();

            }
        }).fail(function(jqXHR, status) {
            // is called if request fails or timeout is reached
            alert('Requisição não pode ser completada: ' + status);
        });                  
}
 

$(document).ready(function(){
    $('#telefone').mask('###########');
    $('#whatsapp').mask('+#############');
    $('#orcamento_medio').mask('###.###.###,##', {reverse: true});
    
});

//listar usuários e Editar

function editar(form){
    console.log("aqui Editar Dados do usuário");
        var form = $("#form-editar").serialize();
               
        console.log(form+ '&id=' + idEditar);

    $.ajax({                    
        type: 'POST',//método                  
        url: 'editarUsuario.php',
        cache: false,
        data: form +   '&id=' + idEditar,       
        dataType: 'html',
        timeout: 5000 // 5000ms,
    
        }).done(function(d) {
            // is called if request is successful
            console.log(d);
            if(d=='3'){
                console.log('3');
                //$("#btnLimpar2").trigger("click");
                console.log('SUCESSO'); 
                $("#nome").prop('required', false);
                $("#cpf").prop('required', false);
                $("#whatsapp").prop('required', false);
                $("#email").prop('required', false);
                $("#senha").prop('required', false);
                modalSucesso2();


            }
            if(d=='2' || d=='1'){
                console.log('2');
                $("#nome").prop('required', false);
                $("#cpf").prop('required', false); 
                $("#whatsapp").prop('required', false);
                $("#email").prop('required', false);
                $("#senha").prop('required', false);
               // $("#btnLimpar2").trigger("click"); 
                modalErro();

            }
        }).fail(function(jqXHR, status) {
            // is called if request fails or timeout is reached
            alert('Requisição não pode ser completada: ' + status);
        });                 
}


function lista () {
    //console.log('Chamei listar');
    obj = "listarUsuario.php";
    $.getJSON( obj, {
      format: "json"
    })
      .done(function( data ) {
        //console.log(data);   
        data.forEach(function (item, indice, array) {
          //console.log(item.cpf);
          dadosObj[indice]=item;
          //console.log(dadosObj);
        });
        //carregar tabela
        t=$("#tabelaForm").DataTable({//variavel do data table ajax reload/ incio aqui
          data: data,
          columns: [
            {"data": "id"},
            {"data": "cpf"},
            {"data": "nome"},
            {"data": "email"},
            {"data": null,
                "createdCell": function (td, cellData, rowData, row, col) {
                  //console.log(rowData);
                    $(td).addClass('text-center');
                    $(td).html('<button id="editar2" rel="'+rowData.id+'" type="button" class="btn btn-xs" data-target="#modalEditar" data-toggle="modal" style="background-color: #00346D; color: #fff;"><i class="fa-solid fa-user-plus"></i>&nbsp;Editar / Visualizar</button>');
                    //console.log(rowData.id);
                  }                  
            },            
            {"data": null,
            "createdCell": function (td, cellData, rowData, row, col) {
                //console.log(rowData);
                $(td).addClass('text-center');
                $(td).html('<button rel="'+rowData.id+'" type="button" style="background-color: #00346D; color: #fff;" id="usuarioIden"  class="btn btn-xs" data-target="#modalEditarIdentidade" data-toggle="modal">&nbsp;<i class="fa-solid fa-fingerprint" style="color: #fff;"></i>&nbsp;Editar Senha Usuário</button>');
                //console.log(rowData.id);
                }                  
             }
          ],     
          
          //order: [[ 0, 'asc' ], [ 2, 'desc' ]],       
         
        });//fim do carregar tabela
      })
      
  };
  lista ();
  $('#tabelaForm').on('click', 'tr', function (e) {   
    var dado= t.row($(this)).data();//vir tudo da linha que cliquei 
    console.log(dado);
        $.each(dado,function (key, valor) {
          //preciso para editar depois 
          if(key == 'id'){
            idEditar =  valor;
            console.log('idEditar');
            console.log(idEditar);
          }

            $('.'+key).val(valor).trigger('change');  
        
        });
  });

function atualizarPagina(){
    window.location.href="usuarios.php";
}
//pergunta se quer memso excluir
function excluir(){
    $("#modalExcluir").modal('show');
}
//exclui de verdade
function excluirDeVerdade(){
    console.log('Excluir');
    var id= idEditar;
    console.log(id);
    
    
    $.ajax({                    
        type: 'POST',//método                  
        url: 'deleteUsuarios.php',
        cache: false,
        data:  'id=' + id, 
                  
        success:function (d) {
            console.log("entrei no ajax");
            console.log(d);            
            if(d=='3'){

                $("#btnLimpar").trigger("click");  
                fechaAbri("Excluir","Sucesso");

            }
            if(d=='2' || d=='1'){

                $("#btnLimpar").trigger("click");  
                fechaAbri("Excluir","Erro");

            }
        }         
    }); 
}


function fechaAbri(idModal, idModal2){
    let modalFecha = idModal;
    let modalAbri = idModal2;
    console.log(modalFecha);
    console.log(modalAbri);

    if(modalFecha=='Editar' && modalAbri =='Sucesso'){
        $("#modalEditar").modal('hide').on('hidden.bs.modal',function(){
            $("#myModalSucesso").modal('show');
        });
        let precisamosEsperar = () => {
            return new Promise(resolve => {
            //fecha modal de mensagem depois de 5 segundos
            setTimeout(function(){
                $("#myModalSucesso").modal("hide")
                resolve(5)
            }, 5000)
           })
        }
        let outraFuncao = async () => {
            let x = await precisamosEsperar()
           //atualiza a pagina em 2 segundos depois de fechar a modal mensagem
           setTimeout('atualizarPagina()', 2000);
           //console.log(x)
        }
        outraFuncao();       
    }
    if(modalFecha=='Editar' && modalAbri =='Erro'){
        $("#modalEditar").modal('hide').on('hidden.bs.modal', function(){
            $("#myModalErro").modal('show');
        });
        let precisamosEsperar = () => {
            return new Promise(resolve => {
            //fecha modal de mensagem depois de 5 segundos
            setTimeout(function(){
                $("#myModalErro").modal("hide")
                resolve(5)
            }, 5000)
           })
        }
        let outraFuncao = async () => {
            let x = await precisamosEsperar()
           //atualiza a pagina em 2 segundos depois de fechar a modal mensagem
           setTimeout('atualizarPagina()', 2000);
           //console.log(x)
        }
        outraFuncao();    
    }
 
    if(modalFecha=='Excluir' && modalAbri =='Sucesso'){
        $("#modalExcluir").modal('hide').on('hidden.bs.modal', function(){
            $("#ModalSucessoExcluir").modal('show');
        });
        const precisamosEsperar = () => {
            return new Promise(resolve => {
            //fecha modal de mensagem depois de 5 segundos
            setTimeout(function(){
                console.log("Fechar sucesso");
                $("#ModalSucessoExcluir").modal("hide")
                resolve(5)
            }, 5000)
           })
        }
        let outraFuncao = async () => {
            let x = await precisamosEsperar()
            console.log("Atualizar a página.");
           //atualiza a pagina em 2 segundos depois de fechar a modal mensagem
           setTimeout('atualizarPagina()', 2000);
           console.log(x)
        }
        outraFuncao();           
    }
    if(modalFecha=='Excluir' && modalAbri =='Erro'){
        $("#modalExcluir").modal('hide').on('hidden.bs.modal', function(){
            $("#ModalErroExcluir").modal('show');
        });
        let precisamosEsperar = () => {
            return new Promise(resolve => {
            //fecha modal de mensagem depois de 5 segundos
            setTimeout(function(){
                $("#ModalErroExcluir").modal("hide")
                resolve(5)
            }, 5000)
           })
        }
        let outraFuncao = async () => {
            let x = await precisamosEsperar()
           //atualiza a pagina em 2 segundos depois de fechar a modal mensagem
           setTimeout('atualizarPagina()', 2000);
           //console.log(x)
        }
        outraFuncao();    
    } 

    if(modalFecha=='EditarSenha' && modalAbri =='Sucesso'){
        $("#modalEditarIdentidade").modal('hide').on('hidden.bs.modal', function(){
            $("#myModalSucesso").modal('show');
        });
        const precisamosEsperar = () => {
            return new Promise(resolve => {
            //fecha modal de mensagem depois de 5 segundos
            setTimeout(function(){
                console.log("Fechar sucesso");
                $("#myModalSucesso").modal("hide")
                resolve(5)
            }, 5000)
           })
        }
        let outraFuncao = async () => {
            let x = await precisamosEsperar()
            console.log("Atualizar a página.");
           //atualiza a pagina em 2 segundos depois de fechar a modal mensagem
           setTimeout('atualizarPagina()', 2000);
           console.log(x)
        }
        outraFuncao();           
    }
    if(modalFecha=='EditarSenha' && modalAbri =='Erro'){
        $("#modalEditarIdentidade").modal('hide').on('hidden.bs.modal', function(){
            $("#myModalErro").modal('show');
        });
        let precisamosEsperar = () => {
            return new Promise(resolve => {
            //fecha modal de mensagem depois de 5 segundos
            setTimeout(function(){
                $("#myModalErro").modal("hide")
                resolve(5)
            }, 5000)
           })
        }
        let outraFuncao = async () => {
            let x = await precisamosEsperar()
           //atualiza a pagina em 2 segundos depois de fechar a modal mensagem
           setTimeout('atualizarPagina()', 2000);
           //console.log(x)
        }
        outraFuncao();    
    } 

}



function mostrar(){

    let input = document.querySelector('#senha2')
    if (input.getAttribute('type') == 'password') {
      input.setAttribute('type', 'text')
    } else {
      input.setAttribute('type', 'password')
    }
    
}

function mostrar2(){

    let input = document.querySelector('#senha')
    if (input.getAttribute('type') == 'password') {
      input.setAttribute('type', 'text')
    } else {
      input.setAttribute('type', 'password')
    }
    
}

//Editar identidade do usuários

function editarIdentidade(form){
    console.log("aqui Editar Dados do usuário");
        var form = $("#form-editar2").serialize();
               
        console.log(form+ '&id=' + idEditar);

    $.ajax({                    
        type: 'POST',//método                  
        url: 'certificar.php',
        cache: false,
        data: form +   '&id=' + idEditar,       
        dataType: 'html',
        timeout: 5000 // 5000ms,
    
        }).done(function(d) {
            // is called if request is successful
            console.log(d);
            if(d=='3'){
                console.log('3');
                //$("#btnLimpar2").trigger("click");
                console.log('SUCESSO');
                fechaAbri("EditarSenha","Sucesso");
            }
            if(d=='2' || d=='1'){
                console.log('2');
                $("#senha2").prop('required', false);
               // $("#btnLimpar2").trigger("click"); 
               fechaAbri("EditarSenha","Erro");

            }
        }).fail(function(jqXHR, status) {
            // is called if request fails or timeout is reached
            alert('Requisição não pode ser completada: ' + status);
        });               
}


//modalSucesso();
function modalSucesso(){
    $("#nome").prop('required', false);
    $("#myModalSucesso").modal();


}

//modal sucesso do editarUsuario
function modalSucesso2(){
    $("#nome").prop('required', false);
    $("#modalEditar").remove();
    $("#myModalSucesso").modal();
    setTimeout('atualizarPagina()', 5000);
}

//modalErro();
function modalErro(){
      $("#myModalErro").modal();
}

function limpar2(){
	console.log("Limpei");
	document.getElementById("senha2").reset();
}
