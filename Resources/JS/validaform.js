$(document).ready(function () {
        $('#cpf').mask('000.000.000-00');
        $('#rg').mask('00.000.000-0');
        $('#datanascimento').mask('00/00/0000');

        jQuery.validator.addMethod("cpf", function (value, element) {
                value = jQuery.trim(value);
                value = value.replace('.', '');
                value = value.replace('.', '');
                cpf = value.replace('-', '');
                while (cpf.length < 11) cpf = "0" + cpf;
                var expReg = /^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/;
                var a = [];
                var b = new Number;
                var c = 11;
                for (i = 0; i < 11; i++) {
                        a[i] = cpf.charAt(i);
                        if (i < 9) b += (a[i] * --c);
                }
                if ((x = b % 11) < 2) {
                        a[9] = 0
                } else {
                        a[9] = 11 - x
                }
                b = 0;
                c = 11;
                for (y = 0; y < 10; y++) b += (a[y] * c--);
                if ((x = b % 11) < 2) {
                        a[10] = 0;
                } else {
                        a[10] = 11 - x;
                }

                var retorno = true;
                if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10]) || cpf.match(expReg)) retorno = false;
                return this.optional(element) || retorno;

        }, "Informe um CPF válido");
        jQuery.validator.addMethod("dateBR", function (value, element) {

                if (value.length != 10) return false;
                return value.match(/^(0[1-9]|[12][0-9]|3[01])[- \/.](0[1-9]|1[012])[- \/.](19|20)\d\d$/);
        }, "Informe uma data válida"); // Mensagem padrão

        jQuery.validator.addMethod("letras", function (value, element) {
                value = jQuery.trim(value)
                value = value.split(" ");
                value = value.join("");
                var regExp = /^([a-zA-Zà-úÀ-Ú]|\s+)+$/;
                return regExp.test(value);
        }, "Por favor insira somente letras");

        $.validator.setDefaults({
                invalidHandler: function () {
                        $('#alert').addClass("alert alert-danger").text("Preencha os campos a seguir!").fadeIn(750).fadeOut(4000);
                }
        });


        $("#inscricao").validate({
                errorElement: 'em',
                rules: {
                        nome: {
                                required: true,
                                minlength: 7,
                                letras: true

                        },
                        datanascimento: {
                                required: true,
                                dateBR: true
                        },
                        cpf: {
                                cpf: true,
                                required: true
                        },
                        rg: {
                                required: true,
                                minlength: 12,
                                maxlength: 12
                        }

                },
                messages: {
                        nome: {
                                required: 'Informe o nome por favor',
                                minlength: 'Minimo de 7 caracteres',
                                letras: 'informe só letras meu caro jogador'


                        },
                        datanascimento: {
                                required: 'Informe a data de nascimento por favor',
                                date: 'informe uma data válida'



                        },
                        cpf: {
                                required: 'Informe o CPF por favor',
                                cpf: 'CPF inválido'
                        },
                        rg: {
                                required: 'Informe o RG por favor',
                                minlength: 'Preencha o campo corretamente',
                                maxlength: 'Preencha o campo corretamente'
                        }

                },
                highlight: function (element) {

                        $(element).addClass('is-invalid');
                },
                unhighlight: function (element) {
                        $(element).removeClass('is-invalid').addClass('is-valid');

                },
                submitHandler: function () {
                        var dados = $("#inscricao").serializeArray();
                        console.log(dados)
                        $.ajax({
                                type: "POST",
                                url: "/Controllers/InscritoController.class.php",
                                data: dados,
                                beforeSend: () => {
                                        $('#button1').html('<i class="fas fa-spinner"></i> Enviar')
                                },
                                error: (error) => {
                                        $('#alert').addClass("alert alert-danger").text("Erro ao inscrever").fadeIn(1000);
                                        console.log(error)
                                },
                                success: (data) => {
                                        $('#button1').html('<i class="fas fa-envelope"></i> Enviar');
                                        $('#alert').removeClass("alert alert-danger").
                                        addClass("alert alert-success").text("Inscrição concluida com sucesso!").fadeIn(750).fadeOut(4000);
                                        $('input').val('');
                                        $('input').removeClass('is-valid');
                                        console.log(data);

                                }
                        })
                        return false;
                }

        });
});