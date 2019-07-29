<?php
	require_once 'autoload.php';

	$genres = DB::getAllGenres();

	$pageTitle = 'Listado de Generos';
	require_once 'partials/head.php';
	require_once 'partials/navbar.php';
?>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<table class="table table-striped">
						<thead class="thead-dark">
			    			<tr>
								<th scope="col">Nombre</th>
								<th scope="col">Ranking</th>
								<th scope="col">Activo</th>
								
			    			</tr>
			  			</thead>
			  			<tbody>
							<?php foreach ($genres as $genre): ?>
								<tr>
									<th scope="row"><?php echo $genre->getName(); ?></th>
									
									<td><?php echo $genre->getRanking(); ?></td>
									<td><?php echo $genre->getActive(); ?></td>
									
								</tr>
							<?php endforeach; ?>
			  			</tbody>
					</table>
				</div>
			</div>
		</div>

	</body>
</html>
