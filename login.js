
function mostrar(){

    let input = document.querySelector('#senha')
    if (input.getAttribute('type') == 'password') {
      input.setAttribute('type', 'text')
    } else {
      input.setAttribute('type', 'password')
    }
    
}

function logar(form) {
  console.log("logar");
  var form =  $("#form-logar").serialize();
  console.log(form);

  $.ajax({                    
      type: 'POST',//método                  
      url: 'valida.php',
      data: form,        
      dataType: 'html',
      timeout: 5000 // 5000ms,
  
      }).done(function(d) {
          // is called if request is successful
          console.log(d);
          if(d=='3'){
              console.log('3');

              modalSucesso();
              setTimeout("window.location.href='dao/adm.php'", 5000);
          }
          if(d=='2' || d=='1'){
              console.log('2');

              modalErro();

          }
      }).fail(function(jqXHR, status) {
          // is called if request fails or timeout is reached
          alert('Requisição não pode ser completada: ' + status);
      });                  
}

//modalSucesso();
function modalSucesso(){
  $("#myModalSucesso").modal();
}
//modalErro();
function modalErro(){
    $("#myModalErro").modal();
}


