<?php

/**
 * Template Name: Individual About Us Icon
 *
 * This is the template for each of the sponsor boxes
 *
 * @package busiway
 */

?>

<?php
    $modal_id = esc_html(str_replace(" ", "", $args['person_name']));
?>

<div class="single-person-div">
    <div class="image-container-div">
        <img class="circular-image" onclick="document.getElementById('<?php echo $modal_id ?>').style.display='block'" src="<?php echo esc_html($args['image_src'])?>" alt="<?php echo esc_html($args['person_name'])?>">
    </div>
    <div class="circular-image-link">
        <a href="mailto:<?php echo esc_html($args['mailto_address'])?>">
            <i class="far fa-envelope"></i>
        </a>
        <a href="<?php echo esc_html($args['linkedin_url'])?>">
            <i class="fab fa-linkedin"></i>
        </a>
        <br>
        Read More
    </div>
    <div class="person-name">
    <?php echo esc_html($args['person_name'])?>
    </div>
    <div class="person-designation">
    <?php echo esc_html($args['person_position'])?>
    </div>
</div>
<!-- onclick="document.getElementById('<?php echo $modal_id ?>').style.display='none'" -->
<div id="<?php echo $modal_id ?>" class="modal animate-opacity" onclick="aboutUsModalClose('<?php echo $modal_id ?>')">
    <div class="modal-content w3-card-4">
        <header class="modal-container modal-top-bar">
            <!-- what im trying to fix is literally trying to make the modal not disappear when i click on the actual modal box but only when pressing outside of the popup, how to do this im not too sure rip -->
            <span id="<?php echo '...'. $modal_id ?>" onclick="var event = arguments[0] || window.event; event.stopPropagation(); event.stopImmediatePropagation(); document.getElementById('<?php echo $modal_id ?>').style.display='none'" class="exit-button large-font display-topright">
                &times;
            </span>
            <h3><?php echo esc_html($args['person_name']) ?></h3>
        </header>
        <div class="modal-container">
            <div class="modal-image-div">

            </div> 
            <div class="modal-text-div">
                <p>Some text..</p>
                <p>Some text..</p>
            </div>   
        </div>
        <footer class="modal-container modal-bottom-bar">
            <p>Modal Footer</p>
        </footer>
    </div>
</div>
