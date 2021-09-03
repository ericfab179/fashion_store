DROP TABLE IF EXISTS products;

CREATE TABLE products(
    product_id int(10) NOT NULL AUTO_INCREMENT,
    product_category varchar(50) NOT NULL,
    product_name varchar(50) NOT NULL,
    product_desc varchar(50) NOT NULL,
    product_price decimal(5, 2) NOT NULL,
    product_quantity int(10) NOT NULL,
    PRIMARY KEY(product_id)
);

INSERT INTO products (product_category, product_name, product_desc, product_price, product_quantity) VALUES ('footwear', 'oxford Shoes', 'For the formal moments', 120.00, 100);
INSERT INTO products (product_category, product_name, product_desc, product_price, product_quantity) VALUES ('footwear', 'flip flops', 'For the less formal moments', 50.00, 100);
INSERT INTO products (product_category, product_name, product_desc, product_price, product_quantity) VALUES ('headwear', 'beanie', 'For the cold moments', 40.00, 100);
INSERT INTO products (product_category, product_name, product_desc, product_price, product_quantity) VALUES ('headwear', 'cap', 'For the sunny moments', 40.00, 100);
INSERT INTO products (product_category, product_name, product_desc, product_price, product_quantity) VALUES ('tops', 'hoodie', 'For the comfy moments', 100.00, 100);
INSERT INTO products (product_category, product_name, product_desc, product_price, product_quantity) VALUES ('tops', 't-shirt', 'For the everyday moments', 90.00, 100);
INSERT INTO products (product_category, product_name, product_desc, product_price, product_quantity) VALUES ('bottoms', 'jeans', 'For the goes with everything moments', 130.00, 100);
INSERT INTO products (product_category, product_name, product_desc, product_price, product_quantity) VALUES ('bottoms', 'sweatpants', 'For the late night-in moments', 75.00, 100);