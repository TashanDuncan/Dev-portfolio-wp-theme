<?php
get_header()
?>

<section class="cta-section theme-bg-light py-5">
		    <div class="container text-center">
			    <h2 class="heading">A Blog About Software Development And Life</h2>
			    <div class="intro">Welcome to my blog.</div>
		    </div><!--//container-->
	    </section>

        <?php get_template_part('template-parts/content', 'blogarchive')?>


<?php
get_footer()
?>