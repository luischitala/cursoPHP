<?php require 'views/header.php'; ?>
	
	<div class="contenedor">
		<div class="post">
			<article>	
				<h2 class="titulo"><?php echo $post['titulo']; ?></h2>
				<p class="fecha"><?php echo fecha($post['fecha']); ?></p>
				<div class="thumb">
						<img src="<?php echo RUTA; ?>/imagenes/<?php echo $post['thumb']; ?>" height="170px;">
				</div>
					<p class="extracto"><?php echo $post['texto']; ?></p>

			</article>
		</div>
	</div>
	<?php require 'views/footer.php'; ?>
</body>
</html>