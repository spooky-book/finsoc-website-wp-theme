<?php

/**
 * Template Name: Team Page
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
        
		<ul id="og-grid" class="container og-grid container">
    <div class="row ppl-row">
        <li>
            <a data-largesrc='http://128.199.100.63/wp-content/uploads/2020/12/e.g.jpg' data-title="Merrynal Anthony " data-subtitle="Co-President <br/></strong> <a href='mailto:president@unswfinsoc.org.au'> president@unswfinsoc.org.au </a><p><a href='https://www.linkedin.com/in/tiffany-chan9/' target='_blank'><i class='fa fa-linkedin-square fa-3 icon' aria-hidden='true'></i></a></p>" 
                data-description="<p><strong>Degree:</strong> Bachelor of Commerce/ Bachelor of Law</p>
        <p><strong>Stage in Uni: </strong> 4th year</p>
        <p><strong>What drives you: </strong> Personal development, new opportunities & experiences and making the people that matter proud</p>
        <p><strong>What is a cool trick you can do: </strong> I can ice skate backwards </p>
        <p><strong>Hobbies:</strong> Gym, travelling, finding new brunch spots. </p> ">
                <div class="hover-image">
                    <img src= "http://128.199.100.63/wp-content/uploads/2020/12/e.g.jpg", class= "portrait", alt= "Merrynal Anthony">
                    <div class="hover-text"><p>Click for bio</p></div>
                </div>
                <div class="ppl-title">
                    <h3>Merrynal Anthony</h3><p>Co-President</p>
                </div>
            </a>
        </li>
    </div>
</ul>
		
    <li>
    <a data-largesrc='http://128.199.100.63/wp-content/uploads/2020/12/e.g.jpg' data-title="Tony Chen" data-subtitle="Co-President <br/></strong> <a href='mailto:president@unswfinsoc.org.au'>president@unswfinsoc.org.au</a><p><a href='https://www.linkedin.com/in/tony-chen-854217163/' target='_blank'><i class='fa fa-linkedin-square fa-3 icon' aria-hidden='true'></i></a></p>" 
      data-description="<p><strong>Degree: </strong>Bachelor of Commerce</p>
<p><strong>Stage in Uni: </strong> 4th year</p>
<p><strong>What drives you: </strong> The people around me</p>
<p><strong>What is a cool trick you can do: </strong> I can cook anything with an airfryer </p>
<p><strong>Hobbies:</strong> Basketball,guitar and gym </p>                     
">
      <div class="hover-image">
        <img src= "http://128.199.100.63/wp-content/uploads/2020/12/e.g.jpg", class= "portrait", alt= "Tony Chen" %>
        <div class="hover-text"><p>Click for bio</p></div>
      </div>
      <div class="ppl-title">
        <h3>Tony Chen</h3><p>Co-President</p>
      </div>
      </a>
  </li>   
    </div>
	
</main>
<?php
get_footer();
?>

