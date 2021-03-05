<?php

/**
 * Template Name: Partnerships Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package busiway
 */

get_header();
get_template_part('index','banner'); ?>
<!-- also we need to check out the different container css, as in there are different css things for the original finsoc stuff and the new one -->
<main id="content">
    <div class="container">
        <?php
            //arguments for identifying the posts we want to grab
            $post_args = array(
                'post_type'     => 'post',
                'post_status'   => 'publish', 
                'posts_per_page'=> 25,
                'category_name' => 'partnerships'
            );

            //grabs the posts with the above arguments
            $posts = new WP_Query($post_args);
            $num_posts = $post->post_count;

            if ($posts -> have_posts()) {
                //insert page changes if needed here if there are posts
                ?>
                <div class="partnerships-div">

                
                    <?php
                    $flag = true;
                    while ($posts -> have_posts()) {
                        $posts -> the_post();
                        global $post;
                        // adds the row div
                        if ($flag == true) {
                            ?>
                            <!-- <div class="partnerships-div-row"> -->
                            <?php
                        }
                        ?>
                            <div class="flip-card rounded-corners single-partnerships-div">
                                <div class="flip-card-inner shadow">
                                    <div class="flip-card-front">
                                        <?php
                                            if ( has_post_thumbnail( $post->ID ) ) {
                                                $image_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'thumbnail' );
                                                ?>
                                                <img class="flip-card-image" src="<?php echo $image_url; ?>" alt="<?php echo the_title(); ?>" style="width: 100%" onload="resize_single_div(this)">
                                                <?php
                                            } else {
                                                echo "doesnt have thumbnail";
                                            }
                                        ?>
                                    </div>
                                    <div class="flip-card-back">
                                        <div class="flip-card-back-title">
                                            <h1><?php echo the_title() ?></h1>
                                        </div>
                                        <div class="flip-card-back-content">
                                            <p><?php echo the_content() ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        <?php
                        if ($flag == false) {
                            $flag = true;
                            ?>
                            <!-- </div> -->
                            <?php
                        } else {
                            $flag = false;
                        }
                        ?>
                    <?php   
                    }
                    ?>
                </div>
                <?php
            } else {
                //insert page changes here if there are no posts
                esc_html_e("There are no posts here.");
            }

            wp_reset_postdata();
        ?>
    </div>
</main>
<?php
get_footer();
?>

