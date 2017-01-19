<?php
if ( is_singular() ) :
	?>
	<header class="entry-header singular">
		<?php
		the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			?>
			<header class="entry-header">
				<?php
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			?>
			<div class="entry-meta">
				<?php
				prakmed_entry_meta();
				prakmed_posted_by()
				?>
			</div>
		</header>
