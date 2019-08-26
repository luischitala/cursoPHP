<?php $numero_paginas = numero_paginas($blog_config['post_por_pagina'], $conexion); ?>

<section class="paginacion">
	<ul>
		<?php if (pagina_actual() === 1): ?>
			<li class="disabled">&laquo;</li>
		<?php else: ?>
			<li><a href="index.php?p=<?php echo pagina_actual() - 1 ?>">&laquo;</a></li>
		<?php endif; ?>
		<?php for($i = 1; $i <= $numero_paginas; $i++): ?>
			<?php if(pagina_actual() === $i ): ?>
				<li class="active">
					<?php echo $i; ?>
				</li>
			<?php else: ?>
			<li><a href="index.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
			<?php endif; ?>
		<?php endfor; ?>

		<!-- <li class=""><a href="#">1</a></li>
		<li class=""><a href="#">2</a></li>
		<li class=""><a href="#">3</a></li>
		<li class=""><a href="#">&raquo;</a></li> -->
	</ul>
</section>