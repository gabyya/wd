
<div class="image_wrapper">
    <?php
    	the_post_thumbnail('full', ['class' => 'img-fluid']);
    ?>

    <h2 class="image_description">
        <?php the_field ('featured_text') ?>
    </h2>
</div>


<div class="intro">
    <h2>
    <?php the_field ('title') ?>
    </h2>

    <p>
    <?php the_field ('description') ?>
    </p>
</div>


<div class="images">
    <?php

    // check if the repeater field has rows of data
    if( have_rows('break_image') ):

        // loop through the rows of data
        while ( have_rows('break_image') ) : the_row();
            ?>

            <img src="<?php the_sub_field ('image');?>" alt="">

            
        <?php endwhile; ?>

        <?php else : ?>

        

    <?php endif; ?>
</div>


<div class="about_product">
    <h2>
    <?php the_field ('second_title') ?>
    </h2>

    <img src="<?php the_field ('product_image');?>" alt="">

    <p>
    <?php the_field ('second_description') ?>
    </p>
</div>


<img src="<?php the_field ('second_break_image');?>" alt="">


<div class="team">
    <h2>
    <?php the_field ('third_title') ?>
    </h2>


    <p>
    <?php the_field ('third_description') ?>
    </p>
</div>



<div class="team_members">
    <?php

    // check if the repeater field has rows of data
    if( have_rows('section_grid') ):

        // loop through the rows of data
        while ( have_rows('section_grid') ) : the_row();
            ?>

            <img src="<?php the_sub_field ('grid_image');?>" alt="">

            <h3>
                <?php the_sub_field ('grid_title') ?>
            </h3>

            <p>
                <?php the_sub_field ('grid_description') ?>
            </p>

            
        <?php endwhile; ?>

        <?php else : ?>

        

    <?php endif; ?>
</div>


        <img src="<?php the_field ('third_break_image');?>" alt="">

<div class="contact">

        <h3>
            <?php the_field ('contact') ?>
        </h3>

        <p>
            <?php the_field ('contact_description') ?>
        </p>
</div>


<div class="connect">
        <h3>
            <?php the_field ('connect') ?>
        </h3>

        <p>
            <?php the_field ('connect_description') ?>
        </p>
        
        <p>
            <?php the_field ('location') ?>
        </p>
</div>


<?php the_content();?>