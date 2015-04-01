<?php
// =============================== My Recent Posts (News widget) ======================================
class MY_OpenClose extends WP_Widget {
	/** constructor */
    function MY_OpenClose() {
        parent::WP_Widget(false, $name = 'My - Open Close');
        }
	/**
	 * Sets up the widgets name etc
	 */
	
	public function widget( $args, $instance ) {
		// outputs the content of the widget
		$spaOC;
		$gardenOC;
		date_default_timezone_set('America/Los_Angeles');
		$time = date("G"); 
		$day  = date("N");
		
		if( $day != 6 ){
			if( ($time > "7") && ($time < "12") ){
				$spaOC = "Open";
				$gardenOC = "Closed";
			}// hour if
			elseif( ($time > "12") && ($time < "17") ){
				$spaOC = "Closed";
				$gardenOC = "Open";
			}// hour elseif
			else{
				$spaOC = "Closed";
				$gardenOC = "Closed";
			}// hour else
		}// day if
		else{
			$spaOC = "Closed";
			$gardenOC = "Closed";
		}// day else
		?>
		
		
		
		<?php
	}// function widget

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
	}
}

?>