<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function send_email($to = '', $subject  = '', $body = '', $attachment = '', $cc = '')

    {
    	$settings = get_general_settings();

		$controller =& get_instance();

       	$controller->load->helper('path'); 

       	// Configure email library
		$config = array();

        $config['useragent']            = "CodeIgniter";

        $config['mailpath']             = "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"

        $config['protocol']             = "smtp";

        $config['smtp_host']            = $settings['smtp_host'];

        $config['smtp_port']            = $settings['smtp_port'];

		$config['smtp_timeout'] 		= '30';

		$config['smtp_user']    		= $settings['smtp_user'];

		$config['smtp_pass']    		= $settings['smtp_pass'];

        $config['mailtype'] 			= 'html';

        $config['charset']  			= 'utf-8';

        $config['newline']  			= "\r\n";

        $config['wordwrap'] 			= TRUE;


        $controller->load->library('email');

        $controller->email->initialize($config);   

		$controller->email->from( $settings['email_from'] , $settings['application_name'] );

		$controller->email->to($to);

		$controller->email->subject($subject);

		$controller->email->message($body);

		if($cc != '') 
		{	
			$controller->email->cc($cc);
		}	

		if($attachment != '')
		{

			$controller->email->attach(base_url()."your_file_path/" .$attachment);

		}

		if($controller->email->send()){

			return "success";

		}
		else
		{
			echo $controller->email->print_debugger();
		}
    }

?>