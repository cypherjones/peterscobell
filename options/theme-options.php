<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
  register_setting( 'ten_options', 'ten_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
  add_theme_page( __( 'Theme Options', 'tentheme' ), __( 'Theme Options', 'tentheme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

/**
 * Create arrays for our select and radio options
 */
$select_options = array(
  '0' => array(
    'value' =>  '0',
    'label' => __( 'Zero', 'tentheme' )
  ),
  '1' => array(
    'value' =>  '1',
    'label' => __( 'One', 'tentheme' )
  ),
  '2' => array(
    'value' => '2',
    'label' => __( 'Two', 'tentheme' )
  ),
  '3' => array(
    'value' => '3',
    'label' => __( 'Three', 'tentheme' )
  ),
  '4' => array(
    'value' => '4',
    'label' => __( 'Four', 'tentheme' )
  ),
  '5' => array(
    'value' => '3',
    'label' => __( 'Five', 'tentheme' )
  )
);

$radio_options = array(
  'yes' => array(
    'value' => 'yes',
    'label' => __( 'Yes', 'tentheme' )
  ),
  'no' => array(
    'value' => 'no',
    'label' => __( 'No', 'tentheme' )
  ),
  'maybe' => array(
    'value' => 'maybe',
    'label' => __( 'Maybe', 'tentheme' )
  )
);

/**
 * Create the options page
 */
function theme_options_do_page() {
  global $select_options, $radio_options;

  if ( ! isset( $_REQUEST['settings-updated'] ) )
    $_REQUEST['settings-updated'] = false;

  ?>
  <div class="wrap">
    <?php screen_icon(); echo "<h2>" . wp_get_theme() . __( ' Theme Options', 'tentheme' ) . "</h2>"; ?>

    <?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
    <div class="updated fade"><p><strong><?php _e( 'Options saved', 'tentheme' ); ?></strong></p></div>
    <?php endif; ?>

    <form method="post" action="options.php">
      <?php settings_fields( 'ten_options' ); ?>
      <?php $options = get_option( 'ten_theme_options' ); ?>

      <table class="form-table">

        <tr align="center"><th scope="row"><h3><?php _e( 'Phone and Email', 'tentheme' ); ?></h3></th></tr>

        <tr valign="top">
          <th scope="row"><?php _e( 'Email', 'tentheme' ); ?></th>
          <td>
            <input id="ten_theme_options[email_url]" class="regular-text" type="text" name="ten_theme_options[email_url]" value="<?php esc_attr_e( $options['email_url'] ); ?>" />
            <label class="description" for="ten_theme_options[email_url]"><?php // _e( 'username', 'tentheme' ); ?></label>
          </td>
        </tr>

        <tr valign="top">
          <th scope="row"><?php _e( 'Phone', 'tentheme' ); ?></th>
          <td>
            <input id="ten_theme_options[phone_number]" class="regular-text" type="text" name="ten_theme_options[phone_number]" value="<?php esc_attr_e( $options['phone_number'] ); ?>" />
            <label class="description" for="ten_theme_options[phone_number]"><?php // _e( 'username', 'tentheme' ); ?></label>
          </td>
        </tr>

        <tr align="center"><th scope="row"><h3><?php _e( 'Social Media Links', 'tentheme' ); ?></h3></th></tr>
        
        <tr valign="top">
          <th scope="row"><?php _e( 'Facebook URL', 'tentheme' ); ?></th>
          <td>
            <input id="ten_theme_options[facebook_url]" class="regular-text" type="text" name="ten_theme_options[facebook_url]" value="<?php esc_attr_e( $options['facebook_url'] ); ?>" />
            <label class="description" for="ten_theme_options[facebook_url]"><?php // _e( 'username', 'tentheme' ); ?></label>
          </td>
        </tr>

        <tr>
          <th scope="row"><?php _e( 'Facebook Label', 'tentheme' ); ?></th>
          <td>
            <input id="ten_theme_options[facebook_label]" class="regular-text" type="text" name="ten_theme_options[facebook_label]" value="<?php esc_attr_e( $options['facebook_label'] ); ?>" />
            <label class="description" for="ten_theme_options[facebook_label]"><?php //_e( 'username', 'tentheme' ); ?></label>
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'Twitter URL', 'tentheme' ); ?></th>
          <td>
            <input id="ten_theme_options[twitter_url]" class="regular-text" type="text" name="ten_theme_options[twitter_url]" value="<?php esc_attr_e( $options['twitter_url'] ); ?>" />
            <label class="description" for="ten_theme_options[twitter_url]"><?php //_e( 'username', 'tentheme' ); ?></label>
          </td>
        </tr>
        
        <tr valign="top"><th scope="row"><?php _e( 'Twitter Label', 'tentheme' ); ?></th>
          <td>
            <input id="ten_theme_options[twitter_label]" class="regular-text" type="text" name="ten_theme_options[twitter_label]" value="<?php esc_attr_e( $options['twitter_label'] ); ?>" />
            <label class="description" for="ten_theme_options[twitter_label]"><?php //_e( 'username', 'tentheme' ); ?></label>
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'Instagram URL', 'tentheme' ); ?></th>
          <td>
            <input id="ten_theme_options[instagram_url]" class="regular-text" type="text" name="ten_theme_options[instagram_url]" value="<?php esc_attr_e( $options['instagram_url'] ); ?>" />
            <label class="description" for="ten_theme_options[instagram_url]"><?php //_e( 'username', 'tentheme' ); ?></label>
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'Instagram Label', 'tentheme' ); ?></th>
          <td>
            <input id="ten_theme_options[instagram_label]" class="regular-text" type="text" name="ten_theme_options[instagram_label]" value="<?php esc_attr_e( $options['instagram_label'] ); ?>" />
            <label class="description" for="ten_theme_options[instagram_label]"><?php //_e( 'username', 'tentheme' ); ?></label>
          </td>
        </tr>
        
        <tr valign="top"><th scope="row"><?php _e( 'Youtube', 'tentheme' ); ?></th>
          <td>
            <input id="ten_theme_options[youtube_url]" class="regular-text" type="text" name="ten_theme_options[googlep_url]" value="<?php esc_attr_e( $options['youtube_url'] ); ?>" />
            <label class="description" for="ten_theme_options[youtube_url]"><?php //_e( 'username', 'tentheme' ); ?></label>
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'Youtube Label', 'tentheme' ); ?></th>
          <td>
            <input id="ten_theme_options[youtube_label]" class="regular-text" type="text" name="ten_theme_options[youtube_label]" value="<?php esc_attr_e( $options['youtube_label'] ); ?>" />
            <label class="description" for="ten_theme_options[youtube_label]"><?php //_e( 'username', 'tentheme' ); ?></label>
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'Flickr URL', 'tentheme' ); ?></th>
          <td>
            <input id="ten_theme_options[flickr_url]" class="regular-text" type="text" name="ten_theme_options[flickr_url]" value="<?php esc_attr_e( $options['flickr_url'] ); ?>" />
            <label class="description" for="ten_theme_options[flickr_url]"><?php //_e( 'username', 'tentheme' ); ?></label>
          </td>
        </tr>
          
        <tr valign="top"><th scope="row"><?php _e( 'Flickr Label', 'tentheme' ); ?></th>
          <td>
            <input id="ten_theme_options[flickr_label]" class="regular-text" type="text" name="ten_theme_options[flickr_label]" value="<?php esc_attr_e( $options['flickr_label'] ); ?>" />
            <label class="description" for="ten_theme_options[flickr_label]"><?php //_e( 'username', 'tentheme' ); ?></label>
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'Vimeo URL', 'tentheme' ); ?></th>
          <td>
            <input id="ten_theme_options[vimeo_url]" class="regular-text" type="text" name="ten_theme_options[vimeo_url]" value="<?php esc_attr_e( $options['vimeo_url'] ); ?>" />
            <label class="description" for="ten_theme_options[vimeo_url]"><?php //_e( 'username', 'tentheme' ); ?></label>
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'Vimeo URL Label', 'tentheme' ); ?></th>
          <td>
            <input id="ten_theme_options[vimeo_label]" class="regular-text" type="text" name="ten_theme_options[vimeo_label]" value="<?php esc_attr_e( $options['vimeo_label'] ); ?>" />
            <label class="description" for="ten_theme_options[vimeo_label]"><?php //_e( 'username', 'tentheme' ); ?></label>
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'iTunes URL', 'tentheme' ); ?></th>
          <td>
            <input id="ten_theme_options[itunes_url]" class="regular-text" type="text" name="ten_theme_options[itunes_url]" value="<?php esc_attr_e( $options['itunes_url'] ); ?>" />
            <label class="description" for="ten_theme_options[itunes_url]"><?php //_e( 'username', 'tentheme' ); ?></label>
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'iTunes URL Label', 'tentheme' ); ?></th>
          <td>
            <input id="ten_theme_options[itunes_label]" class="regular-text" type="text" name="ten_theme_options[itunes_label]" value="<?php esc_attr_e( $options['itunes_label'] ); ?>" />
            <label class="description" for="ten_theme_options[itunes_label]"><?php //_e( 'username', 'tentheme' ); ?></label>
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'Cd Baby URL', 'tentheme' ); ?></th>
          <td>
            <input id="ten_theme_options[cdbaby_url]" class="regular-text" type="text" name="ten_theme_options[cdbaby_url]" value="<?php esc_attr_e( $options['cdbaby_url'] ); ?>" />
            <label class="description" for="ten_theme_options[cdbaby_url]"><?php //_e( 'username', 'tentheme' ); ?></label>
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'CD Baby URL Label', 'tentheme' ); ?></th>
          <td>
            <input id="ten_theme_options[cdbaby_label]" class="regular-text" type="text" name="ten_theme_options[cdbaby_label]" value="<?php esc_attr_e( $options['cdbaby_label'] ); ?>" />
            <label class="description" for="ten_theme_options[cdbaby_label]"><?php //_e( 'username', 'tentheme' ); ?></label>
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'Soundcloud URL', 'tentheme' ); ?></th>
          <td>
            <input id="ten_theme_options[soundcloud_url]" class="regular-text" type="text" name="ten_theme_options[soundcloud_url]" value="<?php esc_attr_e( $options['soundcloud_url'] ); ?>" />
            <label class="description" for="ten_theme_options[soundcloud_url]"><?php //_e( 'username', 'tentheme' ); ?></label>
          </td>
        </tr>

        <tr valign="top"><th scope="row"><?php _e( 'Soundcloud URL Label', 'tentheme' ); ?></th>
          <td>
            <input id="ten_theme_options[soundcloud_label]" class="regular-text" type="text" name="ten_theme_options[soundcloud_label]" value="<?php esc_attr_e( $options['soundcloud_label'] ); ?>" />
            <label class="description" for="ten_theme_options[soundcloud_label]"><?php //_e( 'username', 'tentheme' ); ?></label>
          </td>
        </tr>
  
        
        <!--<tr align="center"><th scope="row"><h3><?php _e( 'Contact Information', 'tentheme' ); ?></h3></th></tr>
        
        <tr valign="top"><th scope="row"><?php _e( 'Contact Phone Number', 'tentheme' ); ?></th>
          <td>
            <input id="ten_theme_options[contact_number]" class="regular-text" type="text" name="ten_theme_options[contact_number]" value="<?php esc_attr_e( $options['contact_number'] ); ?>" />
            <label class="description" for="ten_theme_options[contact_number]"><?php //_e( 'username', 'tentheme' ); ?></label>
          </td>
        </tr> 

        <tr valign="top"><th scope="row"><?php _e( 'Contact Email Address', 'tentheme' ); ?></th>
          <td>
            <input id="ten_theme_options[contact_email]" class="regular-text" type="text" name="ten_theme_options[contact_email]" value="<?php esc_attr_e( $options['contact_email'] ); ?>" />
            <label class="description" for="ten_theme_options[contact_email]"><?php //_e( 'username', 'tentheme' ); ?></label>
          </td>
        </tr>-->
        
        <tr align="center"><th scope="row"><h3><?php _e( 'Tagline Information', 'tentheme' ); ?></h3></th></tr>
            <tr valign="top"><th scope="row"><?php _e( 'Top Tagline', 'tentheme' ); ?></th>
          <td>
          <textarea id="ten_theme_options[site_tagline]" class="regluar-text" cols="70" rows="10" name="ten_theme_options[site_tagline]"><?php echo esc_textarea( $options['site_tagline'] ); ?></textarea>
          <label class="description" for="ten_theme_options[site_tagline]"><?php //_e( 'username', 'tentheme' ); ?></label>
          </td>
        </tr>


        <tr align="center"><th scope="row"><h3><?php _e( 'Contact Information', 'tentheme' ); ?></h3></th></tr>
              <tr valign="top"><th scope="row"><?php _e( 'Contact Information', 'tentheme' ); ?></th>
          <td>
          <textarea id="ten_theme_options[contact_information]" class="regluar-text" cols="70" rows="10" name="ten_theme_options[contact_information]"><?php echo esc_textarea( $options['contact_information'] ); ?></textarea>
          <label class="description" for="ten_theme_options[contact_information]"><?php //_e( 'username', 'tentheme' ); ?></label>
          </td>
        </tr>


        
                                      
                </table>
                
      <p class="submit">
        <input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'tentheme' ); ?>" />
      </p>
    </form>
  </div>
  <?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {
  global $select_options, $radio_options;

  // Our checkbox value is either 0 or 1
  if ( ! isset( $input['option1'] ) )
    $input['option1'] = null;
  $input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );

  // Say our text option must be safe text with no HTML tags
  //$input['sometext'] = wp_filter_nohtml_kses( $input['sometext'] );

  // Our select option must actually be in our array of select options
//  if ( ! array_key_exists( $input['selectinput'], $select_options ) )
//    $input['selectinput'] = null;

  // Our radio option must actually be in our array of radio options
//  if ( ! isset( $input['radioinput'] ) )
//    $input['radioinput'] = null;
//  if ( ! array_key_exists( $input['radioinput'], $radio_options ) )
//    $input['radioinput'] = null;

  // Say our textarea option must be safe text with the allowed tags for posts
  //$input['sometextarea'] = wp_filter_post_kses( $input['sometextarea'] );

  return $input;
}

// adapted from http://planetozh.com/blog/2009/05/handling-plugins-options-in-wordpress-28-with-register_setting/

?>