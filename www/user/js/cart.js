var Cart = (function () {
    "use strict" ;

    var pub = {};

    pub.setup = function() {

        $(body).append("<p>test</p>");

    };

    return pub;

}());

if (window.addEventListener) {
window.addEventListener('load', Cart.setup);
} else if (window.attachEvent) {
window.attachEvent('onload', Cart.setup);
} else {
alert("Could not attach 'Images.setup' to the 'window.onload' event");
}