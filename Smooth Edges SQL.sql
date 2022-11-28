DROP SCHEMA IF EXISTS smoothedges;
CREATE SCHEMA smoothedges;
USE smoothedges;

CREATE TABLE customer (
	cust_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	first_name VARCHAR(50) NOT NULL,
	last_name VARCHAR(50) NOT NULL,
	primary_address INT,
	primary_phone INT,
	primary_email INT,
	primary_payment INT
    );
    
CREATE TABLE phone (
phone_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
cust_id INT NOT NULL,
country_code INT NOT NULL,
phone_number INT NOT NULL,
primary_phone BOOLEAN NOT NULL DEFAULT FALSE,
FOREIGN KEY(cust_id) REFERENCES customer(cust_id) ON DELETE CASCADE
);

ALTER TABLE customer
ADD FOREIGN KEY(primary_phone)
REFERENCES phone(phone_id)
ON DELETE CASCADE;


CREATE TABLE email (
email_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
cust_id INT NOT NULL,
email VARCHAR(254) NOT NULL,
email_type VARCHAR(10) NOT NULL,
primary_email BOOLEAN NOT NULL DEFAULT FALSE,
FOREIGN KEY(cust_id) REFERENCES customer(cust_id) ON DELETE CASCADE
);

ALTER TABLE customer
ADD FOREIGN KEY(primary_email)
REFERENCES email(email_id)
ON DELETE CASCADE;


CREATE TABLE payment (
payment_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
cust_id INT NOT NULL,
cc_number VARCHAR(16) NOT NULL,
cc_type VARCHAR(20) NOT NULL,
cc_exp_month INT NOT NULL,
cc_exp_year INT NOT NULL,
cc_sec_code INT NOT NULL,
primary_payment BOOLEAN NOT NULL DEFAULT FALSE,
FOREIGN KEY(cust_id) REFERENCES customer(cust_id) ON DELETE CASCADE
);

ALTER TABLE customer
ADD FOREIGN KEY(primary_payment)
REFERENCES payment(payment_id)
ON DELETE CASCADE;


CREATE TABLE address (
address_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
cust_id INT NOT NULL,
address VARCHAR(95) NOT NULL,
apt_suite VARCHAR(10),
city VARCHAR(35) NOT NULL,
country VARCHAR(74) NOT NULL,
primary_address BOOLEAN NOT NULL DEFAULT FALSE,
FOREIGN KEY(cust_id) REFERENCES customer(cust_id) ON DELETE CASCADE
);

ALTER TABLE customer
ADD FOREIGN KEY(primary_address)
REFERENCES address(address_id)
ON DELETE CASCADE;


CREATE TABLE order_details (
order_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
cust_id INT NOT NULL,
cart_id INT,
payment_id INT NOT NULL,
payment_date DATE,
order_date DATE NOT NULL,
ship_date DATE,
fullfillment_date DATE,
cancellation_date DATE,
return_date DATE,
FOREIGN KEY(cust_id) REFERENCES customer(cust_id) ON DELETE CASCADE,
FOREIGN KEY(payment_id) REFERENCES payment(payment_id) ON DELETE CASCADE
);

CREATE TABLE cart (
cart_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
order_id INT NOT NULL,
product_id INT,
quantity INT NOT NULL,
discount INT,
FOREIGN KEY(order_id) REFERENCES order_details(order_id) ON DELETE CASCADE
);

ALTER TABLE order_details
ADD FOREIGN KEY(cart_id)
REFERENCES cart(cart_id)
ON DELETE CASCADE;


CREATE TABLE product_catalogue (
product_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
product_name VARCHAR(50) NOT NULL,
product_desc TEXT,
category_id INT,
inventory_id INT,
price_per_unit INT,
weight_per_unit INT
);

ALTER TABLE cart
ADD FOREIGN KEY(product_id)
REFERENCES product_catalogue(product_id)
ON DELETE CASCADE;

CREATE TABLE product_category (
category_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
category_name VARCHAR(50) NOT NULL,
category_desc TEXT
);

ALTER TABLE product_catalogue
ADD FOREIGN KEY(category_id)
REFERENCES product_category(category_id)
ON DELETE CASCADE;

CREATE TABLE product_inventory (
inventory_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
quantity VARCHAR(50) NOT NULL,
created_at TIMESTAMP,
modified_at TIMESTAMP,
deleted_at TIMESTAMP
);

ALTER TABLE product_catalogue
ADD FOREIGN KEY(inventory_id)
REFERENCES product_inventory(inventory_id)
ON DELETE CASCADE;
