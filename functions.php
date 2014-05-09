<?php
// functionalty incoming
/* Disable WordPress jQuery */
     wp_deregister_script('jquery');
     /* Or Use Google CDN Version */
     wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js');
     /* Enable New Script */
     wp_enqueue_script('jquery');

 // Change excerpt length
     // change excerpy length here
    function custom_excerpt_length( $length ) {
        return 20;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// more theme stuff.
register_nav_menus(); 
add_theme_support('post-thumbnails');

//remove auto p tags
remove_filter( 'the_content', 'wpautop' );

// Theme options[may be moved later]
add_option('twitter_username', "");
add_option('facebook_username', "");
// update_option('twitter_username', 'marinkd');

function civ_slider_options_page(){
  add_options_page('Theme Slider Options', 'Theme Slider Options', 8, 'civ_slider', 'civ_slider_options');
}
add_action('admin_menu', 'civ_slider_options_page');

function civ_slider_options(){
?>
<?php
  //changing post order on submit

  if (isset($_POST['twitter_username'])) {
    update_option('twitter_username', $_POST['twitter_username']);
  }
  if (isset($_POST['facebook_username'])) {
  update_option('facebook_username', $_POST['facebook_username']);
  }
  // Add your Twitter Username here
  ?>

Set usernames.
<style type="text/css">
form label{width: 140px;}
</style>

<form method="post">
  <label>Twitter Username: </label><input type="text" name="twitter_username" value="<?php if(get_option('twitter_username')){echo get_option('twitter_username');}?>" /><br>
  <label>Facebook Username: </label><input type="text" name="facebook_username" value="<?php if(get_option('facebook_username')){echo get_option('facebook_username');}?>" /><br>
  <input type="submit"/>
</form> 
<?php 
    }
?>