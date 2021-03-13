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
                        "DegreeYear"        => "Bachelor of Commerce/Economics",
                        "drives"            => "Friends, family and the constant need to learn adapt and succeed in a fast paced environment",
                        "hobbies"           => "Gym, netflix, youtube, raving, going for therapeutic drives in the rain",
                        "future"            => "Not 100% sure, but ideally in Canada with a german shepherd"
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
                        "DegreeYear"        => "Commerce/Actuarial 3rd year",
                        "drives"            => "Motivation to achieve personal best!",
                        "hobbies"           => "Hiking, bouldering, painting, golfing, Netflix, travelling",
                        "future"            => "Doing something i enjoy!"
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
                        "DegreeYear"        => "Bachelor of Commerce/Economics",
                        "drives"            => "Understanding how my actions and efforts can help inspire those around me",
                        "hobbies"           => "Finding lookouts, watching sport, gym",
                        "future"            => "Having the time of my life"
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
                        "DegreeYear"        => "Bachelor of Commerce and Law (Finance Major) | Third Year",
                        "drives"            => "Meeting new people, learning new things and the satisfaction from meeting deadlines",
                        "hobbies"           => "Foodie, Hiking, Travelling, Dance and True Crime Podcasts/Documentaries",
                        "future"            => "I envision myself to be working in a dynamic team where i am challenged to think critically and creatively every day. I see myself as an evolving individual who will continue to build on my passions and interests. "
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-15-of-29-scaled-e1611455445813.jpg",
                        "person_name"       => "Nahum Adeel", 
                        "person_position"   => "Vice President (Externals)", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/nahum-adeel/",
                        "DegreeYear"        => "Bachelor of Actuarial Studies & Commerce - 4th year",
                        "drives"            => "Seeing the big picture impact of my work and creating a genuine positive change  ",
                        "hobbies"           => "Guitar, Music-writing and Travel",
                        "future"            => "In a finance role where I can genuinely add value and make the world a better place"
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
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-22-of-29-scaled-e1611456724157.jpg",
                        "person_name"       => "Rishi Chhugani", 
                        "person_position"   => "Vice President (Operations)", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/rishi-chhugani123/",
                        "DegreeYear"        => "test 1",
                        "drives"            => "test 2",
                        "hobbies"           => "test 3",
                        "future"            => "test 4 lest test a real long sentence and see what comes of it it might just be an acutal meme lets see tho"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-17-of-29-scaled-e1611455529165.jpg",
                        "person_name"       => "Audrey Yeo", 
                        "person_position"   => "General Secretary", 
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/audrey-yeo/",
                        "DegreeYear"        => "Bachelor of Commerce (Finance)/Bachelor of Science (Biotechnology) | 4th year",
                        "drives"            => "Fear of failure",
                        "hobbies"           => "Online shopping, gym, cooking",
                        "future"            => "Either in a bank, science lab, or startup!"
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
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/02/QL.jpg",
                        "person_name"       => "Queenie Li", 
                        "person_position"   => "HR Director", 
                        "mailto_address"    => "hr@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/queeniecyli/",
                        "DegreeYear"        => "2nd Year, Bachelor of Information Systems",
                        "drives"            => "Being able to learn new things and to be a more knowledgeable person. ",
                        "hobbies"           => "Painting, going to nice lookouts",
                        "future"            => "Living my best life and working full time."
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/NJ-1-scaled-e1612089853514.jpg",
                        "person_name"       => "Nick Joeng", 
                        "person_position"   => "HR Director", 
                        "mailto_address"    => "hr@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/nicholas-joeng/",
                        "DegreeYear"        => "Civil Engineering (Honours) / Commerce (Finance) - 4th Year",
                        "drives"            => "Seeing the positive impact my actions can have on others.",
                        "hobbies"           => "Basketball, Eating, JDM Car Modification",
                        "future"            => "In an environment where I am passionate and motivated about work and life, whilst being surrounded by others who are like-minded."
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
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-14-of-29-scaled-e1611455364654.jpg",
                        "person_name"       => "Jayson Tong", 
                        "person_position"   => "Social Director", 
                        "mailto_address"    => "events@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/jason-tong-a96207161/",
                        "DegreeYear"        => "test 1",
                        "drives"            => "test 2",
                        "hobbies"           => "test 3",
                        "future"            => "test 4 lest test a real long sentence and see what comes of it it might just be an acutal meme lets see tho"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-1-of-29-scaled-e1611454265685.jpg",
                        "person_name"       => "Jane Wang", 
                        "person_position"   => "Social Director", 
                        "mailto_address"    => "events@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/jane-wang-a993b2168/",
                        "DegreeYear"        => "Commerce/Info Sys - 3rd year",
                        "drives"            => "The possibilities that come with adulthood and freedom! ",
                        "hobbies"           => "embroidery, reading, coastal walks",
                        "future"            => "5 cats (1 per year)"
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
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-28-of-29-scaled-e1611456390446.jpg",
                        "person_name"       => "Vedant Shah", 
                        "person_position"   => "Education Director", 
                        "mailto_address"    => "academic@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/vedant-shah1/",
                        "DegreeYear"        => "3rd Year Actl/Comm",
                        "drives"            => "The ability to leave an impact in the student community",
                        "hobbies"           => "Badmington, gaming, gym",
                        "future"            => "Working in actuarial consulting/risk management or banking"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php 
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/02/BG-1.jpg",
                        "person_name"       => "Bryan Gunawan", 
                        "person_position"   => "Education Director", 
                        "mailto_address"    => "academic@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/bryan-gunawan-a9647818a/",
                        "DegreeYear"        => "3rd Year Law/Commerce ",
                        "drives"            => "Being a better version of myself everyday",
                        "hobbies"           => "Stock trading, basketball",
                        "future"            => "Working with start-ups in Sillicon Valley"
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

