<?php
/**
 * Custom admin panel to access theme configs, content, layout, etc
 *
 * Eventually, some functionality here could be replaced by core features.
 *
 * @package MFYAH_2024
 */

function mfyah_register_custom_admin_panel() {
  // add_menu_page( $page_title:string, $menu_title:string, $capability:string, $menu_slug:string, $callback:callable, $icon_url:string, $position:integer|float|null )
	add_menu_page(
		__( 'MFYAH 2024 Theme Options', 'textdomain' ),
		'MFYAH 2024 Theme',
		'manage_options',
		'mfyah-2024-theme-options',
		'mfyah_2024_options_page',
		'dashicons-admin-generic',
    100
	);

  // add_submenu_page( $parent_slug:string, $page_title:string, $menu_title:string, $capability:string, $menu_slug:string, $callback:callable, $position:integer|float|null )
  add_submenu_page( 'mfyah-2024-theme-options', 'MFYAH Header Configuration', 'Home Header', 'manage_options', 'mfyah-2024-theme-options-home-header', 'mfyah_2024_options_page_home_header' );
  add_submenu_page( 'mfyah-2024-theme-options', 'MFYAH Social Links', 'Social Links', 'manage_options', 'mfyah-2024-theme-options-social-links', 'mfyah_2024_options_page_social_links' );
  add_submenu_page( 'mfyah-2024-theme-options', 'MFYAH API Keys', 'API Keys', 'manage_options', 'mfyah-2024-theme-options-api-keys', 'mfyah_2024_options_page_api_keys' );
}
add_action( 'admin_menu', 'mfyah_register_custom_admin_panel' );

 function mfyah_2024_options_page() {
  ?>

    <div class="wrap" style="padding-bottom:3rem;">
      <div class="page-header" style="padding-top:1.35rem;">
        <div style="text-transform:uppercase;font-weight:bold; font-size:.9rem; color: #fff; letter-spacing:1px; background-color: rgb(13, 143, 132); width: fit-content; padding:.5rem 1rem; border-radius:.35rem;">MFYAH 2024 Theme</div>
        <h1 style="font-size:2.5rem; border-bottom: 2px dotted #cdcdcd; padding: 0 0 .65rem 0;">Theme Settings and Configuration</h1>
      </div>

      <!-- Welcome -->
      <div style="background-color:#f7f8fa;padding:3rem;margin:1rem auto;">
        <div style="max-width:640px;">
          <h2 style="margin-top:1rem; text-transform:uppercase;font-weight:bold;letter-spacing:1px;">About the MFYAH 2024 Theme</h2>
          <p>MFYAH 2024 Theme is a custom-made, tailor-fit Wordpress theme for the Mass For You At Home website produced by the ACBC Media and Communications team. </p>
        </div>
      </div>

    </div>

    <?php
 }

 function mfyah_2024_options_page_api_keys() {
  
  // add Youtube API key
  if ( !get_option( 'mfyah2024_youtube_api_key' )) {
    add_option( 'mfyah2024_youtube_api_key', 'xxxx' );
  }
  
  // add Youtube playlist ID
  if ( !get_option( 'mfyah2024_youtube_playlist' )) {
    add_option( 'mfyah2024_youtube_playlist', 'xxxx' );
  }
  
  // add Stripe API key
  if ( !get_option( 'mfyah2024_stripe_api_key' )) {
    add_option( 'mfyah2024_stripe_api_key', 'xxxx' );
  }

  if ( isset($_POST['mfyah2024_submit_youtube_options']) && $_POST['hidden_submit_trigger'] == 'Y' ) {
    update_option( 'mfyah2024_youtube_api_key', __($_POST['mfyah2024_youtube_api_key_form_data']) );
    update_option( 'mfyah2024_youtube_playlist', __($_POST['mfyah2024_youtube_playlist_form_data']) );
    update_option( 'mfyah2024_stripe_api_key', __($_POST['mfyah2024_stripe_api_key_form_data']) );
    ?>

      <div class="card" style="
        background-color: #e1f8f5;
        border-radius: .5rem;
        border: 2px solid #83e2d6;
        padding: 1rem 1.5rem;
        max-width: 98%;
      "
      ><?php _e("Settings saved successfully.", 'mfyah-2024' ); ?></div>

    <?php
  }

  ?>

    <div class="wrap" style="padding-bottom:3rem;">
      <div class="page-header" style="padding-top:1.35rem;">
        <div style="text-transform:uppercase;font-weight:bold; font-size:.9rem; color: #fff; letter-spacing:1px; background-color: rgb(13, 143, 132); width: fit-content; padding:.5rem 1rem; border-radius:.35rem;">MFYAH 2024 Theme</div>
        <h1 style="font-size:2.5rem; border-bottom: 2px dotted #cdcdcd; padding: 0 0 .65rem 0;">API Keys and Options</h1>
      </div>
      
      <!-- Options Form -->
      <div>
        <form name="mfyah-youtube-api-keys" method="post" action="">
          <input type="hidden" name="hidden_submit_trigger" value="Y">
          
          <!-- Youtube API -->
          <div style="background-color:#f7f8fa;padding:3rem;margin:1rem auto;">
            <h2 style="margin-top:1rem; text-transform:uppercase;font-weight:bold;letter-spacing:1px;">Youtube API</h2>
            <p>The Youtube API key and playlist ID are required to retrieve and display videos from the MFYAH Youtube channel. You can find these option variables used here: theme/inc/mfyah-2024-custom-functions.php</p>
            <table class="form-table" role="presentation">
              <tbody>
                <tr>
                  <th scope="row">
                    <label for="mfyah2024_youtube_api_key_form_data"><?php _e("Youtube API Key", 'mfyah-2024' ); ?></label>
                  </th>
                  <td>
                    <input type="text" name="mfyah2024_youtube_api_key_form_data" value="<?php echo get_option( 'mfyah2024_youtube_api_key' ); ?>" maxlength="50" size="50" onkeydown="return /[a-zA-Z0-9_-]/i.test(event.key)" />
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <label for="mfyah2024_youtube_playlist_form_data"><?php _e("MFYAH Playlist ID", 'mfyah-2024' ); ?></label>
                  </th>
                  <td>
                    <input type="text" name="mfyah2024_youtube_playlist_form_data"  value="<?php echo get_option( 'mfyah2024_youtube_playlist' ); ?>" maxlength="40" size="40" onkeydown="return /[a-zA-Z0-9_-]/i.test(event.key)" />
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <!-- Stripe API key -->
          <div style="background-color:#f7f8fa;padding:3rem;margin:1rem auto;">
          <h2 style="margin-top:1rem; text-transform:uppercase;font-weight:bold;letter-spacing:1px;">Stripe API</h2>
            <p>The Youtube API key and playlist ID are required to retrieve and display videos from the MFYAH Youtube channel.</p>
            <table class="form-table" role="presentation">
              <tbody>
                <tr>
                  <th scope="row">
                    <label for="mfyah2024_stripe_api_key_form_data"><?php _e("Stripe API Key", 'mfyah-2024' ); ?></label>
                  </th>
                  <td>
                    <input disabled type="text" name="mfyah2024_stripe_api_key_form_data" value="<?php echo get_option( 'mfyah2024_stripe_api_key' ); ?>" maxlength="50" size="50" onkeydown="return /[a-zA-Z0-9_-]/i.test(event.key)" />
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <!-- submit button -->
          <p class="submit" style="margin-top:4rem;">
            <input type="submit" name="mfyah2024_submit_youtube_options" class="button-primary" value="<?php esc_attr_e('Update Options') ?>" style="background: #141616;
              padding: .65rem 1.5rem;
              text-transform: uppercase;
              font-weight: bold;
              letter-spacing: .5px;
              border: none;
            }" />
          </p>

        </form>
      </div>

    </div>
    <?php
 }

 function mfyah_2024_options_page_home_header() {
  
  // add Youtube API key
  if ( !get_option( 'mfyah2024_youtube_api_key' )) {
    add_option( 'mfyah2024_youtube_api_key', 'xxxx' );
  }
  
  // add Youtube playlist ID
  if ( !get_option( 'mfyah2024_youtube_playlist' )) {
    add_option( 'mfyah2024_youtube_playlist', 'xxxx' );
  }
  
  // add Stripe API key
  if ( !get_option( 'mfyah2024_stripe_api_key' )) {
    add_option( 'mfyah2024_stripe_api_key', 'xxxx' );
  }

  if ( isset($_POST['mfyah2024_submit_youtube_options']) && $_POST['hidden_submit_trigger'] == 'Y' ) {
    update_option( 'mfyah2024_youtube_api_key', __($_POST['mfyah2024_youtube_api_key_form_data']) );
    update_option( 'mfyah2024_youtube_playlist', __($_POST['mfyah2024_youtube_playlist_form_data']) );
    update_option( 'mfyah2024_stripe_api_key', __($_POST['mfyah2024_stripe_api_key_form_data']) );
    ?>

      <div class="card" style="
        background-color: #e1f8f5;
        border-radius: .5rem;
        border: 2px solid #83e2d6;
        padding: 1rem 1.5rem;
        max-width: 98%;
      "
      ><?php _e("Settings saved successfully.", 'mfyah-2024' ); ?></div>

    <?php
  }

  ?>

    <div class="wrap" style="padding-bottom:3rem;">
      <div class="page-header" style="padding-top:1.35rem;">
        <div style="text-transform:uppercase;font-weight:bold; font-size:.9rem; color: #fff; letter-spacing:1px; background-color: rgb(13, 143, 132); width: fit-content; padding:.5rem 1rem; border-radius:.35rem;">MFYAH 2024 Theme</div>
        <h1 style="font-size:2.5rem; border-bottom: 2px dotted #cdcdcd; padding: 0 0 .65rem 0;">Home Header Configuration</h1>
      </div>
      
      <!-- Options Form -->
      <div>
        <form name="mfyah-youtube-api-keys" method="post" action="">
          <input type="hidden" name="hidden_submit_trigger" value="Y">
          
          <!-- Youtube API -->
          <div style="background-color:#f7f8fa;padding:3rem;margin:1rem auto;">
            <h2 style="margin-top:1rem; text-transform:uppercase;font-weight:bold;letter-spacing:1px;">Youtube API</h2>
            <p>The Youtube API key and playlist ID are required to retrieve and display videos from the MFYAH Youtube channel. You can find these option variables used here: theme/inc/mfyah-2024-custom-functions.php</p>
            <table class="form-table" role="presentation">
              <tbody>
                <tr>
                  <th scope="row">
                    <label for="mfyah2024_youtube_api_key_form_data"><?php _e("Youtube API Key", 'mfyah-2024' ); ?></label>
                  </th>
                  <td>
                    <input type="text" name="mfyah2024_youtube_api_key_form_data" value="<?php echo get_option( 'mfyah2024_youtube_api_key' ); ?>" maxlength="50" size="50" onkeydown="return /[a-zA-Z0-9_-]/i.test(event.key)" />
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <label for="mfyah2024_youtube_playlist_form_data"><?php _e("MFYAH Playlist ID", 'mfyah-2024' ); ?></label>
                  </th>
                  <td>
                    <input type="text" name="mfyah2024_youtube_playlist_form_data"  value="<?php echo get_option( 'mfyah2024_youtube_playlist' ); ?>" maxlength="40" size="40" onkeydown="return /[a-zA-Z0-9_-]/i.test(event.key)" />
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <!-- Stripe API key -->
          <div style="background-color:#f7f8fa;padding:3rem;margin:1rem auto;">
          <h2 style="margin-top:1rem; text-transform:uppercase;font-weight:bold;letter-spacing:1px;">Stripe API</h2>
            <p>The Youtube API key and playlist ID are required to retrieve and display videos from the MFYAH Youtube channel.</p>
            <table class="form-table" role="presentation">
              <tbody>
                <tr>
                  <th scope="row">
                    <label for="mfyah2024_stripe_api_key_form_data"><?php _e("Stripe API Key", 'mfyah-2024' ); ?></label>
                  </th>
                  <td>
                    <input type="text" name="mfyah2024_stripe_api_key_form_data" value="<?php echo get_option( 'mfyah2024_stripe_api_key' ); ?>" maxlength="50" size="50" onkeydown="return /[a-zA-Z0-9_-]/i.test(event.key)" />
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <p class="submit" style="margin-top:4rem;">
            <input type="submit" name="mfyah2024_submit_youtube_options" class="button-primary" value="<?php esc_attr_e('Update Options') ?>" style="background: #141616;
              padding: .65rem 1.5rem;
              text-transform: uppercase;
              font-weight: bold;
              letter-spacing: .5px;
              border: none;
            }" />
          </p>

        </form>
      </div>

    </div>
    <?php
 }

 function mfyah_2024_options_page_social_links() {
  
  // add Youtube link option
  if ( !get_option( 'mfyah2024_link_youtube' )) {
    add_option( 'mfyah2024_link_youtube', 'xxxx' );
  }
  
  // add Facebook link option
  if ( !get_option( 'mfyah2024_link_facebook' )) {
    add_option( 'mfyah2024_link_facebook', 'xxxx' );
  }
  
  // add 10 link option
  if ( !get_option( 'mfyah2024_link_ten' )) {
    add_option( 'mfyah2024_link_ten', 'xxxx' );
  }

  if ( isset($_POST['mfyah2024_submit_social_links']) && $_POST['hidden_submit_trigger'] == 'Y' ) {
    update_option( 'mfyah2024_link_youtube', __($_POST['mfyah2024_link_youtube_form_data']) );
    update_option( 'mfyah2024_link_facebook', __($_POST['mfyah2024_link_facebook_form_data']) );
    update_option( 'mfyah2024_link_ten', __($_POST['mfyah2024_link_ten_form_data']) );
    ?>

      <div class="card" style="
        background-color: #e1f8f5;
        border-radius: .5rem;
        border: 2px solid #83e2d6;
        padding: 1rem 1.5rem;
        max-width: 98%;
      "
      ><?php _e("Settings saved successfully.", 'mfyah-2024' ); ?></div>

    <?php
  }

  ?>

    <div class="wrap" style="padding-bottom:3rem;">
      <div class="page-header" style="padding-top:1.35rem;">
        <div style="text-transform:uppercase;font-weight:bold; font-size:.9rem; color: #fff; letter-spacing:1px; background-color: rgb(13, 143, 132); width: fit-content; padding:.5rem 1rem; border-radius:.35rem;">Social Links</div>
        <h1 style="font-size:2.5rem; border-bottom: 2px dotted #cdcdcd; padding: 0 0 .65rem 0;">Social Links</h1>
      </div>
      
      <!-- Options Form -->
      <div>
        <form name="mfyah-social-links" method="post" action="">
          <input type="hidden" name="hidden_submit_trigger" value="Y">
          
          <!-- Youtube API -->
          <div style="background-color:#f7f8fa;padding:3rem;margin:1rem auto;">
            <h2 style="margin-top:1rem; text-transform:uppercase;font-weight:bold;letter-spacing:1px;">Main Platforms</h2>
            <p>Here are the links to MFYAH's primary broadcasting channels.</p>
            <table class="form-table" role="presentation">
              <tbody>
                <tr>
                  <th scope="row">
                    <label for="mfyah2024_link_youtube_form_data"><?php _e("Youtube", 'mfyah-2024' ); ?></label>
                  </th>
                  <td>
                    <input type="text" name="mfyah2024_link_youtube_form_data" value="<?php echo get_option( 'mfyah2024_link_youtube' ); ?>" maxlength="50" size="50" />
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <label for="mfyah2024_link_facebook_form_data"><?php _e("Facebook", 'mfyah-2024' ); ?></label>
                  </th>
                  <td>
                    <input type="text" name="mfyah2024_link_facebook_form_data"  value="<?php echo get_option( 'mfyah2024_link_facebook' ); ?>" maxlength="40" size="40" />
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <label for="mfyah2024_link_ten_form_data"><?php _e("Ten", 'mfyah-2024' ); ?></label>
                  </th>
                  <td>
                    <input type="text" name="mfyah2024_link_ten_form_data"  value="<?php echo get_option( 'mfyah2024_link_ten' ); ?>" maxlength="40" size="40" />
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <p class="submit" style="margin-top:4rem;">
            <input type="submit" name="mfyah2024_social_links" class="button-primary" value="<?php esc_attr_e('Update Options') ?>" style="background: #141616;
              padding: .65rem 1.5rem;
              text-transform: uppercase;
              font-weight: bold;
              letter-spacing: .5px;
              border: none;
            }" />
          </p>

        </form>
      </div>

    </div>
    <?php
 }