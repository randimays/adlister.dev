<?php

$_ENV = include __DIR__ . '/../../env.php';
require_once __DIR__ . '/../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS purchases');

$query = 'CREATE TABLE purchases (
    item_id INT UNSIGNED NOT NULL,
    po_id INT UNSIGNED NOT NULL,
    current_cost DOUBLE PRECISION(6,2) NOT NULL,
    PRIMARY KEY (po_id, item_id),
<<<<<<< HEAD
    FOREIGN KEY (item_id) REFERENCES items (item_id),
    FOREIGN KEY (po_id) REFERENCES purchase_orders (po_id)
=======
    FOREIGN KEY (item_id) REFERENCES items(item_id),
    FOREIGN KEY (po_id) REFERENCES purchase_orders(po_id)
>>>>>>> ce9256e984785650929c2b64666c7c6df9a023af
)';

$dbc->exec($query);
