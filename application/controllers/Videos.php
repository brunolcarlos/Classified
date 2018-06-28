<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Videos extends CI_Controller
{

	public function index(){


		// $str = 'https://youtu.be/E0YU3d4Vvxs';
		$str = 'https://www.youtube.com/watch?v=E0YU3d4Vvxs';

		$sel_cat = $str;

		$categoria = 'youtu.be'; 

		if(strpos($sel_cat, "$categoria"))
		{
			$str = explode("/",$str);
			$youtube =  'http://www.youtube.com/v/'.$str[3];
			
		}
		else
		{
			preg_match('/(v\/|\?v=)([^&?\/]{5,15})/', $str, $x);
			$youtube =  'http://www.youtube.com/v/'.end($x);

		}


		

		?>
		<br>
		<br>
		<br>


		<iframe id="ytplayer" type="text/html" width="640" height="360"
		src="<?=$youtube ?>"
		frameborder="0"/>

		<?php




	}



}

