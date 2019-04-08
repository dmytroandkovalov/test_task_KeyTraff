function renderView( controller, viewName, outputElement ) {

    jQuery.ajax({
        url: '/' + controller+ '/' + viewName,
        success: function (data) {
            outputElement.html(data);
        }
    });
}

jQuery(document).ready(function ($) {

    let outputElement = $('#output');

    $('.request-btn').on('click', function () {
        renderView('controller', $(this).data('view'), outputElement);
    });

});