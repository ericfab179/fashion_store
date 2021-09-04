var Popup = (function () {
    "use strict" ;

    var pub = {};

    pub.setup = function() {  

        // var cart = sessionStorage.getItem("cart");
        // if (cart) {
        //     cart = JSON.parse(cart);
        //     $(tableContent).append(generateCart);
        // }

        /*
        Display the cart popup
        */
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("myBtn");
        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
            modal.style.display = "block";
        }
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
window.addEventListener('load', Popup.setup);
} else if (window.attachEvent) {
window.attachEvent('onload', Popup.setup);
} else {
alert("Could not attach 'Popup.setup' to the 'window.onload' event");
}