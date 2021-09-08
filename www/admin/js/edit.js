var Edit = (function () {
    "use strict" ;

    var pub = {};

    pub.setup = function() {

        $(editItem).click(function() {
            alert("yoo");
        });
        
    };

    return pub;

}());

if (window.addEventListener) {
window.addEventListener('load', Edit.setup);
} else if (window.attachEvent) {
window.attachEvent('onload', Edit.setup);
} else {
alert("Could not attach 'Edit.setup' to the 'window.onload' event");
}