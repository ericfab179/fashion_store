var Login = (function () {
    "use strict" ;

    var pub = {};

    pub.setup = function() {  




        /*
        Display the login popup
        */
        var modal = document.getElementById("loginModal");
        modal.style.display = "block";
        $("header").hide();
        $("main").hide();

    };

    return pub;

}());

if (window.addEventListener) {
window.addEventListener('load', Login.setup);
} else if (window.attachEvent) {
window.attachEvent('onload', Login.setup);
} else {
alert("Could not attach 'Login.setup' to the 'window.onload' event");
}