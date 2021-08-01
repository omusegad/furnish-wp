<?php

class getProducts{
	public  function  getCategories(){
		$response = wp_remote_get( esc_url_raw("https://gooafrica.com/furnish_la/api/company/products-categories") );
		$result = json_decode( wp_remote_retrieve_body( $response ), true );
		if ( is_array( $result ) && ! is_wp_error( $result ) ) {
			return $result;
		} else {
			return "Opps Some wents wrong!";
		}
	}

	
}

?>

