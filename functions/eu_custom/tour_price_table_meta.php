<div class="my_meta_control">
 
	<?php $mb->the_field('tour_price_table'); ?>
	<div class="customEditor"><textarea name="<?php $mb->the_name(); ?>"><?php echo wp_richedit_pre($mb->get_the_value()); ?></textarea></div>	
 
</div>