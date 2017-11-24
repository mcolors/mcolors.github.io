$(document).ready(function() {
    $(document).ready(function(){
        $('a.item[href^="#"]').click(function(){
            if(document.getElementById($(this).attr('href').substr(1)) != null) {
                $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top - 200}, 800);
            }
            return false;
        });
    });

    $('button.open-price').click(function() {
        $('.table').animate({
            height:'toggle'
        }, 350)
    });

    $("[name='phone']").mask('+7 (999) 999 99 99');

    $(function(){
        $('#call_back_form').submit(function(e){
            e.preventDefault();
            var m_method=$(this).attr('method');
            var m_action=$(this).attr('action');
            var m_data=$(this).serialize();
            $.ajax({
                type: m_method,
                url: m_action,
                data: m_data,
                beforeSend: function(){
                    $('.modal-zakaz-form button').html('Отправляю...');
                },
                success: function(result){
                    $('.modal-zakaz-form').hide();
                    $('#result').html('<h2>Ваш заказ принят!</h2><br /><h4 style="margin: -15px 0 30px 0;">Мы свяжемся с Вами в ближайшее время.</h4>');
                },
                error: function(){
                    alert('Ошибка!');
                }
            });
        });
    });
});
