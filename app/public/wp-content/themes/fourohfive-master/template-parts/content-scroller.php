
<div class="image_wrapper">
    <?php
    	the_post_thumbnail('full', ['class' => 'img-fluid']);
    ?>

    <div class="flex">
        <h2 class="image_description">
            <?php the_field ('featured_text') ?>
        </h2>
    </div>

</div>


<div class="intro">
    <h2>
    <?php the_field ('title') ?>
    </h2>

    <p>
    <?php the_field ('description') ?>
    </p>
</div>


<div class="flex">
   <img class="img-fluid" src="<?php the_field ('break_image');?>" alt="">
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


<img class="img-fluid" src="<?php the_field ('second_break_image');?>" alt="">


<div class="team">
    <h2>
    <?php the_field ('third_title') ?>
    </h2>


    <p>
    <?php the_field ('third_description') ?>
    </p>
</div>



<div class="flex-md">
    <?php

    // check if the repeater field has rows of data
    if( have_rows('section_grid') ):

        // loop through the rows of data
        while ( have_rows('section_grid') ) : the_row();
            ?>

            <div class="deets text-center">
                <img class= "person img-fluid" src="<?php the_sub_field ('grid_image');?>" alt="">

                    <div class="py">
                        <h3 class= "person_description">
                            <?php the_sub_field ('grid_title') ?>
                        </h3>

                        <p class="person_image">
                            <?php the_sub_field ('grid_description') ?>
                        </p>
                    </div>

            </div>

            
        <?php endwhile; ?>

        <?php else : ?>

        

    <?php endif; ?>
</div>


        <img class="img-fluid" src="<?php the_field ('third_break_image');?>" alt="">



<div class="container">

        
            <h3>
                <?php the_field ('contact') ?>
            </h3>

            <p>
                <?php the_field ('contact_description') ?>
            </p>
        
            <div class="grid-two-thirds">
                <div class="content">
                    <?php the_content();?>
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
            </div>


</div>



