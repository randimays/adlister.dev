<?php
require_once __DIR__ . '/../../database/seeds/items_seeder.php';
$allItems=$dbc->query('SELECT * FROM items')->fetchAll(PDO::FETCH_ASSOC);
$body='<table>';
foreach($allItems as $key=>$value){
	$body.='<tr>
		<td><img src="' . $value['img_path'] .'"></td>
		<td>' . $value['item_name'] .'</td>
		<td>' . $value['item_price'] . '</td>
		<td>' . $value['short_description'] . '</td>
	</tr>';
}
$body.='</table>';
echo $body;