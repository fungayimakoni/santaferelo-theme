		<?php
		echo '</div>';
		/* Include file/slug from Theme Options Here */
		include(locate_template('inc/option-files.php'));

		if( get_field('opt_custom_footer', 'options') ):
      		include(locate_template('inc/custom-footer.php'));
    	else :
			echo '<footer class="csat">';
				echo '<div class="container">';
					echo '<div class="trust-pilot">';
						echo '<img src="'.get_home_url().'/wp-content/themes/custom-child-theme-consumer/img/trustpilot.png">';
						echo '<div>';
							echo '<a href="https://uk.trustpilot.com/evaluate/santaferelo.com" target="blank" id="share-your-experience">Share your experience</a>';
						echo '</div>';
						echo '<p>Thank you again for your time!</p>';
 						echo '<p>Santa Fe Relocation</p>';
					echo '</div>';
				echo '</div>';
			echo '</footer>';
		endif;
	echo '</main>';
    wp_footer(); ?> 
    	<!-- <script type="text/javascript">
		_linkedin_partner_id = "1019785";
		window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
		window._linkedin_data_partner_ids.push(_linkedin_partner_id);
	</script> -->
	<!-- <script type="text/javascript">
		(function(){var s = document.getElementsByTagName("script")[0];
		var b = document.createElement("script");
		b.type = "text/javascript";b.async = true;
		b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
		s.parentNode.insertBefore(b, s);})();
	</script>
	<noscript>
		<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=1019785&fmt=gif" />
	</noscript> -->
	<!-- <script>
		var _hmt = _hmt || [];
		(function() {
		  var hm = document.createElement("script");
		  hm.src = "https://hm.baidu.com/hm.js?c91f9bdf9866288a9d3269023c747264";
		  var s = document.getElementsByTagName("script")[0]; 
		  s.parentNode.insertBefore(hm, s);
		})();
	</script> -->
	<!-- <script type="text/javascript" src='https://forms.zoho.eu/js/zf_gclid.js' defer></script> -->
	<!-- <script type="text/javascript" src='https://crm.zoho.eu/crm/javascript/zcga.js' defer> </script> -->
	</body>
	<!-- Global site tag (gtag.js) - Google Analytics -->
</html>

