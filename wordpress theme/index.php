<?php get_header(); ?>

				<div id="container">
				<section>
					<header>
						<h1>Sample title header</h1>
					</header>
					<p>Jangczuanozaur – rodzaj dinozaura z rodziny sinraptorów, umieszczanej w nadrodzinie allozauroidów. Wyróżnia się 2 lub 3 gatunki, mierzące 8 i 7 m długości, przez pewien czas w rodzaju tym umieszczano jeszcze gatunek zaliczany obecnie do pokrewnego sinraptora. Zwierzę miało potężną czaszkę o dwóch parach okien przedoczodołowych, liczne zęby. Miednica cechowała się między innymi dużym otworem zasłonionym. Kość piszczelowa nieznacznie tylko ustępowała rozmiarami kości udowej. Kończyny przednie były znacznie mniejsze od tylnych. Dinozaur żył w jurze późnej na terenie dzisiejszej chińskiej prowincji Syczuan, od powiatu której bierze on swą nazwę rodzajową. Wchodzi w skład tzw. zespołu fauny mamenchizaura. Wymieniony rodzaj zauropoda mógł stanowić jego pożywienie.</p>
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						<header class="article-header">
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
							<p class="byline vcard"><?php _e('Posted', 'bonestheme'); ?> <time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(get_option('date_format')); ?></time> <?php _e('by', 'bonestheme'); ?> <span class="author"><?php the_author_posts_link(); ?></span> <span class="amp">&</span> <?php _e('filed under', 'bonestheme'); ?> <?php the_category(', '); ?>.</p>
						</header>
						
							<?php the_content(); ?>

						<footer class="article-footer">

							<p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>

					    </footer> <!-- end article footer -->

					     <?php // comments_template(); // uncomment if you want to use them ?>
					
					    </article> <!-- end article -->
					
					    <?php endwhile; ?>	
					
					        <?php if (function_exists('bones_page_navi')) { ?>
					            <?php bones_page_navi(); ?>
					        <?php } else { ?>
					            <nav class="wp-prev-next">
					                <ul class="clearfix">
					        	        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
					        	        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
					                </ul>
					            </nav>
					        <?php } ?>		
					
					    <?php else : ?>
					    
					        <article id="post-not-found" class="hentry clearfix">
					            <header class="article-header">
					        	    <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
					        	</header>
					            <section class="entry-content">
					        	    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
					        	</section>
					        	<footer class="article-footer">
					        	    <p><?php _e("This is the error message in the index.php template.", "bonestheme"); ?></p>
					        	</footer>
					        </article>
					
					    <?php endif; ?>
				</section>
			</div>
			 <? //php get_sidebar(); ?>
		</div>
		<div id="wrap_footer"></div>
	</div>
	<?php get_footer(); ?>