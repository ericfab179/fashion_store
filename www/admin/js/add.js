var Add = (function () {
    "use strict" ;

    var pub = {};

    function addProd() {
        var category = $(addCat).val();
        var name = $(addName).val();
        var description = $(addDesc).val();
        var price = $(addPrice).val();
        var quantity = $(addQuantity).val();
        var image = "images/" + $(imagePath).val();
        $.ajax({
            type: "POST",
            url: './addProduct.php',
            data: {'category' : category, 'name' : name, 'description': description, 'price': price, 'quantity': quantity, 'image' : image},
            success: function (response) {
                setTimeout(location.reload.bind(location), 5000);
            }
        });
        window.location.reload();
    }

    pub.setup = function() {

        $(addFinal).click(addProd);
        
    };

    return pub;

}());

if (window.addEventListener) {
window.addEventListener('load', Add.setup);
} else if (window.attachEvent) {
window.attachEvent('onload', Add.setup);
} else {
alert("Could not attach 'Add.setup' to the 'window.onload' event");
}