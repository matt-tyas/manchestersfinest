<form role="search" method="get" id="searchform" action="http://www.manchestersfinest.com">
	<label for="s">Search for:</label>
	<?php // wp_dropdown_categories();?>
	<?php // wp_dropdown_categories( $args = array('child_of' => 15, 20,) ); ?> 
	<?php // wp_dropdown_categories( $args = array('child_of' => 8) ); ?> 
	<input type="text" placeholder="Search Finest" value="" name="s" id="s">
	<input class="icon-search" type="submit" id="searchsubmit" value="&#x260c;">
</form>
<!--<form method="get" id="searchform" action="<?php echo home_url(); ?>">
 		<input type="text" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Search...':this.value;" value="Search..." name="s" id="s" />
        <?php
                wp_dropdown_categories(
                        array(
                                'child_of' => 15,
                                'id' => 'thing',
                                'name' => 'category',
                                'show_option_all' => 'Find a...',
                                'taxonomy' => 'category',
                                'walker' => new dropdown
                        ))
        ?>
        <?php
                wp_dropdown_categories(
                        array(
                                'child_of' => 8,
                                'id' => 'area',
                                'name' => 'category',
                                'show_option_all' => 'in...',
                                'taxonomy' => 'category',
                                'walker' => new dropdown
                        ))
        ?>
    <input type="submit" id="searchsubmit" value="Search" />
</form>-->