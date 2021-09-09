var Add = (function () {
    "use strict" ;

    var pub = {};

    function checkEmpty(text) {
        return (text.trim().length === 0);
    }

    function checkCategory(category, errorMessage) {
        if (checkEmpty(category)) {
            errorMessage.push("You must give a category to a new product");
        }
        if (!((category === "tops") || (category === "bottoms") || (category === "footwear") || (category === "headwear"))) {
            errorMessage.push("New product must have an approved category (tops, bottoms, footwear, or headwear)");
        }
    }

    function checkName(name, errorMessage) {
        if (checkEmpty(name)) {
            errorMessage.push("You must give a name to a new product");
        }
        if (name.length > 15) {
            errorMessage.push("New product name must be less than 15 characters");
        }
    }

    function checkDescription(description, errorMessage) {
        if (checkEmpty(description)) {
            errorMessage.push("You must give a description to a new product");
        }
        if (description.length > 50) {
            errorMessage.push("New product description must be less than 50 characters");
        }
    }

    function checkPrice(price, errorMessage) {
        if (checkEmpty(price)) {
            errorMessage.push("You must give a price to a new product");
        }
        if ((Number.isInteger(price))) {
            errorMessage.push("New product price must be a whole number");
        }
    }

    function checkQuantity(quantity, errorMessage) {
        if (checkEmpty(quantity)) {
            errorMessage.push("You must give a quantity to a new product");
        }
        if ((Number.isInteger(quantity))) {
            errorMessage.push("New product quantity must be a whole number");
        }
    }

    function checkImage(image, errorMessage) {
        if (checkEmpty(image)) {
            errorMessage.push("You must give a image name to a new product");
        }
        if (!(image.includes("."))) {
            errorMessage.push("image name must include extension");
        }
    }

    function validateForm() {
        var category = $(addCat).val();
        var name = $(addName).val();
        var description = $(addDesc).val();
        var price = $(addPrice).val();
        var quantity = $(addQuantity).val();
        var image = "images/" + $(imagePath).val();

        var errorMessage = [];
        var errorHTML;

        checkCategory(category, errorMessage);
        checkName(name, errorMessage);
        checkDescription(description, errorMessage);
        checkPrice(price, errorMessage);
        checkQuantity(quantity, errorMessage);
        checkImage(image, errorMessage);

        if (errorMessage.length === 0) {
            return true;
        } else {
            errorHTML = "<p>fix these errors:</p>";
            errorMessage.forEach(function (message) {
                errorHTML += "<p>" + message + "</p>";
            });
            $(errors).html(errorHTML);
            return false;
        }
    }

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

        $(addFinal).click(function() {
            if (validateForm()) {
                addProd();
            }
        });
        
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