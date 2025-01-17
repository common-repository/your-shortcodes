<div class="wrap">
	<h2 class="page-title">Your Shortcodes</h2>

	<section id="shortcode_list"></section>

	<script>
		jQuery( document ).ready( function($) {
			var data = {
				action: 'YOURSC_Ajax'
			};

			$.post( '<?php bloginfo('url') ?>/?shortcode_finder=shortcode_finder', null, function( response ) {
				$( response ).appendTo( $( '#shortcode_list' ) );
				YOURSC_launch();
			});
		});
	</script>

	<div id="donation_div">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIHJwYJKoZIhvcNAQcEoIIHGDCCBxQCAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYCEjSTRDM0HOImXmiTqLNelWOC4rW6mmN39E3JDujPx8uYuq4VVB2CIYKkRUcw+SzIDbYs1/dE2WaOmEv8zV4OPQUkyNXiimGOu+aWS+a4ByzP8D4+pacart+BAel2wa9WS+tOVPM5rs7fISmRz0Jshui2FBoHvSJ32zkVA/LwmmzELMAkGBSsOAwIaBQAwgaQGCSqGSIb3DQEHATAUBggqhkiG9w0DBwQI07WDq/OkN0GAgYD/kzE4VovQE7oG93EfC184zJb6AWz8KHOuf3+RGi5qooarv3h2PbAQE8We2awIRHdxzsO5aWtCj1+PWd7FjZ49q+5Uayn1tk47z5GZVUcuJSVhscaiZgci+SUj08n52LavNyMqv73Wc6LJw8E8pVLHTAzxTusTnr7e+5QuDZ2DLaCCA4cwggODMIIC7KADAgECAgEAMA0GCSqGSIb3DQEBBQUAMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbTAeFw0wNDAyMTMxMDEzMTVaFw0zNTAyMTMxMDEzMTVaMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbTCBnzANBgkqhkiG9w0BAQEFAAOBjQAwgYkCgYEAwUdO3fxEzEtcnI7ZKZL412XvZPugoni7i7D7prCe0AtaHTc97CYgm7NsAtJyxNLixmhLV8pyIEaiHXWAh8fPKW+R017+EmXrr9EaquPmsVvTywAAE1PMNOKqo2kl4Gxiz9zZqIajOm1fZGWcGS0f5JQ2kBqNbvbg2/Za+GJ/qwUCAwEAAaOB7jCB6zAdBgNVHQ4EFgQUlp98u8ZvF71ZP1LXChvsENZklGswgbsGA1UdIwSBszCBsIAUlp98u8ZvF71ZP1LXChvsENZklGuhgZSkgZEwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tggEAMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQEFBQADgYEAgV86VpqAWuXvX6Oro4qJ1tYVIT5DgWpE692Ag422H7yRIr/9j/iKG4Thia/Oflx4TdL+IFJBAyPK9v6zZNZtBgPBynXb048hsP16l2vi0k5Q2JKiPDsEfBhGI+HnxLXEaUWAcVfCsQFvd2A1sxRr67ip5y2wwBelUecP3AjJ+YcxggGaMIIBlgIBATCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwCQYFKw4DAhoFAKBdMBgGCSqGSIb3DQEJAzELBgkqhkiG9w0BBwEwHAYJKoZIhvcNAQkFMQ8XDTE1MDcwMTE4MzA1M1owIwYJKoZIhvcNAQkEMRYEFCJh5GF2KpY/JQ3jb45OOEFiwNdzMA0GCSqGSIb3DQEBAQUABIGAoeeDk0xs+ceeC2R1zttKBNwecOUcbGDQTsUqcjnXq9lrF7vzGbqR1dF3ZiRWcNWvQZwoY0y2JF7YSgRbl3Sa5+8iX/oW7OM32KOfSCYXHYAoIAKeleICrABVcrP9+qGBpHm6LsZ4Uc14APFMeKCC/5ln/HmkoI++ZQRlZCkYl6g=-----END PKCS7-----">
		<input type="image" id="donation_submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
	</div>

	<script>
	jQuery( document ).ready( function($) {
		$( '#donation_submit' ).click( function( e ) {
			e.preventDefault();

			$( '<form/>', {
				'action':'https://www.paypal.com/cgi-bin/webscr',
				'method':'post',
				'target':'_blank',
				'class':'hidden',
				'id':'donation_form',
			}).appendTo('body');

			$( '#donation_div' ).clone().appendTo( 'form#donation_form' );
			$( '#donation_form' ).submit();
			$( '#donation_form' ).remove();
		});
	});
	</script>
</div>

