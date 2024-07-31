
function limpar(){
	console.log("Limpei");
	document.getElementById("form-cadastrar").reset();
}

function salvar(form) {
    console.log("Salvar");
    var form =  $("#form-cadastrar").serialize();
    console.log(form);

    $.ajax({                    
        type: 'POST',                 
        url: 'cadastrarFormulario.php',
        cache: false,
        data: form,        
        dataType: 'html',
        timeout: 5000 
    
        }).done(function(d) {

            console.log(d);
            if(d=='3'){
                console.log('3');
                $("#btnLimpar2").trigger("click");
                console.log('SUCESSO'); 
                modalSucesso();
            }
            if(d=='2' || d=='1'){
                console.log('2');

                $("#btnLimpar2").trigger("click"); 
                modalErro();

            }
        }).fail(function(jqXHR, status) {
            
            alert('Requisição não pode ser completada: ' + status);

        });                  
}
 

$(document).ready(function(){
    $('#telefone').mask('###########');
    $('#whatsapp').mask('+#############');
    $('#orcamento_medio').mask('###.###.###,##', {reverse: true});

});

//modalSucesso();
function modalSucesso(){
    $("#myModalSucesso").modal();
}
//modalErro();
function modalErro(){
      $("#myModalErro").modal();
}

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

