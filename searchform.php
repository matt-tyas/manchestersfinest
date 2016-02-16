<form role="search" method="get" id="searchform" action="http://www.manchestersfinest.com">
	<label class="screen-reader-text" for="s">Search for:</label>
	<?php // wp_dropdown_categories();?>
	<?php // wp_dropdown_categories( $args = array('child_of' => 15, 20,) ); ?> 
	<?php // wp_dropdown_categories( $args = array('child_of' => 8) ); ?> 
	<input type="text" placeholder="Search Manchester's Finest" value="" name="s" id="s">
	<input class="icon-search" type="submit" id="searchsubmit" value="&#x260c;">
</form>