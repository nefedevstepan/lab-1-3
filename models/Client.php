<?php
class client
{
	public function __construct()
	{
$params= array(
  'location' 	=>	'http://localhost/debug.php',
  'uri'		=>	'http://localhost/everth'
  'trace' =>1);
$this=> instance =new SoapClient(NULL,$options);
	}
public function getName($id_array)
{
	return $this->instance->__soapCall('getStudentName');
}
}	
?>
