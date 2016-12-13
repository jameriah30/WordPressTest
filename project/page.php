<?php get_header(); ?>

    <div id="site_content">

        <!--		<div class="slideshow">-->
        <!--			<ul class="slideshow">-->
        <!--				<li class="show"><img width="900" height="350" src="" alt="&quot;&quot;" /></li>-->
        <!--				<li><img width="900" height="350" src="" alt="&quot;&quot;" /></li>-->
        <!--				<li><img width="900" height="350" src="" alt="&quot;&quot;" /></li>-->
        <!--				<li><img width="900" height="350" src="" alt="&quot;&quot;" /></li>-->
        <!--			</ul>-->
        <!--		</div><!--close slideshow-->


        <div id="content">
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
                <div class="entry">
                    <h2><a href="<?php the_permalink();?>"><?php the_title();?>
                        </a></h2>
                    <div class="entry_body">
                        <?php the_content();?>
                    </div>
                </div>
            <?php endwhile; else:?>
                <p><?php('Sorry, no posts matched your criteria');?></p>
            <?php endif;?>
            <h1></h1>

        </div><!--content-->


        <div class="container">

        </div><!--close container-->

    </div><!--close site_content-->


<?php get_footer();?>