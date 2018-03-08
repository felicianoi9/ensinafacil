<div class="home_banner" style="background-image:url('<?php echo BASE_URL."assets/images/".$this->config['home_banner'];?>')">
	
</div>
<div class="homer_banner_txt"><?php echo $this->config['home_welcome'];?></div>

<div class="home_depo">
	<h3>Depoimentos de clientes satisfeitos</h3>
	<?php foreach($depoimentos as $depitem): ?>
		<div class="moldura">
			<strong><?php echo utf8_encode($depitem['nome']); ?></strong><br/>
			<?php echo utf8_encode($depitem['texto']); ?>
		</div>
		
		<br/>
	<?php endforeach; ?>

</div>


<div class="home_cta">
	Confira nossos serviços!<br/>
	<a href="<?php echo BASE_URL;?>servicos"><div>Click Aqui!</div></a>


</div>



