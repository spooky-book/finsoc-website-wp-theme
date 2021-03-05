<?php

/**
 * Template Name: Individual Newsletter
 *
 * This is the template for each of the sponsor boxes
 *
 * @package busiway
 */

?>

<?php
$post = $args['post'];
?>
<li>
    <div class="newsletters-post-div shadow">
        <div class="newsletters-image-div">
            <?php
                if ( has_post_thumbnail( $post->ID ) ) {
                } else {
                    echo "doesnt have thumbnail";
                }
                $image_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'thumbnail' ); 
            ?>
            <!-- need to clean this up a little and make sure its not dead -->
            <img class="pdf-preview" src="<?php echo $image_url; ?>" alt="<?php echo "image preview for post " . the_title(); ?>">
        </div>
        <div class="newsletters-content-div">
            <div class="newsletters-text-div">
                <h3><?php echo the_title()?></h3>
                <p><?php echo the_content() ?></p>
            </div>
            <div class="newsletters-button-div centre">
                <?php
                    $custom_link = get_post_custom_values( "read_more_link", $post->ID );
                ?>
                <form class="newsletters-button-form" action="<?php echo $custom_link[0]; ?>" target="_blank">
                    <button type="submit" class="newsletters-button">Read more ></button>
                </form>
            </div>
        </div>
    </div>
</li>