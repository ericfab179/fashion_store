var Popup = (function () {
    "use strict" ;

    var pub = {};

    function updateTotal() {
        var quantity = $(this).children("option:selected").val();
        var price = $(this).parent().parent().siblings().first().next().text();
        var total = quantity * price;
        $(this).parent().parent().siblings().last().empty();
        $(this).parent().parent().siblings().last().text(total.toFixed(2));
    }

    function quantitySelect(total) {
        let option = "";
        for(var i = 1; i <= total; i+=1){
           option += "<option value=\"" + i + "\">" + i + "</option>";
        }
        return option;
    }

    function generateCart(cart) {
        var cartTable = "";
        for (var i = 0; i < cart.length; i++) {
            var select = quantitySelect(cart[i].quantity);
            cartTable += "<tr id='" + i + "'><td>" + cart[i].name + "</td><td>" + cart[i].price + "</td><td><div class='select'><select class='quantSelect'>" + select + "</select></div></td><td class='totalValue'>" + cart[i].price + "</td></tr>";
        }
        return cartTable;
    }

    pub.setup = function() {  

        var cart = sessionStorage.getItem("cart");
        if (cart) {
            cart = JSON.parse(cart);
            $(tableContent).append(generateCart(cart));
            $(".quantSelect").change(updateTotal);
        }

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