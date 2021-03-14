<?php

/**
 * Template Name: Course Guide Page
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
<main id="content">
    <div class="container">
        <div>
            <h1>Compulsory Courses</h1>
            <?php
                //arguments for identifying the posts we want to grab
                $post_args = array(
                    'post_type'     => 'post',
                    'post_status'   => 'publish', 
                    'posts_per_page'=> 10,
                    'category_name' => 'compulsory-courses',
                    'order'         => 'ASC'
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
                        $args = array('post' => $post); 
                        get_template_part("individual_newsletter", null, $args);
                        ?>
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
            <br><br>
            <h1>Finance Sub Branches</h1>
            <?php
                //arguments for identifying the posts we want to grab
                $post_args = array(
                    'post_type'     => 'post',
                    'post_status'   => 'publish', 
                    'posts_per_page'=> 10,
                    'category_name' => 'finance-sub-branches',
                    'order'         => 'ASC'
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
                        $args = array('post' => $post); 
                        get_template_part("individual_newsletter", null, $args);
                        ?>
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
            <br><br>
            <h1>Funds Management</h1>
            <?php
                //arguments for identifying the posts we want to grab
                $post_args = array(
                    'post_type'     => 'post',
                    'post_status'   => 'publish', 
                    'posts_per_page'=> 10,
                    'category_name' => 'funds-management',
                    'order'         => 'ASC'
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
                        $args = array('post' => $post); 
                        get_template_part("individual_newsletter", null, $args);
                        ?>
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
            <br><br>
            <h1>Banking</h1>
            <?php
                //arguments for identifying the posts we want to grab
                $post_args = array(
                    'post_type'     => 'post',
                    'post_status'   => 'publish', 
                    'posts_per_page'=> 10,
                    'category_name' => 'banking',
                    'order'         => 'ASC'
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
                        $args = array('post' => $post); 
                        get_template_part("individual_newsletter", null, $args);
                        ?>
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
            <br><br>
            <h1>Derivatives</h1>
            <?php
                //arguments for identifying the posts we want to grab
                $post_args = array(
                    'post_type'     => 'post',
                    'post_status'   => 'publish', 
                    'posts_per_page'=> 10,
                    'category_name' => 'derivatives',
                    'order'         => 'ASC'
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
                        $args = array('post' => $post); 
                        get_template_part("individual_newsletter", null, $args);
                        ?>
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
            <br><br>
            <h1>Wealth Management</h1>
            <?php
                //arguments for identifying the posts we want to grab
                $post_args = array(
                    'post_type'     => 'post',
                    'post_status'   => 'publish', 
                    'posts_per_page'=> 10,
                    'category_name' => 'wealth-management',
                    'order'         => 'ASC'
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
                        $args = array('post' => $post); 
                        get_template_part("individual_newsletter", null, $args);
                        ?>
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
            <br><br>
            <h1>Other</h1>
            <?php
                //arguments for identifying the posts we want to grab
                $post_args = array(
                    'post_type'     => 'post',
                    'post_status'   => 'publish', 
                    'posts_per_page'=> 10,
                    'category_name' => 'other',
                    'order'         => 'ASC'
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
                        $args = array('post' => $post); 
                        get_template_part("individual_newsletter", null, $args);
                        ?>
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

