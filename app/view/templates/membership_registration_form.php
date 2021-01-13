<?php if ( is_ms_registration_form_title_exists() ) : ?>
        <legend><?php echo get_ms_registration_form_title(); ?></legend>
<?php endif; ?>

<?php

echo get_ms_registration_form_fields();

echo '<div class="ms-extra-fields">';

/**
 * Trigger default WordPress action to allow other plugins
 * to add custom fields to the registration form.
 *
 * signup_extra_fields Defined in wp-signup.php which is used
 *              for Multisite signup process.
 *
 * register_form Defined in wp-login.php which is only used for
 *              Single site registration process.
 *
 * @since  1.0.0
 */
ms_registration_form_extra_fields();

?>
<!-- Adding telephone field here -->
<div class="ms-form-element ms-form-element-telephone">
        <span class="wpmui-wrapper wpmui-input-wrapper ">
                <label for="telephone" class="wpmui-field-label  wpmui-label-telephone ">Telephone </label>
                <input class="wpmui-field-input wpmui-text  wpmui-input-telephone" type="text" id="telephone" name="telephone" value="">
        </span>
</div>
<!-- Adding telephone field here/End -->
<?php

echo '</div>';

echo get_ms_registration_form_register_button();

ms_registration_form_error();

/**
 * This hook is intended to output hidden fields or JS code
 * at the end of the form tag.
 *
 * @since  1.0.1.0
 */
do_action( 'ms_shortcode_register_form_end', ms_registration_form_obj() );
?>
<br><br>
<?php
if ( is_ms_registration_form_login_link_exists() ) {
        echo get_ms_registration_form_login_link();
}