DROP TABLE IF EXISTS PRODUCTS;

CREATE TABLE PRODUCTS(
    product_id int(10) NOT NULL AUTO_INCREMENT,
    product_category varchar(50) NOT NULL,
    product_name varchar(50) NOT NULL,
    product_price decimal(5, 2) NOT NULL,
    product_desc varchar(50) NOT NULL,
    product_quantity int(10) NOT NULL,
    PRIMARY KEY(product_id)
);

INSERT INTO PRODUCTS (product_category, product_name, product_price, product_desc, product_quantity) VALUES ('footwear', 'Birkenstocks', 120.00, 'Comfy and stylish', 100);
INSERT INTO PRODUCTS (product_category, product_name, product_price, product_desc, product_quantity) VALUES ('tops', 'hoodie', 90.00, 'Oversized style in white', 100);
INSERT INTO PRODUCTS (product_category, product_name, product_price, product_desc, product_quantity) VALUES ('top', 'crew neck', 85.00, 'Retro nike style', 100);
INSERT INTO PRODUCTS (product_category, product_name, product_price, product_desc, product_quantity) VALUES ('bottoms', 'jeans', 130.00, 'Skinny jeans in black', 100);
INSERT INTO PRODUCTS (product_category, product_name, product_price, product_desc, product_quantity) VALUES ('bottoms', 'sweatpants', 70.00, 'baggy grey sweatpants', 100);