(function( $ ) {
	'use strict';
    $(function() {

    $('#comet-import').on('click',function(e){

        e.preventDefault();
        $("input[id='comet_csv']").click();

        var x = $("input[id='comet_csv']").val();

        jQuery.ajax(
            "admin-ajax.php",
            {
                type: "POST",
                data: {
                    action: "comet_import",
                    data:  nonce
                },
                error:   handleError,
                success: handleSuccess
            }
        );

        function handleSuccess( data ) {
            //use data to update DOM as needed
        }

        function handleError( data ) {
            //handle the error and report the failure to the user in some way
        }
        $.ajax({
            url: "comet_import.php",
            type:"post",
            data:x,
        }).done(function(data) {
            $('.progress').show();
        });
    });
    });
	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */


})( jQuery );
