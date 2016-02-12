<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://github.com/mithereal
 * @since      1.0.0
 *
 * @package    Comet_Tools
 * @subpackage Comet_Tools/admin/partials
 */
?>

<div class="wrap">
    <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
    <div class="progress">
        <div class="progress-bar  progress-bar-striped active " role="progressbar" aria-valuenow="70"
             aria-valuemin="0" aria-valuemax="100" style="width:0%">
            <span>0% Complete</span>
        </div>
    </div>
    <div id="comet_count"></div>
    <form action="/" method="post">
        <?php
        settings_fields( $this->plugin_name );
        do_settings_sections( $this->plugin_name );
        submit_button();
        ?>
    </form>

</div>
