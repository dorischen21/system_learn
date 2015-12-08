<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/News
	 *	- or -  
	 * 		http://example.com/index.php/News/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/News/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index() {
		$this->load->helper('form');	
		$data['title'] = '訊息公告';
		$this->load->view('template/header',$data);	
		$this->load->view('news/news',$data);
		$this->load->view('template/footer');
	}

}

/* End of file News.php */
/* Location: ./application/controllers/News.php */