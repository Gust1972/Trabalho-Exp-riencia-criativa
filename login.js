function registrar(){
    user = document.getElementById('nome').value;
    e_mail = document.getElementById('email').value;
    data_Nascimento = document.getElementById('dataNascimento').value;
    _senha = document.getElementById('senha').value;
    _nacionalidade = document.getElementById('nacionalidade').value;
    _peso= document.getElementById('peso').value;
    $.ajax({
        type:'POST',
        dataType:'json',
        url:'./cadastro.php',
        data: {nome:user, email:e_mail, dataNascimento:data_Nascimento,senha:_senha,nacionalidade:_nacionalidade,peso:_peso},
        success: function(response){
            console.log(response);
        }
    });
}