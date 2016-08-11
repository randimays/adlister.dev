<?php

session_start();

function pageController() {
	$pageTitle = "FANTASY COSTCO: WHERE ALL YOUR DREAMS COME TRUE";

	return [
		"pageTitle" => $pageTitle
	];
}

?>

<!DOCTYPE html>
<html>
<head>
	<?php require '../views/partials/header.php'; ?>
</head>
<body>
	<?php require '../views/partials/navbar.php'; ?>

	<div class="container">
		<table>
			<thead>
				<tr>
					<th>Heading</th>
					<th>Heading</th>
					<th>Heading</th>
					<th>Heading</th>
					<th>Heading</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Content</td>
					<td>Content</td>
					<td>Content</td>
					<td>Content</td>
					<td>Content</td>
				</tr>				
				<tr>
					<td>Content</td>
					<td>Content</td>
					<td>Content</td>
					<td>Content</td>
					<td>Content</td>
				</tr>				
				<tr>
					<td>Content</td>
					<td>Content</td>
					<td>Content</td>
					<td>Content</td>
					<td>Content</td>
				</tr>				
				<tr>
					<td>Content</td>
					<td>Content</td>
					<td>Content</td>
					<td>Content</td>
					<td>Content</td>
				</tr>				
				<tr>
					<td>Content</td>
					<td>Content</td>
					<td>Content</td>
					<td>Content</td>
					<td>Content</td>
				</tr>
			</tbody>
		</table>
	</div>

	<?php require '../views/partials/common_js.php'; ?>
</body>
</html>