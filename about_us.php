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
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-9-of-29-scaled-e1611454908152.jpg",
                        "person_name"       => "Shane Mammen", 
                        "person_position"   => "Sponsorships Director", 
                        "mailto_address"    => "sponsorships@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "Bachelor of Commerce/Bachelor of Economics - 3rd year",
                        "drives"            => "Passionate about helping and educating others",
                        "hobbies"           => "You can catch me out on the golf course ",
                        "future"            => "Working for an innovative, fast-paced global leader in the industry"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-13-of-29-scaled-e1611455217973.jpg",
                        "person_name"       => "Yan Zhai", 
                        "person_position"   => "Sponsorships Director", 
                        "mailto_address"    => "sponsorships@unswfinsoc.org.au",
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
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-26-of-29-scaled-e1611456215574.jpg",
                        "person_name"       => "Alex Cai", 
                        "person_position"   => "Sponsorships Director", 
                        "mailto_address"    => "sponsorships@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "Bachelors of Commerce & Economics 3rd Year",
                        "drives"            => "To create a genuinely positive impact in the people around me ",
                        "hobbies"           => "Reading, Excel workshops ",
                        "future"            => "Doing something I genuinely enjoy :))"
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
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-29-of-29-scaled-e1611456514628.jpg",
                        "person_name"       => "Jessica Qiao", 
                        "person_position"   => "Marketing Director", 
                        "mailto_address"    => "operations@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "3rd Year Commerce (Finance)/ Computer Science ",
                        "drives"            => "Being able to learn new things while meeting new people!",
                        "hobbies"           => "Group fitness classes, travelling, being a foodie",
                        "future"            => "Challenging myself while gaining more knowledge and experience within the finance industry "
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-2-of-29-scaled-e1611454531236.jpg",
                        "person_name"       => "Kelly Liang", 
                        "person_position"   => "Marketing Director", 
                        "mailto_address"    => "operations@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "Comm/Infs, 3rd year",
                        "drives"            => "My motivation to continuously improve myself - whether it be in my studies, hobbies, or professional future.",
                        "hobbies"           => "Drawing - digitally and traditionally",
                        "future"            => "Probably in UI/UX design? The only thing I'm really sure about is that I'll be in a role that requires creativity :)"
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
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-6-of-29-scaled-e1611454458659.jpg",
                        "person_name"       => "Katherine Mo", 
                        "person_position"   => "Publications Director", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "Bachelor of Actuarial/Commerce (Finance)",
                        "drives"            => "test 2",
                        "hobbies"           => "test 3",
                        "future"            => "test 4 lest test a real long sentence and see what comes of it it might just be an acutal meme lets see tho"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-8-of-29-scaled-e1611454493898.jpg",
                        "person_name"       => "Alex Wong", 
                        "person_position"   => "Publications Director", 
                        "mailto_address"    => "operations@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "3rd year Commerce (Finance)/Law",
                        "drives"            => "Being able to look back on my life without regrets.",
                        "hobbies"           => "Art, Journalling and lurking forums",
                        "future"            => "In a career where I can leverage my passion in both finance and law where I'm always learning on the grind."
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-12-of-29-scaled-e1611455278964.jpg",
                        "person_name"       => "Cindy Lam", 
                        "person_position"   => "Publications Director", 
                        "mailto_address"    => "operations@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "Bachelor of Commerce",
                        "drives"            => "My passion for life-long learning and continual self-improvement.",
                        "hobbies"           => "Hiking, walks with my dogs and reading",
                        "future"            => "In a role which I am passionate about which challenges me to adapt and think critically."
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
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-5-of-29-scaled-e1611454415299.jpg",
                        "person_name"       => "Daniel Li", 
                        "person_position"   => "IT Director", 
                        "mailto_address"    => "operations@unswfinsoc.org.au",
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
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-21-of-29-scaled-e1611456009821.jpg",
                        "person_name"       => "Jay Yu", 
                        "person_position"   => "IT Director", 
                        "mailto_address"    => "operations@unswfinsoc.org.au",
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

