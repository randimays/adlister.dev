<?php

require __DIR__ . '/../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS purchase_orders');

$query = 'CREATE TABLE purchase_orders (
    po_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    qty INT NOT NULL,
    date DATETIME NOT NULL,
    PRIMARY KEY (po_id),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
)';

$dbc->exec($query);

$query = 'ALTER TABLE purchase_orders AUTO_INCREMENT=1001';

$dbc->exec($query);
