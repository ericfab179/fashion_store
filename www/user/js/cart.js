var Cart = (function () {
    "use strict" ;

    var pub = {};

    function add() {
        var cart;
        var item;

        cart = JSON.parse(sessionStorage.getItem('cart'));

        if (!cart) {
            sessionStorage.setItem('cart', "");
            cart = [];
        }

        item = {};
        item.name = $(this).siblings().first().next().next().text();
        item.price = $(this).siblings().first().next().next().next().text();
        item.quantity = $(this).siblings().first().next().next().next().next().next().text();
        
        cart.push(item);
        sessionStorage.setItem('cart', JSON.stringify(cart));
        window.location.reload();

    }

    pub.setup = function() {  

        $(addToCart).click(add);

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