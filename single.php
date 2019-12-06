<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<main>
	<section class="case">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		<h2>Het resultaat</h2>
		<div class="resultaat">
			<a href="<?php the_field('bijlage');?>" target="_blank"><p><?php the_field('bijlage_naam');?></p></a>
			<a href="http://<?php the_field('link');?>" target="_blank"><?php the_field('link_naam');?></a>
		</div>
		<div class="slider-container">
			<div class="resultaten-slider">
				<?php 
					if(have_rows('resultaat_afbeeldingen')):
						while (have_rows('resultaat_afbeeldingen')):the_row();?>
							<div>
								<?php $slideimage = get_sub_field('afbeelding');
								if(!empty($slideimage)): ?>
									<img src="<?php echo $slideimage['url']; ?>" alt='<?php echo $slideimage["title"]; ?>'/>
								<?php endif; ?>
							</div>
						<?php endwhile;
						else:
					endif;
				?>
			</div>
		</div>
		<div class="navigation">
			<p class="prev-post"><?php previous_post_link('%link', "<i class='fa fa-chevron-left'></i> %title" ); ?></p> 
			<p class="next-post"><?php next_post_link('%link', "%title <i class='fa fa-chevron-right'></i>" ); ?></p>
		</div>
	</section>
	
</main>
 
<?php endwhile; ?>
<?php endif; ?> 

<?php get_footer(); ?>