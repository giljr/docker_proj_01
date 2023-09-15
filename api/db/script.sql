CREATE DATABASE IF NOT EXISTS outfit_db;
USE outfit_db;
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT,
    sales_code INT NOT NULL,
    date date NOT NULL,
    store_id VARCHAR(255),
    product VARCHAR(255),
    qty INT NOT NULL,
    unit_price DECIMAL(10, 2),
    PRIMARY KEY (id)
);
INSERT INTO products VALUE(0, 65014, '2019-01-12', 'Shopping Morumbi', 'Aster Pants', 5, 114);
INSERT INTO products VALUE(0, 65014, '2019-01-12', 'Shopping Morumbi', 'Trench Coat', 1, 269);
INSERT INTO products VALUE(0, 65016, '2019-01/-2', 'Iguatemi Campinas', 'Peter Pan Collar', 2, 363);