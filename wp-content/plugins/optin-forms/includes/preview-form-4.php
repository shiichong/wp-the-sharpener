<?php ?>
			<div id="optinforms-form4-container">
                            <div id="optinforms-form4" style="background:<?php echo optinforms_form4_default_background(); ?>; border-color:<?php echo optinforms_form4_default_border(); ?>">
                                    <div id="optinforms-form4-title" style="font-family:<?php echo optinforms_form4_default_title_font(); ?>; font-size:<?php echo optinforms_form4_default_title_size(); ?>; line-height:<?php echo optinforms_form4_default_title_size(); ?>; color:<?php echo optinforms_form4_default_title_color(); ?>; <?php if (get_option('optinforms_form4_hide_title')== '1') { echo 'display:none;'; } ?>"><?php echo do_shortcode( optinforms_form4_default_title() ); ?></div><!--optinforms-form4-title-->
                                    <div id="optinforms-form4-subtitle" style="font-family:<?php echo optinforms_form4_default_subtitle_font(); ?>; font-size:<?php echo optinforms_form4_default_subtitle_size(); ?>; line-height: <?php echo optinforms_form4_default_subtitle_size(); ?>; color: <?php echo optinforms_form4_default_subtitle_color(); ?>; <?php if (get_option('optinforms_form4_hide_subtitle')== '1') { echo 'display:none;'; } ?>"><?php echo do_shortcode( optinforms_form4_default_subtitle() ); ?></div><!--optinforms-form4-subtitle-->
                                    <input type="text" id="optinforms-form4-email-field" placeholder="<?php echo do_shortcode( optinforms_form4_default_email_field() ); ?>" style="font-family:<?php echo optinforms_form4_default_fields_font(); ?>; font-size:<?php echo optinforms_form4_default_fields_size(); ?>; color:<?php echo optinforms_form4_default_fields_color(); ?>" />
                                    <input type="button" id="optinforms-form4-button" value="<?php echo do_shortcode( optinforms_form4_default_button_text() ); ?>" style="font-family:<?php echo optinforms_form4_default_button_text_font(); ?>; font-size:<?php echo optinforms_form4_default_button_text_size(); ?>; color:<?php echo optinforms_form4_default_button_text_color(); ?>; background-color:<?php echo optinforms_form4_default_button_background(); ?>" />
                                    <div id="optinforms-form4-disclaimer" style="font-family:<?php echo optinforms_form4_default_disclaimer_font(); ?>; font-size:<?php echo optinforms_form4_default_disclaimer_size(); ?>; line-height: <?php echo optinforms_form4_default_disclaimer_size(); ?>; color:<?php echo optinforms_form4_default_disclaimer_color(); ?>; <?php if (get_option('optinforms_form4_hide_disclaimer')== '1') { echo 'display:none;'; } ?>"><?php echo do_shortcode( optinforms_form4_default_disclaimer() ); ?></div><!--optinforms-form4-disclaimer-->
                            </div><!--optinforms-form4-->
                        </div><!--optinforms-form4-container-->
                        <div class="clear"></div>

<?php ?>