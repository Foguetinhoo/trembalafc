$(document).ready(() => {
    $.validator.setDefaults({
        invalidHandler: () => {
            $('#msg').addClass('alert alert-danger').html('<p>Preencha os campos</p>').fadeIn(1000).fadeOut(2500);

            // setTimeout(()=> $('#msg').,2500);
        }
    })
    $('.login_form').validate({
        errorElement: 'em',
        rules: {
            inputUsuario: {
                required: true
            },
            inputSenha: {
                required: true
            }
        },
        messages: {
            inputUsuario: {
                required: 'campo obrigatório'
            },
            inputSenha: {
                required: 'campo obrigatório'
            }
        },
        highlight: (element) => $(element).addClass('is-invalid'),
        unhighlight: (element) =>$(element).removeClass('is-invalid').addClass('is-valid'),
        submitHandler: () => {
            var dados = $('.login_form').serializeArray();
            $.ajax({
                type: 'POST',
                url: 'Controllers/LoginController.class.php',
                data: dados,
                beforeSend: () =>   {$('.button-envia i').addClass('fas fa-spinner')},
                success:(response)=>{
                    console.log(response);
                    $('.button-envia i').removeClass('fas fa-spinner').addClass('fas fa-arrow-right');  
                     if(response === "ERRO")
                     {
                        $('#msg').addClass('alert alert-danger').html('<p>Usuario ou Senha incorreto</p>').fadeIn(1000).fadeOut(2500);
                    }else{
                        location.href ='menu';
                    }
                }         
            })
            return false;
        }

    })

});