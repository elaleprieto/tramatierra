<!-- ------------------------------------------------------------------------------------------------------
			Definición del Banner como background-image del id bannerTop
------------------------------------------------------------------------------------------------------- -->
<?php if($this->fetch('banner')): ?>
	<style>
		#bannerTop {
			background-image: url("<?php echo $this -> Html -> url('/img/', true) . h($this -> fetch('banner')); ?>.jpg");
		}
	</style>
<?php endif; ?>
<div id="bannerTop"></div>