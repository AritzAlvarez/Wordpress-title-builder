  <title>
		   <?php
		      
			  if (is_archive()) {  wp_title(''); echo ' Archives '; }
		      
			  elseif (is_search()) { echo 'Search results to: &quot;'.wp_specialchars($s).'&quot;'; }
			  
			  elseif ( is_front_page() ) { bloginfo('name'); echo (' - '); bloginfo('description'); }
		      
			  elseif ( !(is_404()) && (is_single()) || (is_page())) { the_title(); echo (' - '); bloginfo('name'); }
		      
			  elseif (is_404()) { echo 'Error 404 - '; bloginfo('name'); }
		      
			  if (is_home()) { bloginfo('name'); echo (' - Blog'); }
	
			  if ($paged>1) { echo ' - page '. $paged; }
		   ?>
           
	</title>
