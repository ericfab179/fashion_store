var Admin = (function () {
    "use strict" ;

    var pub = {};

    pub.setup = function() {

        $(pname).hide();
        $(price).hide();

        $(noDelete).click(function() {
            var modal = document.getElementById("deleteProduct");
            modal.style.display = "none";
        });

        $(addItem).click(function() {
            /*
            Display the add product popup
            */
            var modal = document.getElementById("addProduct");
            var span = document.getElementsByClassName("close")[1];

            modal.style.display = "block";

            span.onclick = function() {
                modal.style.display = "none";
            }
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        });

        $(deleteItem).click(function() {
            /*
            Display the delete product popup
            */
            var modal = document.getElementById("deleteProduct");
            var span = document.getElementsByClassName("close")[0];

            modal.style.display = "block";
            
            span.onclick = function() {
                modal.style.display = "none";
            }
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        });
        
    };

    return pub;

}());

if (window.addEventListener) {
window.addEventListener('load', Admin.setup);
} else if (window.attachEvent) {
window.attachEvent('onload', Admin.setup);
} else {
alert("Could not attach 'Admin.setup' to the 'window.onload' event");
}