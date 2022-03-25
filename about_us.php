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
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2022/03/DSC02116-scaled.jpg",
                        "person_name"       => "Rishi Chhugani",
                        "person_position"   => "Co-President",
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "Bachelor of Commerce/Economics",
                        "drives"            => "Friends, family and the constant need to learn adapt and succeed in a fast paced environment"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-4-of-29-scaled-e1611454331311.jpg",
                        "person_name"       => "Siqi Yang",
                        "person_position"   => "Co-President",
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/siqi-yang-2000",
                        "DegreeYear"        => "Bachelor of Commerce/Law - 4th year",
                        "drives"            => "I'm your typical jaded finance and law fourth year but unironically wishes to stay in uni forever.
                                                Huge fan of true crime, a sucker for ghastly cases with unhinged facts - I promise I am sane!
                                                In my spare time, I like to lose money in the share-market, eat an unhealthy amount of fries, and listen to K-POP bops. "
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
                        "person_name"       => "Queenie Li",
                        "person_position"   => "Vice President (Activities)",
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/queeniecyli",
                        "DegreeYear"        => "Bachelor of Commerce/Information Systems - 3rd year",
                        "drives"            => "Hi, I’m Queenie! In my spare time I enjoy reading & watching conspiracy theories, going out for brunch and driving to nice lookouts."
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-19-of-29-scaled-e1611455637963.jpg",
                        "person_name"       => "Alex Cai",
                        "person_position"   => "Vice President (Externals)",
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/alexjlcai/",
                        "DegreeYear"        => "Bachelor of Commerce/Economics - 4th year",
                        "drives"            => "will beat you at mario kart"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-15-of-29-scaled-e1611455445813.jpg",
                        "person_name"       => "Vedant Shah",
                        "person_position"   => "Vice President (Externals)",
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/nahum-adeel/",
                        "DegreeYear"        => "Bachelor of Actuarial Studies & Commerce - 4th year",
                        "drives"            => "Seeing the big picture impact of my work and creating a genuine positive change  "
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
                        "person_name"       => "Katherine Mo",
                        "person_position"   => "Vice President (Operations)",
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/rishi-chhugani123/",
                        "DegreeYear"        => "4th Year - Law/Commerce",
                        "drives"            => "The enjoyment of learning and the satisfaction of achievement."
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-17-of-29-scaled-e1611455529165.jpg",
                        "person_name"       => "Nick Joeng",
                        "person_position"   => "General Secretary",
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/audrey-yeo/",
                        "DegreeYear"        => "Bachelor of Commerce (Finance)/Bachelor of Science (Biotechnology) | 4th year",
                        "drives"            => "Fear of failure"
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
                        "person_name"       => "Amy Toms",
                        "person_position"   => "HR Director",
                        "mailto_address"    => "hr@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/amy-toms-426b46193",
                        "DegreeYear"        => "Bachelor of Commerce - 3rd year",
                        "drives"            => "I’m studying a bachelor of commerce majoring in finance. Im working at Macquarie Group & HR director for FINSOC.
                                                I enjoy bonding and making fulfilling friendships! I’m a bit of a home body, and spend most of my time sleeping or lounging in bed.
                                                When I’m not doing that, I love to go shopping with friends, go to the gym and yoga and eating out with friends.
                                                I may come off as quiet at first, but once I get to know you I will be your best friend!"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/NJ-1-scaled-e1612089853514.jpg",
                        "person_name"       => "Galen Yuan",
                        "person_position"   => "HR Director",
                        "mailto_address"    => "hr@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/galen-yuan/",
                        "DegreeYear"        => "Bachelor of Commerce/Computer Engineering - 2nd year",
                        "drives"            => "Gym"
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
                        "person_name"       => "William Jiang",
                        "person_position"   => "Social Director",
                        "mailto_address"    => "events@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/jason-tong-a96207161/",
                        "DegreeYear"        => "Commerce/Media (PR & Advertising)",
                        "drives"            => "Work hard play hard"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-1-of-29-scaled-e1611454265685.jpg",
                        "person_name"       => "Warren O",
                        "person_position"   => "Social Director",
                        "mailto_address"    => "events@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/warren-o-9448091a5/",
                        "DegreeYear"        => "Bachelor of Commerce/Information Systems - 2nd year",
                        "drives"            => "I live by the quote that \"Success consists of going from failure to failure without loss of enthusiasm\" because I think each failure can be taken as a learning opportunity.
                                                Hoping this persistence will get me to where I need to be in finance/tech.
                                                Fun facts: I'm from Cabra and am half Vietnamese
                                                Hobbies: gym, raves, motorcycling, reading & learning
                                                Music: hardstyle, krnb, kpop, throwbacks, drill"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-1-of-29-scaled-e1611454265685.jpg",
                        "person_name"       => "Mimi Zhou",
                        "person_position"   => "Social Director",
                        "mailto_address"    => "events@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/mimi-zhou-b7245720a/",
                        "DegreeYear"        => "Bachelors of Music/Commerce - 2nd year",
                        "drives"            => "I try to songwrite in my spare time!"
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
                        "person_name"       => "Nahum Adeel",
                        "person_position"   => "Education Director",
                        "mailto_address"    => "academic@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/vedant-shah1/",
                        "DegreeYear"        => "3rd Year Actl/Comm",
                        "drives"            => "The ability to leave an impact in the student community"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/02/BG-1.jpg",
                        "person_name"       => "James Layland",
                        "person_position"   => "Education Director",
                        "mailto_address"    => "academic@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/bryan-gunawan-a9647818a/",
                        "DegreeYear"        => "3rd Year Law/Commerce ",
                        "drives"            => "Tall, dark and handsome"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/02/BG-1.jpg",
                        "person_name"       => "Daniel Xu",
                        "person_position"   => "Education Director",
                        "mailto_address"    => "academic@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/danielxusydney",
                        "DegreeYear"        => "Bachelor of Commerce/Law - 3rd year",
                        "drives"            => "Commerce and law academic at UNSW who is driven by to always learn and grow as a person while also making a positive impact.
                                                I enjoy travelling, trying new experiences and reading. In the future I hope to be doing something I love."
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
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-9-of-29-scaled-e1611454908152.jpg",
                        "person_name"       => "Salena Bhalerao",
                        "person_position"   => "Sponsorships Director",
                        "mailto_address"    => "sponsorships@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/salena-bhalerao/",
                        "DegreeYear"        => "Bachelor of Law/Commerce - 3rd year",
                        "drives"            => "I am an ESTJ who is hardworking and loves to meet new people!
                                                In my spare time I like to play golf, write music and go shopping.
                                                In the future, I'd love to work in corporate advisory after graduating."
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-26-of-29-scaled-e1611456215574.jpg",
                        "person_name"       => "Avaneesh Shrestha",
                        "person_position"   => "Sponsorships Director",
                        "mailto_address"    => "sponsorships@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/avaneesh-shrestha-25331019b/",
                        "DegreeYear"        => "Bachelor of Commerce/Information Systems - 3rd year",
                        "drives"            => "My goal in life is to perpetually hit a level in which what I consider impossible today will be my future self’s warmup.
                                                Fun facts: I eat raw ramen flavouring. I was mugged by a guy with a tree branch
                                                Hobbies: gym, anime, cooking, listening to Nick Joeng’s laugh, throwing hands with my dog"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-26-of-29-scaled-e1611456215574.jpg",
                        "person_name"       => "Mandy Zhou",
                        "person_position"   => "Sponsorships Director",
                        "mailto_address"    => "sponsorships@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/alexjlcai/",
                        "DegreeYear"        => "Bachelor of Commerce & Economics 3rd Year",
                        "drives"            => "Too financially irresponsible to be in a finance society"
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
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-28-of-29-scaled-e1611456390446.jpg",
                        "person_name"       => "Merrynal Anthony",
                        "person_position"   => "Research Director",
                        "mailto_address"    => "academic@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/anthony-merrynal-39324316b/",
                        "DegreeYear"        => "Bachelor of Commerce/Economics - 5th year",
                        "drives"            => "In my spare time i enjoy going to the gym, binging YouTube and getting hard carried in Valorant by my mates"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/02/BG-1.jpg",
                        "person_name"       => "Matthew Sulistyo",
                        "person_position"   => "Research Director",
                        "mailto_address"    => "academic@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/bryan-gunawan-a9647818a/",
                        "DegreeYear"        => "3rd Year Law/Commerce ",
                        "drives"            => "Chill"
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
                        "person_name"       => "Chrystal Mao",
                        "person_position"   => "Marketing Director",
                        "mailto_address"    => "operations@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/jessqiao/",
                        "DegreeYear"        => "3rd Year Commerce (Finance)/ Computer Science ",
                        "drives"            => "Sagittarius, short and loud"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-2-of-29-scaled-e1611454531236.jpg",
                        "person_name"       => "Jeremy Wang",
                        "person_position"   => "Marketing Director",
                        "mailto_address"    => "operations@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/jeremy-wang-a622351bb/",
                        "DegreeYear"        => "Bachelor of Commerce/Information Systems - 3rd year",
                        "drives"            => "I enjoy watching shows, basketball and coaching tennis!"
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
                        "person_name"       => "Rebecca Li",
                        "person_position"   => "Publications Director",
                        "mailto_address"    => "enquiries@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/rebecca-l-b80a4119a/",
                        "DegreeYear"        => "Bachelor of Commerce (International) - 4th year",
                        "drives"            => "Still on a journey in finding what I truly enjoy as a career.
                                                Learning languages is my obsession, currently fluent in three but studying two more.
                                                Spare time is spent doing pilates, painting and drinking too much coffee."
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-8-of-29-scaled-e1611454493898.jpg",
                        "person_name"       => "Oliver Ryan",
                        "person_position"   => "Publications Director",
                        "mailto_address"    => "operations@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/alex-wong-aspirant/",
                        "DegreeYear"        => "3rd year Commerce (Finance)/Law",
                        "drives"            => "Being able to look back on my life without regrets."
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-12-of-29-scaled-e1611455278964.jpg",
                        "person_name"       => "Melody Sze",
                        "person_position"   => "Publications Director",
                        "mailto_address"    => "operations@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/melody-sze-523130228/",
                        "DegreeYear"        => "Bachelor of Commerce/Arts - 2nd year",
                        "drives"            => "I am always curious about the world around us with exceptional interpersonal skills and a genuine thirst for knowledge.
                                                My hobbies include cooking, reading the news, running, and I am outgoing to chat about anything! "
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
                        "person_name"       => "Jeffery Ge",
                        "person_position"   => "IT Director",
                        "mailto_address"    => "operations@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/daniel-li-84489a14b/",
                        "DegreeYear"        => "Bachelors of Commerce/Computer Science - 4th year",
                        "drives"            => "I like to eat lots of lots of lots of food"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-21-of-29-scaled-e1611456009821.jpg",
                        "person_name"       => "Skyler Zou",
                        "person_position"   => "IT Director",
                        "mailto_address"    => "operations@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/skyler-zou-2729ab213/",
                        "DegreeYear"        => "Bachelor of Actuarial Studies/Commerce - 4th year",
                        "drives"            => "I am motivated to bring positive change/value to the people and community around me and to be the best version of myself."
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
