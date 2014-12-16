<?php
function tip_block_shortcode( $atts, $content = null ) {
return "<style>.tipBox {
      color:#555;
		border-radius:10px;
		padding:10px 36px;
		margin:10px;
    background:#fff8c4;
		border:1px solid #f2c779;
}</style><div class='tipBox'><span class='dashicons dashicons-lightbulb'></span>$content</div>";
}
add_shortcode( 'tip', 'tip_block_shortcode' );
?>
