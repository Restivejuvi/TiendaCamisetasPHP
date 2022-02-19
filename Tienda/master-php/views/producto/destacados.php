<h1>Algunos de nuestros productos</h1>

<?php while ($product = $productos->fetch_object()) : ?>
	<div class="product">
		<a href="<?= base_url ?>producto/ver&id=<?= $product->id ?>">
			<?php if ($product->imagen != null) : ?>
				<img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" />
			<?php else : ?>
				<img src="<?= base_url ?>assets/img/camiseta.png" />
			<?php endif; ?>
			<h2><?= $product->nombre ?></h2>
		</a>
		<?php if ($product->stock > 0) : ?>
			<?php if ($product->oferta == "si") : ?>
				<!--Enseñamos la oferta en destacados-->
				<p><span style="text-decoration: line-through;"><?= ($product->precio) * 1.8 ?> € </span> &nbsp;&nbsp; <?= $product->precio ?> €
					<a href="<?= base_url ?>carrito/add&id=<?= $product->id ?>" class="button">Oferton!!!</a>
				<?php else : ?>
				<p><?= $product->precio ?> € <a href="<?= base_url ?>carrito/add&id=<?= $product->id ?>" class="button">Comprar</a></p>
			<?php endif ?>
		<?php else : ?>
			<!--Cambiamos el boton en destacados cuando no hay stock-->
			<p><?= $product->precio ?> € <a href="" class="button-red">Sin Stock</a></p>
		<?php endif ?>
	</div>
<?php endwhile; ?>