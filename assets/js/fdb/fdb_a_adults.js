$(document).ready(function () {

    $('#fdbIndividual').click(function () {
        $('#modalIndividual').fadeIn(300);
    });
    $('#modalIndividual').on('click', function (e) {
        if (e.target.id == 'modalIndividual') {
            $(this).hide();
        }
    });
    $('#fdbGroup').click(function () {
        $('#modalGroup').fadeIn(300);
    });
    $('#modalGroup').on('click', function (e) {
        if (e.target.id == 'modalGroup') {
            $(this).hide();
        }
    });

});
