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
		
		
		<div style= "font-family: Tahoma, Verdana, Segoe, sans-serif; font-size: 18px; padding-top: 15px; color: #FFE700; text-align: center; width: 315px; height: 165px; background-image: url('http://www.gardensatstillmeadows.com/wp-content/uploads/2015/03/hours_bg1.jpg');">
    		<p style= "font-size: 16px;"> 7am - Noon  <span style=" font-variant: small-caps; font-size: 20px; color: #BAEF50; line-height: 18px;">The Spa</span> <span style= "color: white;"><?php echo $spaOC ?></span></p>
    		<p style= "font-size: 16px;"> Noon - 5pm  <span style=" font-variant: small-caps; font-size: 20px; color: #BAEF50; line-height: 18px;">The Gardens</span> <span style= "color: white;"><?php echo $gardenOC ?></span></p>
		</div>
		
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