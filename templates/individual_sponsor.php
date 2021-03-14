<?php

/**
 * Template Name: Individual Sponsor
 *
 * This is the template for each of the sponsor boxes
 *
 * @package busiway
 */

?>


<a class="cardLink" target="_blank" href=<?php echo esc_html($args['site_url'])?>>
    <div id=<?php echo esc_html($args['div_id']) ?> class="SponsorTile <?php if ($args['detail'] == "") echo "SponsorTile--noDetail"; ?>">
        <div class="SponsorTile-imgContainer">
            <!-- might be able to be done better -->
            <img src=<?php echo 'https://unswfinsoc.org.au/wp-content/uploads/'.esc_html($args['image_file']) ?> alt=<?php echo esc_html($args['name']) ?>>
        </div>
        <!-- <div class="SponsorTile-text">
            <div class="SponsorTile-text-title">
                <h1 class="display-4">
                    <?php echo esc_html($args['name']) ?>
                </h1>
            </div>
            <div class="SponsorTile-text-content" data-content>
                <?php echo esc_html($args['detail']) ?>
            </div>
            <div class="SponsorTile-text-footer">
                <a class="SponsorTile-text-footer-link" href="<%= site_url %>">Visit Site</a>
                <span class="SponsorTile-text-footer-arrow glyphicon glyphicon-chevron-down" aria-hidden="true" data-arrow="<%= id %>-arrow"></span>
            </div>
        </div> -->
    </div>
</a>

