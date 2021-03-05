<?php

/**
 * Template Name: Weekly Wraps Page
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
        <div>
            <?php
                //arguments for identifying the posts we want to grab
                $post_args = array(
                    'post_type'     => 'post',
                    'post_status'   => 'publish', 
                    'posts_per_page'=> 10,
                    'category_name' => 'weekly-wraps'
                );

                //grabs the posts with the above arguments
                $posts = new WP_Query($post_args);

                if ($posts -> have_posts()) {
                    //insert page changes if needed here if there are posts
                    ?>
                    <ul class="no-bullets">
                    <?php
                    while ($posts -> have_posts()) {
                        $posts -> the_post();
                        global $post;
                        ?>
                        <li>
                            <div class="newsletters-post-div shadow">
                                <div class="newsletters-image-div">
                                    <?php
                                        if ( has_post_thumbnail( $post->ID ) ) {
                                        } else {
                                            echo "doesnt have thumbnail";
                                        }
                                        $image_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'thumbnail' ); 
                                    ?>
                                    <!-- need to clean this up a little and make sure its not dead -->
                                    <img class="pdf-preview" src="<?php echo $image_url; ?>" alt="<?php echo "image preview for post " . the_title(); ?>">
                                </div>
                                <div class="newsletters-content-div">
                                    <div class="newsletters-text-div">
                                        <h3><?php echo the_title()?></h3>
                                        <h6>Released: 
                                            <span class="opacity"><?php echo get_the_date( 'd-m-Y', $post) ?></span>
                                        </h6>
                                        <p><?php echo the_content() ?></p>
                                    </div>
                                    <div class="newsletters-button-div centre">
                                        <?php
                                            $custom_link = get_post_custom_values( "read_more_link", $post->ID );
                                        ?>
                                        <form class="newsletters-button-form" action="<?php echo $custom_link[0]; ?>" target="_blank">
                                            <button type="submit" class="newsletters-button">Read more ></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php   
                    }
                    ?>
                    </ul>
                    <?php
                } else {
                    //insert page changes here if there are no posts
                    esc_html_e("There are no posts here.");
                }

                wp_reset_postdata();
            ?>
        </div>
    </div>
</main>
<?php
get_footer();
?>

