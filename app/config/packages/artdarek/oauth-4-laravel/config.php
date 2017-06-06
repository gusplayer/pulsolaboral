<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(

		/**
		 * Facebook
		 */
        'Facebook' => array(
            'client_id'     => '1631686177059188',
            'client_secret' => '350b14a673ba626c157127f4c43b359a',
            'scope'         => array('email','user_friends','user_about_me','user_education_history','user_location','user_work_history'),
        ),		

	)

);