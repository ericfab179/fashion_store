var Delete = (function () {
    "use strict" ;

    var pub = {};

    var product;

    function deleteProd(name) {
        $.ajax({
            url: './deleteProduct.php',
            type: 'POST',
            data: {'name' : name},
            success: function(response) {
                setTimeout(location.reload.bind(location), 5000);
            }
        });
        window.location.reload();
    }

    pub.setup = function() {

        $(deleteItem).click(function() {
            product = $(this).parent().parent().attr('id');
        });

        $(finalDelete).click(function() {
            deleteProd(product);
        });
        
    };

    return pub;

}());

if (window.addEventListener) {
window.addEventListener('load', Delete.setup);
} else if (window.attachEvent) {
window.attachEvent('onload', Delete.setup);
} else {
alert("Could not attach 'Delete.setup' to the 'window.onload' event");
}