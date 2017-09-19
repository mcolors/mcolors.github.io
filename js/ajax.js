
const DELAY = 500;
function ajax() { //Ajax отправка формы
    var msg = $("#outsource-application").serialize();
    $.ajax({
        type: "POST",
        url: "action_ajax_form.php",
        data: msg,
        success: function(data) {
            $(".formsteps__inputs, .formsteps__title").fadeOut(100);
            $("#results").fadeIn(DELAY);
        },
        error:  function(xhr, str){
            alert("Возникла ошибка!");
        }
    });
}
