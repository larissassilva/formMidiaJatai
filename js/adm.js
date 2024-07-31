var t;
var obj;
var dadosObj = new Array();
var idEditar;
//new DataTable('#tabelaForm');

function lista () {
    //console.log('Chamei listar');
    obj = "listarForm.php";
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
            {"data": "empresa_negocio"},
            {"data": "nome"},
            {"data": "whatsapp"},
            {"data": null,
                "createdCell": function (td, cellData, rowData, row, col) {
                  //console.log(rowData);
                    $(td).addClass('text-center');
                    $(td).html('<button id="editar2" rel="'+rowData.id+'" type="button" class="btn btn-xs" data-target="#modalEditar" data-toggle="modal" style="background-color: #00346D; color: #fff;"><i class="fa-solid fa-file-pen"></i>&nbsp;Editar / Visualizar</button>');
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

function limpar(){
	console.log("Limpei");
	document.getElementById("form-cadastrar").reset();
}

function salvar(form) {
    console.log("Salvar");
    var form =  $("#form-cadastrar").serialize();
    console.log(form);
    
    $.ajax({  
        url: '../cadastrarFormulario.php',
        type: 'POST',//método 
        cache: false,
        data: form,
        dataType: 'html',
        timeout: 5000 // 5000ms,
    
        }).done(function(d) {
            // is called if request is successful
            console.log(d);
            if(d=='3'){

                console.log('3');
                $("#btnLimpar2").trigger("click"); 
                fechaAbri("Cadastrar","Sucesso");

            }
            if(d=='2' || d=='1'){

                console.log('2');                
               // $("#btnLimpar2").trigger("click"); 
                fechaAbri("Cadastrar","Erro");

            }
        }).fail(function(jqXHR, status) {
            // is called if request fails or timeout is reached
            alert(  + status);
        });         
}


$(document).ready(function(){
    $('#telefone').mask('###########');
    $('#whatsapp').mask('+#############');
    $('#orcamento_medio').mask('###.###.###,##', {reverse: true});
});

//modalSucesso();
function modalSucesso(){
    $("#nome").prop('required', false);
    $("#myModalSucesso").modal();
}
//modalErro();
function modalErro(){
      $("#myModalErro").modal();
}

//Atualizar dados do usuário da tela usuario
function editarDadosForm(form){
    console.log("aqui Editar Dados do usuário");
        var form = $("#form-editar").serialize();
               
        console.log(form+ '&id=' + idEditar);
       
        $.ajax({                    
          type: 'POST',//método                  
          url: '../dao/editarDadosForm.php',
          cache: false,
          data: form +   '&id=' + idEditar, 
                    
          success:function (d) {
              console.log("entrei no ajax");
              console.log(d);            
              if(d=='3'){

               $("#modalEditar").remove();
               $("#myModalSucesso").modal('show');
              }
              if(d=='2' || d=='1'){
  
               $("#btnLimpar").trigger("click");  
               fechaAbri("Editar","Erro");
  
              }
            }
            
  
          
        });    
  }
    //fim do atualizar  dados do usuário

//função para limitar caracteres no textarea 
function limitaTextarea(id, t, cont){
  let idTexto= id;
  console.log(idTexto);
  let total = t;
  console.log(total);
  let contador = cont;
  console.log(contador);
  
  let textArea = document.getElementById(idTexto);
  let texto = textArea.value.length;   
  let resto=0;
    if(texto<=1500 && resto>=0){  
        textArea = document.getElementById(idTexto);
        texto = textArea.value.length;  
        resto = total-texto; 
        document.getElementById(contador).innerHTML = resto;
    }else{ //travar no 0 e não escrever mais
        resto = 0; 
        document.getElementById(contador).innerHTML = resto; 
    }
}


//Função que fecha a modal Editar ou Cadastrar e
//abre uma modal sucesso ou erro "#modalEditar", "#myModalSucesso"
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
           console.log(x)
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
    if(modalFecha=='Cadastrar' && modalAbri =='Sucesso'){
        $("#modalCadastrar").modal('hide').on('hidden.bs.modal', function(){
            $("#myModalSucesso").modal('show');
        });
        const precisamosEsperar = () => {
            return new Promise(resolve => {
            //fecha modal de mensagem depois de 5 segundos
            setTimeout(function(){
                console.log("Fechar sucesso");
                $("#myModalSucesso").modal("hide")
                resolve(5)
            }, 15000)
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
    if(modalFecha=='Cadastrar' && modalAbri =='Erro'){
        $("#modalCadastrar").modal('hide').on('hidden.bs.modal', function(){
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

}
function atualizarPagina(){
    window.location.href="../dao/adm.php";
}
//pergunta se quer memso excluir
function excluir(){
    $("#modalEditar").modal('hide');
    $("#modalExcluir").modal('show');
   
}
//exclui de verdade
function excluirDeVerdade(){
    console.log('Excluir');
    var id= idEditar;
    console.log(id);

    $.ajax({                    
        type: 'POST',//método                  
        url: '../dao/deleteForm.php',
        cache: false,
        data:  'id=' + id, 
                  
        success:function (d) {
            console.log("entrei no ajax");
            console.log(d);            
            if(d=='3'){

             fechaAbri("Excluir","Sucesso");

            }
            if(d=='2' || d=='1'){
  
             fechaAbri("Excluir","Erro");

            }
        }         
    }); 
}


