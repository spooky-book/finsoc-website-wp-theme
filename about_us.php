<?php

/**
 * Template Name: About Us Page
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
    <div class="container text-centre">
        <h2>Executives</h2>
        <br>
        <div class="two-wide-row-container">
            <div class="about-us-row">
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-3-of-29-scaled-e1611453797627.jpg",
                        "person_name"       => "Merrynal Anthony", 
                        "person_position"   => "Co-President", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <div class="invisible-row-div"></div>
                <div class="single-person-div">
                    <div class="image-container-div">
                        <img class="circular-image" src="https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-4-of-29-scaled-e1611454331311.jpg" alt="brhrbrhhr">
                    </div>
                    <div class="circular-image-link">
                        BRESFSLDJFLSD
                    </div>
                    <div class="person-name">
                        BELBELEE NAME
                    </div>
                    <div class="person-designation">
                        Postition testing line
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="three-wide-row-container">
            <div class="about-us-row">
                <div class="image-container-div">
                    <img class="circular-image" src="https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-3-of-29-scaled-e1611453797627.jpg" alt="merynal bruh">
                    BELBELEE NAME new line
                    positiontesting
                </div>
                <div class="invisible-row-div">
                    bruh
                </div>
                <div class="image-container-div">
                    brub
                </div>
                <div class="invisible-row-div">
                    bruh
                </div>
                <div class="image-container-div">
                    brub
                </div>
            </div>
        </div>
        <br>
        <div class="two-wide-row-container">
            <div class="about-us-row">
                <div class="image-container-div">
                    hello
                </div>
                <div class="invisible-row-div">
                    bruh
                </div>
                <div class="image-container-div">
                    brub
                </div>
            </div>
        </div>
        <br>
        <br>
        <h2>Activities</h2>
        
        <h2>Externals</h2>
        
        <h2>Operations</h2>
        
    </div>
</main>

<?php
get_footer();
?>

