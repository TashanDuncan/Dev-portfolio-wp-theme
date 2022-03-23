<?php
get_header()
?>

<section class="cta-section theme-bg-light py-5">
		    <div class="container text-center">
			    <h2 class="heading">Search Results for "<?php echo get_search_query();?>"</h2>
                <?php get_search_form();?>
		    </div><!--//container-->
	    </section>

        <?php get_template_part('template-parts/content', 'blogarchive')?>


<?php
get_footer()
?>