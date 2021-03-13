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
        <h1>Executives</h1>
        <br>
        <div class="two-wide-row-container">
            <div class="about-us-row">
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-3-of-29-scaled-e1611453797627.jpg",
                        "person_name"       => "Merrynal Anthony", 
                        "person_position"   => "Co-President", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "test 1 if updates",
                        "drives"            => "test 2",
                        "hobbies"           => "test 3",
                        "future"            => "test 4 lest test a real long sentence and see what comes of it it might just be an acutal meme lets see tho"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-4-of-29-scaled-e1611454331311.jpg",
                        "person_name"       => "Emily Weng", 
                        "person_position"   => "Co-President", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/emily-weng/",
                        "DegreeYear"        => "test 1",
                        "drives"            => "test 2",
                        "hobbies"           => "test 3",
                        "future"            => "test 4 lest test a real long sentence and see what comes of it it might just be an acutal meme lets see tho"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
            </div>
        </div>
        <br>
        <div class="three-wide-row-container">
            <div class="about-us-row">
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-20-of-29-scaled-e1611456453833.jpg",
                        "person_name"       => "Ming Qin", 
                        "person_position"   => "Vice President (Activities)", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/ming-qin/",
                        "DegreeYear"        => "test 1",
                        "drives"            => "test 2",
                        "hobbies"           => "test 3",
                        "future"            => "test 4 lest test a real long sentence and see what comes of it it might just be an acutal meme lets see tho"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-19-of-29-scaled-e1611455637963.jpg",
                        "person_name"       => "Siqi Yang", 
                        "person_position"   => "Vice President (Externals)", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/siqi-yang-656ab0133/",
                        "DegreeYear"        => "test 1",
                        "drives"            => "test 2",
                        "hobbies"           => "test 3",
                        "future"            => "test 4 lest test a real long sentence and see what comes of it it might just be an acutal meme lets see tho"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-3-of-29-scaled-e1611453797627.jpg",
                        "person_name"       => "Merrynal Anthony", 
                        "person_position"   => "Co-President", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "test 1",
                        "drives"            => "test 2",
                        "hobbies"           => "test 3",
                        "future"            => "test 4 lest test a real long sentence and see what comes of it it might just be an acutal meme lets see tho"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
            </div>
        </div>
        <br>
        <div class="two-wide-row-container">
            <div class="about-us-row">
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-3-of-29-scaled-e1611453797627.jpg",
                        "person_name"       => "Merrynal Anthony", 
                        "person_position"   => "Co-President", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "test 1",
                        "drives"            => "test 2",
                        "hobbies"           => "test 3",
                        "future"            => "test 4 lest test a real long sentence and see what comes of it it might just be an acutal meme lets see tho"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-3-of-29-scaled-e1611453797627.jpg",
                        "person_name"       => "Merrynal Anthony", 
                        "person_position"   => "Co-President", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "test 1",
                        "drives"            => "test 2",
                        "hobbies"           => "test 3",
                        "future"            => "test 4 lest test a real long sentence and see what comes of it it might just be an acutal meme lets see tho"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1>Activities</h1>
        <div class="two-wide-row-container">
            <div class="about-us-row">
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-3-of-29-scaled-e1611453797627.jpg",
                        "person_name"       => "Merrynal Anthony", 
                        "person_position"   => "Co-President", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "test 1",
                        "drives"            => "test 2",
                        "hobbies"           => "test 3",
                        "future"            => "test 4 lest test a real long sentence and see what comes of it it might just be an acutal meme lets see tho"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-3-of-29-scaled-e1611453797627.jpg",
                        "person_name"       => "Merrynal Anthony", 
                        "person_position"   => "Co-President", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "test 1",
                        "drives"            => "test 2",
                        "hobbies"           => "test 3",
                        "future"            => "test 4 lest test a real long sentence and see what comes of it it might just be an acutal meme lets see tho"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
            </div>
        </div>
        <br>
        <div class="two-wide-row-container">
            <div class="about-us-row">
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-3-of-29-scaled-e1611453797627.jpg",
                        "person_name"       => "Merrynal Anthony", 
                        "person_position"   => "Co-President", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "test 1",
                        "drives"            => "test 2",
                        "hobbies"           => "test 3",
                        "future"            => "test 4 lest test a real long sentence and see what comes of it it might just be an acutal meme lets see tho"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-3-of-29-scaled-e1611453797627.jpg",
                        "person_name"       => "Merrynal Anthony", 
                        "person_position"   => "Co-President", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "test 1",
                        "drives"            => "test 2",
                        "hobbies"           => "test 3",
                        "future"            => "test 4 lest test a real long sentence and see what comes of it it might just be an acutal meme lets see tho"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1>Externals</h1>
        <div class="two-wide-row-container">
            <div class="about-us-row">
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-3-of-29-scaled-e1611453797627.jpg",
                        "person_name"       => "Merrynal Anthony", 
                        "person_position"   => "Co-President", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "test 1",
                        "drives"            => "test 2",
                        "hobbies"           => "test 3",
                        "future"            => "test 4 lest test a real long sentence and see what comes of it it might just be an acutal meme lets see tho"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-3-of-29-scaled-e1611453797627.jpg",
                        "person_name"       => "Merrynal Anthony", 
                        "person_position"   => "Co-President", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "test 1",
                        "drives"            => "test 2",
                        "hobbies"           => "test 3",
                        "future"            => "test 4 lest test a real long sentence and see what comes of it it might just be an acutal meme lets see tho"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
            </div>
        </div>
        <br>
        <div class="three-wide-row-container">
            <div class="about-us-row">
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-3-of-29-scaled-e1611453797627.jpg",
                        "person_name"       => "Merrynal Anthony", 
                        "person_position"   => "Co-President", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "test 1",
                        "drives"            => "test 2",
                        "hobbies"           => "test 3",
                        "future"            => "test 4 lest test a real long sentence and see what comes of it it might just be an acutal meme lets see tho"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-3-of-29-scaled-e1611453797627.jpg",
                        "person_name"       => "Merrynal Anthony", 
                        "person_position"   => "Co-President", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "test 1",
                        "drives"            => "test 2",
                        "hobbies"           => "test 3",
                        "future"            => "test 4 lest test a real long sentence and see what comes of it it might just be an acutal meme lets see tho"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-3-of-29-scaled-e1611453797627.jpg",
                        "person_name"       => "Merrynal Anthony", 
                        "person_position"   => "Co-President", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "test 1",
                        "drives"            => "test 2",
                        "hobbies"           => "test 3",
                        "future"            => "test 4 lest test a real long sentence and see what comes of it it might just be an acutal meme lets see tho"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1>Operations</h1>
        <div class="two-wide-row-container">
            <div class="about-us-row">
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-3-of-29-scaled-e1611453797627.jpg",
                        "person_name"       => "Merrynal Anthony", 
                        "person_position"   => "Co-President", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "test 1",
                        "drives"            => "test 2",
                        "hobbies"           => "test 3",
                        "future"            => "test 4 lest test a real long sentence and see what comes of it it might just be an acutal meme lets see tho"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-3-of-29-scaled-e1611453797627.jpg",
                        "person_name"       => "Merrynal Anthony", 
                        "person_position"   => "Co-President", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "test 1",
                        "drives"            => "test 2",
                        "hobbies"           => "test 3",
                        "future"            => "test 4 lest test a real long sentence and see what comes of it it might just be an acutal meme lets see tho"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
            </div>
        </div>
        <br>
        <div class="three-wide-row-container">
            <div class="about-us-row">
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-3-of-29-scaled-e1611453797627.jpg",
                        "person_name"       => "Merrynal Anthony", 
                        "person_position"   => "Co-President", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "test 1",
                        "drives"            => "test 2",
                        "hobbies"           => "test 3",
                        "future"            => "test 4 lest test a real long sentence and see what comes of it it might just be an acutal meme lets see tho"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-3-of-29-scaled-e1611453797627.jpg",
                        "person_name"       => "Merrynal Anthony", 
                        "person_position"   => "Co-President", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "test 1",
                        "drives"            => "test 2",
                        "hobbies"           => "test 3",
                        "future"            => "test 4 lest test a real long sentence and see what comes of it it might just be an acutal meme lets see tho"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-3-of-29-scaled-e1611453797627.jpg",
                        "person_name"       => "Merrynal Anthony", 
                        "person_position"   => "Co-President", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "test 1",
                        "drives"            => "test 2",
                        "hobbies"           => "test 3",
                        "future"            => "test 4 lest test a real long sentence and see what comes of it it might just be an acutal meme lets see tho"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
            </div>
        </div>
        <br>
        <div class="two-wide-row-container">
            <div class="about-us-row">
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-3-of-29-scaled-e1611453797627.jpg",
                        "person_name"       => "Merrynal Anthony", 
                        "person_position"   => "Co-President", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "test 1",
                        "drives"            => "test 2",
                        "hobbies"           => "test 3",
                        "future"            => "test 4 lest test a real long sentence and see what comes of it it might just be an acutal meme lets see tho"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-3-of-29-scaled-e1611453797627.jpg",
                        "person_name"       => "Merrynal Anthony", 
                        "person_position"   => "Co-President", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "test 1",
                        "drives"            => "test 2",
                        "hobbies"           => "test 3",
                        "future"            => "test 4 lest test a real long sentence and see what comes of it it might just be an acutal meme lets see tho"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>

