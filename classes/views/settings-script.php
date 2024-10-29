<script type="text/javascript">
    function custom_login_change() {
        var checked = jQuery('#basic_auth_settings\\[custom_login\\]').is(':checked');
        if ( checked ) {
            jQuery('#basic_auth_settings\\[login\\]').closest('tr').prev().show();
            jQuery('#basic_auth_settings\\[login\\]').closest('tr').show();
            jQuery('#basic_auth_settings\\[password\\]').closest('tr').show();
            jQuery('#basic_auth_settings\\[login\\]').prop('required',true);
            jQuery('#basic_auth_settings\\[password\\]').prop('required',true);
        }
        else {
            jQuery('#basic_auth_settings\\[login\\]').closest('tr').prev().hide();
            jQuery('#basic_auth_settings\\[login\\]').closest('tr').hide();
            jQuery('#basic_auth_settings\\[password\\]').closest('tr').hide();
            jQuery('#basic_auth_settings\\[login\\]').prop('required',false);
            jQuery('#basic_auth_settings\\[password\\]').prop('required',false);
        }
    }
	jQuery('#basic_auth_settings\\[password\\]').attr( 'autocomplete', 'new-password' );
	jQuery('#basic_auth_settings\\[custom_login\\]').change(function(){
	    custom_login_change();
    });
	jQuery(document).ready(function(){
        custom_login_change();
    });
</script>