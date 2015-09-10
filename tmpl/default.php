<?php 
/*------------------------------------------------------------------------
# Module assets By Sharojit | http://www.sharojit.com |
# ------------------------------------------------------------------------
# Author    Sharojit by http://www.sharojit.com
# Copyright (C) 2014 - 2024 http://www.sharojit.com All Rights Reserved.
# @license - GNU/GPL V2 for PHP files. CSS / JS are Copyrighted Commercial
# Websites: http://www.sharojit.com
-------------------------------------------------------------------------*/
?>

<!-- title area -->
<div class="jit-title" id="<?php echo $params->get('link') ?>">
	<?php
		if($params->get('img') != null){?>
		<img src="<?php echo $params->get('img') ?>" alt="img">
	<?php } ?>

	<?php
		if($params->get('icon') != null){?>
		<i class="<?php echo $params->get('icon') ?>" style="color:<?php echo $params->get('iconcolor') ?>;"></i>
	<?php } ?>	
	
	<?php
		if($params->get('title') != null){?>
		<h2 style="color:<?php echo $params->get('titlecolor') ?>;"><?php echo $params->get('title') ?></h2>
	<?php } ?>
</div>
<!-- title area -->

<div class="jit-testimonial-wrap">
    
    <!-- Define all of the tiles: -->
	<?php $row=$params->get('box');
		$b=0;
		for ($k=0; $k<=$row; $k++){
		$b++;
	?>
    <div class="testimonial">
		<?php
		if($params->get('image'.$b) != null){?>
			<img src="<?php echo $params->get('image'.$b) ?>" alt="client image"/>
		<?php } ?>		
		<?php
		if($params->get('testimonial'.$b) != null){?>		
        <div class="description" style="border-bottom: 5px solid <?php echo $params->get('bordercolor'.$b) ?>;">
			<p class="comment"><?php echo $params->get('testimonial'.$b) ?></p>
			<p class="client-name"><?php echo $params->get('name'.$b) ?></p>
			<p class="designation"><?php echo $params->get('designation'.$b) ?></p>
		</div>
		<?php } ?>	
    </div>
	<?php } ?>
 </div>
 <!-- /#wrap -->  