var Cart = (function () {
    "use strict" ;

    var pub = {};

    function add() {
        var cart;
        var item;

        if (JSON.parse(sessionStorage.getItem('cart'))) {
            cart = JSON.parse(sessionStorage.getItem('cart'));
        }
        
        if (!cart) {
            sessionStorage.setItem('cart', "");
            cart = [];
        }

        item = {};
        item.name = $(this).siblings().first().next().next().text();
        item.price = $(this).siblings().first().next().next().next().text();
        
        
        $(finalAdd).click(function() {
            item.quantity = $('#quant option:selected').text();
            cart.push(item);
            sessionStorage.setItem('cart', JSON.stringify(cart));
            window.location.reload();
        });
        

    }

    pub.setup = function() {  

        $(addToCart).click(add);

        /*
        Display the cart popup
        */
        var modal = document.getElementById("addToCartModal");
        var span = document.getElementsByClassName("addToClose")[0];

        $(addToCart).click(function() {
            modal.style.display = "block";
        });

        span.onclick = function() {
            modal.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

    };

    return pub;

}());

if (window.addEventListener) {
window.addEventListener('load', Cart.setup);
} else if (window.attachEvent) {
window.attachEvent('onload', Cart.setup);
} else {
alert("Could not attach 'Cart.setup' to the 'window.onload' event");
}