<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  * ContactController
  * contactform(input/comfirm/sendmail/complete/error) Controller for contactform
  * 
  * @filesource	  Contact.php
  * @package 	  Controller 
  */
 
class Contact extends CI_Controller {
	
	 protected $_view_data = array();
	/**
	 * Constructor
	 *
	 * @return ContactController
	 */
	 public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->config->load('contact');
		$this->form_validation->set_rules($this->config->item('validation', 'contact'));
		if ($this->input->post()) {
			$this->_view_data['post'] = $this->input->post();
		}
	}
	/**
	 * @see inputform()
	 *
	 */
	public function index()
	{
			return redirect ( base_url ( 'contact/input' ));
	}
	/**
	 * inputform the user
	 *
	 */
	public function input()
	{
		if($this->session->userdata('post_data')) {
        // Set POST array from session data
        $this->_view_data = $this->session->userdata('post_data');
        // Clear the session
        $this->session->unset_userdata('post_data');
    	}
		//
		$this->form_validation->run('contact');
		return	$this->load->view('contact/input', $this->_view_data);
	}
	/**
	 * Confirmpage the user
	 *
	 */
	public function confirm()
	{
		if ( ! $this->input->post()) {
			return redirect( base_url('contact/input'));
		}
		// 
		if ( ! $this->form_validation->run('contact')) {
			return $this->load->view('contact/input', $this->_view_data);
			
		}
		$this->session->set_userdata('post_data', $this->_view_data );
		return $this->load->view('contact/confirm', $this->_view_data);
	}
	/**
	 * Sendmail the user and siteowner
	 *
	 */
	public function send()
	{
		// Clear the session
		$this->session->unset_userdata('post_data');
		
		// POST
		if ( ! $this->input->post()) {
			return redirect( base_url('contact/input'));
		}

		// 
		if ( ! $this->form_validation->run('contact')) {
			return redirect( base_url('contact/input'));
		}

		// 
		$_config = $this->config->item('mail', 'contact');
		
		//load  CI email library
		$this->load->library('email');	
			// 	
		$this->email->from($_config['send']['from'], $_config['send']['from_name']);
		$this->email->to($_config['send']['to']); 
		$this->email->subject($_config['send']['subject']);
		$this->email->message($this->load->view('contact/mail/send', $this->input->post(), TRUE));
		if ( ! is_null($_config['send']['envelope_from'])) {
				$this->email->envelope_from($_config['send']['envelope_from']);
			}	
		$this->email->set_mailtype("html");
		if ( ! $this->email->send()) {
					// 
				return redirect(base_url('contact/error'));
			}
				$this->email->clear();
		// 	
		if ($this->input->post('email')) {	
			$this->email->from($_config['reply']['from'], $_config['reply']['from_name']);
		$this->email->to($this->input->post('email')); 
		$this->email->subject($_config['reply']['subject']);
		$this->email->message($this->load->view('contact/mail/reply', $this->input->post(), TRUE));	
		if ( ! is_null($_config['reply']['envelope_from'])) {
				$this->email->envelope_from($_config['reply']['envelope_from']);
			}
			if ( ! $this->email->send()) {
				// 
				return redirect( base_url('contact/error'));
			}
				$this->email->clear();
		}			
				return redirect( base_url('contact/complete'));				
	}
	/**
	 * completepage the user 
	 *
	 */
	public function complete()
	{
		return $this->load->view('contact/complete', $this->_view_data);
	}
	/**
	 * errorpage the user 
	 *
	 */
	public function error()
	{
		return $this->load->view('contact/error', $this->_view_data);
	}
}
