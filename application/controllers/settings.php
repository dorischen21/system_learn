<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Settings
	 *	- or -  
	 * 		http://example.com/index.php/Settings/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/Settings/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function listProject() {
		$this->load->helper('form');
		$data['title'] = '專案期間設定';
		$this->load->view('template/header',$data);
		$this->load->view('settings/listproject',$data);
		$this->load->view('template/footer');
	}

	public function detailProject() {
		$this->load->helper('form');
		$data['title'] = '專案期間設定';
		$this->load->view('template/header',$data);
		$this->load->view('settings/detailproject',$data);
		$this->load->view('template/footer');
	}

}

/* End of file Settings.php */
/* Location: ./application/controllers/Settings.php */