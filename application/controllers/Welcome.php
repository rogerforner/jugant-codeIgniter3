<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
    $data = array(
      "1" => "uno",
      "2" => "dos",
      "3" => "tres...",
    );

		$this->load->view('welcome_message', compact("data"));
  }
  
  public function _remap($method, $params = array())
  {
    switch ($method) {
      case 'uno':
        $this->_dos();
        break;
      
      default:
        $this->index();
        break;
    }
  }

  public function _dos()
  {
    echo 'Método Dos';
  }
}
