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
                <div class="single-person-div">
                    <div class="image-container-div">
                        <img class="circular-image collapsible" onload="aboutUsImageLoaded(this)" src="https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-3-of-29-scaled-e1611453797627.jpg" alt="merynal bruh">
                    </div>
                    <div class="circular-image-link">
                        <a href="mailto:enquiries@unswfinsoc.org.au">
                            <i class="far fa-envelope"></i>
                        </a>
                        <a>
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <br>
                        Read More
                    </div>
                    <div class="person-name">
                        BELBELEE NAME
                    </div>
                    <div class="person-designation">
                        Postition testing line
                    </div>
                </div>
                <div class="collapsible-content">
                    <p>test this is a test paragraph i am just writing some random bullshit so that it works lmao roelse it doesnt event matter </p>
                    <p>just testing again does it get longer the longer you write the sentence or maybe its just a thing that doesnt seem to work properly </p>
                </div>
                <div class="invisible-row-div">
                    bruh
                </div>
                <div class="single-person-div">
                    <div class="image-container-div">
                        <img class="circular-image collapsible" onload="aboutUsImageLoaded(this)" src="https://unswfinsoc.org.au/wp-content/uploads/2021/01/Professional-Photos-4-of-29-scaled-e1611454331311.jpg" alt="brhrbrhhr">
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
                <div class="collapsible-content">
                    <p>different paragraph so people actually know what is going on here lmao </p>
                    <p>blaksjfldksjdl feoi j sjldf lsdjf lsjdlf dsj ld lsdkjlf ksdjlkfjsld   </p>
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

