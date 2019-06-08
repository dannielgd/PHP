$(function() {
    var atual = -1;
    var maximo = $('.box-especialidade').length - 1;
    var timer;
    var anoimacaoDelay = 3;

    executarAnimacao();
    function executarAnimacao() {
        $('.box-especialidade').hide();

        timer = setInterval(logicaAnimacao, anoimacaoDelay*1000);
        function logicaAnimacao() {
            atual++;
            if(atual > maximo) {
                clearInterval(timer);
                return false;
            }
            $('.box-especialidade').eq(atual).fadeIn();
        }
    }

})