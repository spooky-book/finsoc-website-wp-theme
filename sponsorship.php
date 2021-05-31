<?php

/**
 * Template Name: Sponsorship Page
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
        <!-- this one above is the container class from the new thing everything inbetween -->
        <div class="pageSponsors"> 
            <a name="sponsors"></a>
            <div class="section">
                <div class="sponsors-container container">
                    <div class="subheading">
                        <h1 class="h2Custom">PLATINUM SPONSORS</h1>
                        <hr/>
                    </div>
                    <div class="sponsorsOfficial">
                        <?php
                            $args = array(
                                "site_url"  => "https://www.hsbc.com.au/",
                                "div_id"    => "HSBC",
                                "name"      => "HSBC", 
                                "image_file"=> "2021/01/hsbc3.png", 
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>
                    </div>
                    <div class="subheading">
                        <br/>
                        <h1 class="h2Custom">GOLD SPONSORS</h1>
                        
                        <hr/>
                    </div>
                    <div class="sponsorsOfficial">
                        <?php
                            $args = array(
                                "site_url"  => "https://www.reckitt.com/",
                                "div_id"    => "reckitt",
                                "name"      => "reckitt", 
                                "image_file"=> "2021/05/Reckitt_2021.svg_.png", 
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>    
                        <?php
                            $args = array(
                                "site_url"  => "https://www.franklintempleton.com.au/",
                                "div_id"    => "bcr",
                                "name"      => "Franklin Templeton Investments", 
                                "image_file"=> "2021/01/Franklin.jpg", 
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>

                        <?php
                            $args = array(
                                "site_url"  => "https://www.tmgm.com.au/en",
                                "div_id"    => "TMGM",
                                "name"      => "TMGM", 
                                "image_file"=> "2021/05/tmgm.png", 
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>   
                        <br/>
                        
                    </div>
                    <div class="subheading">
                        <br/>
                        <h1 class="h2Custom">SILVER SPONSORS</h1>
                        
                        <hr/>
                    </div>

                    <div class="sponsorsOfficial">
                        <?php
                            $args = array(
                                "site_url"  => "https://www.bain.com/",
                                "div_id"    => "bain",
                                "name"      => "bain", 
                                "image_file"=> "2021/01/bain.png", 
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>
                        <?php
                            $args = array(
                                "site_url"  => "https://www.neu.capital/",
                                "div_id"    => "neucapital",
                                "name"      => "Neucapital", 
                                "image_file"=> "2021/05/neucapital2-scaled.jpg", 
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>
                        <?php
                            $args = array(
                                "site_url"  => "https://www.greenstonepartners.com.au/",
                                "div_id"    => "Greenstone",
                                "name"      => "Greenstone", 
                                "image_file"=> "2021/05/greenstonepartners.png", 
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>
                    </div>
            
                    <div class="subheading">
                        <br/>
                        <h1 class="h2Custom">BRONZE SPONSORS</h1>
                        
                        <hr/>
                    </div>
                    <div class="sponsorsOfficial">
                        <?php
                            $args = array(
                                "site_url"  => "https://www.ampcapital.com/au/en/home",
                                "div_id"    => "AMP",
                                "name"      => "AMP", 
                                "image_file"=> "2021/01/amp.jpg", 
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>

                        <?php
                        // we need to get the images onto wordpress
                        $args = array(
                            "site_url"  => "https://longreachalternatives.com/",
                            "div_id"    => "longreach",
                            "name"      => "longreach", 
                            "image_file"=> "2021/05/longreach.jpg", 
                            "detail"    => ""
                        );
                        get_template_part("templates/individual_sponsor", null, $args);
                        ?>
                        <?php
                        // we need to get the images onto wordpress
                        $args = array(
                            "site_url"  => "https://www.bloomberg.com/asia",
                            "div_id"    => "Bloomberg",
                            "name"      => "Bloomberg", 
                            "image_file"=> "2021/05/Bloomberg.jpg", 
                        );
                        get_template_part("templates/individual_sponsor", null, $args);
                        ?>
                        
                    </div>       
                    <br/>
                    <div class="subheading">
                        <br/>
                        <h1 class="h2Custom">MARKETING SPONSORS</h1>
                        
                        <hr/>
                    </div>

                    <div class="sponsorsOfficial">
                        <?php
                            $args = array(
                                "site_url"  => "https://www.flowtraders.com/",
                                "div_id"    => "flowtraders",
                                "name"      => "flowtraders", 
                                "image_file"=> "2021/01/ft.png", 
                                "detail"    => ""
                            );
                            get_template_part("templates/individual_sponsor", null, $args);
                        ?>
                    </div>  
                </div>
                <div class="section2 applyContainer">
                    <a name="apply"></a>
                    <div class="title">
                        <h1>APPLY</h1>
                    </div>
                
                    <a href="mailto:sponsorship@unswfinsoc.org.au">
                        <div class="apply">   
                            <button type="button" class="btn btn-outline-primary applyButton">Help sponsor FINSOC by sending us an email at <br/><b>sponsorship@unswfinsoc.org.au</b></button>
                        </div>
                    </a>
                    <br/>
                    <br/>
                    <br/>    
                </div>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();
?>

