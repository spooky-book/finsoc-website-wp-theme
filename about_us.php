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
                        "DegreeYear"        => "4th Year - Law/Commerce",
                        "drives"            => "The enjoyment of learning and the satisfaction of achievement. ",
                        "hobbies"           => "Cooking, Gaming, Movies",
                        "future"            => "Pursuing a career where I get to be a the forefront of changing technologies and their application in our society."
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
                        "DegreeYear"        => "Commerce/Media (PR & Advertising)",
                        "drives"            => "Working so my parents don't have to",
                        "hobbies"           => "Shadow Boxing, Gardening, Baking",
                        "future"            => "Working"
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
        <div class="two-wide-row-container">
            <div class="about-us-row">
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-9-of-29-scaled-e1611454908152.jpg",
                        "person_name"       => "Shane Mammen",
                        "person_position"   => "Sponsorships Director",
                        "mailto_address"    => "sponsorships@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/shane-mammen-719487153/",
                        "DegreeYear"        => "Bachelor of Commerce/Bachelor of Economics - 3rd year",
                        "drives"            => "Passionate about helping and educating others",
                        "hobbies"           => "You can catch me out on the golf course ",
                        "future"            => "Working for an innovative, fast-paced global leader in the industry"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-26-of-29-scaled-e1611456215574.jpg",
                        "person_name"       => "Alex Cai",
                        "person_position"   => "Sponsorships Director",
                        "mailto_address"    => "sponsorships@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/alexjlcai/",
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
                        "linkedin_url"      => "https://www.linkedin.com/in/jessqiao/",
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
                        "linkedin_url"      => "https://www.linkedin.com/in/kelly-liang-03877017b/",
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
                        "linkedin_url"      => "https://www.linkedin.com/in/katherine-mo-96ab00165/",
                        "DegreeYear"        => "Bachelor of Actuarial/Commerce (Finance)",
                        "drives"            => "Growing and developing with those around me as we work towards our goals",
                        "hobbies"           => "Knitting, playing board games, copic art",
                        "future"            => "Working in a role that I find enjoyable and rewarding"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-8-of-29-scaled-e1611454493898.jpg",
                        "person_name"       => "Alex Wong",
                        "person_position"   => "Publications Director",
                        "mailto_address"    => "operations@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/alex-wong-aspirant/",
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
                        "linkedin_url"      => "https://www.linkedin.com/in/cindylam01/",
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
                        "linkedin_url"      => "https://www.linkedin.com/in/daniel-li-84489a14b/",
                        "DegreeYear"        => "4th Year - Commerce (Finance) / Computer Science",
                        "drives"            => "To bring a positive impact onto people's lives",
                        "hobbies"           => "TV, Youtube, Hiking/Walks, Games, Baking",
                        "future"            => "Hopefully in a career that I love"
                    );
                    get_template_part("templates/individual_about_us_icon", null, $args);
                ?>
                <?php
                    $args = array(
                        "image_src"         => "https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-21-of-29-scaled-e1611456009821.jpg",
                        "person_name"       => "Jay Yu",
                        "person_position"   => "IT Director",
                        "mailto_address"    => "operations@unswfinsoc.org.au",
                        "linkedin_url"      => "https://www.linkedin.com/in/jay-yu1/",
                        "DegreeYear"        => "4th Year - Commerce (Finance/FinTech)/Information Systems",
                        "drives"            => "I am motivated to bring positive change/value to the people and community around me and to be the best version of myself. ",
                        "hobbies"           => "Sports/Exercise, Music, Movies, Volunteering",
                        "future"            => "I see myself surrounded by family and friends, working within the tech or banking sector with twins x"
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
