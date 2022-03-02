<section id="metodo-cards" class="container">
	<div class="row">
		
		<?php if( have_rows('metodo_card_1') ): 
			while( have_rows('metodo_card_1') ): the_row(); ?>					
				<div class="col-xs-12 col-md-4">
					<div class="metodo_card_icon step-one"></div>
					<h2><?php the_sub_field('metodo_card_title_1'); ?></h2>
					<?php the_sub_field('metodo_descripcion_card_1'); ?>
				</div>	
			<?php endwhile; ?>
		<?php endif; ?>

		<?php if( have_rows('metodo_card_2') ): 
			while( have_rows('metodo_card_2') ): the_row(); ?>
				<div class="col-xs-12 col-md-4 mt-4">
					<div class="metodo_card_icon step-two"></div>
					<h2><?php the_sub_field('metodo_card_title_2'); ?></h2>
					<?php the_sub_field('metodo_descripcion_card_2'); ?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>

		<?php if( have_rows('metodo_card_3') ): 
			while( have_rows('metodo_card_3') ): the_row(); ?>
				<div class="col-xs-12 col-md-4 mt-8">
					<div class="metodo_card_icon step-three"></div>
					<h2><?php the_sub_field('metodo_card_title_3'); ?></h2>
					<?php the_sub_field('metodo_descripcion_card_3'); ?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	
	</div>
</section>