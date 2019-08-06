<?php
/**
 * Template Name: Home Page
 */
		 get_header(); ?>

			<div class="heroSect">
        <div class="heroSect-inner">
          <h1 class="">Communicate fluently with confidence</h1>
          <div>
            <p>we bring the proper people along to challenge established thinking and drive transformation.</p>
          </div>
          <a href="/contact"><button class="btn btn-theme margin-bottom-10">Start today</button></a>
        </div>
      </div>


		<?php
		//=========== Get Index service ===========//
		get_template_part('sections/home', 'services');

		//=========== Get Index News ===========//
		get_template_part('sections/home', 'callout');

		//=========== Get Index News ===========//
		get_template_part('sections/home', 'blog');

	//=========== Get Index Clients ==========//
		get_template_part('sections/home', 'callout_two');
		get_template_part('sections/home', 'clients');


get_footer();
?>
