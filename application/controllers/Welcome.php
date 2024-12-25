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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
    //normally index has default $this->load->view('welcome_message'); but for website it is shows has index i.e; i use index has ('home')//
	public function index()
	{
		$this->load->view('static/home');
	}
	public function order()
	{
	    $this->load->view('static/order');
	}
	public function about_us()
	{
	    $this->load->view('static/about_us');
	}
	/*public function destination()
	{
	    $this->load->view('static/destination');
	}
	public function our_gallery()
	{
	    $this->load->view('static/our_gallery');
	}
	public function travel_guides()
	{
	    $this->load->view('static/travel_guides');
	}*/
	public function procruement_details()
	{
	    $this->load->view('static/procruement_details');
	}
	public function services()
	{
	    $this->load->view('static/services');
	}
	public function blog()
	{
	    $this->load->view('static/blog');
	}
	/*public function explore_tour()
	{
	    $this->load->view('static/explore_tour');
	}
	public function travel_booking()
	{
	    $this->load->view('static/travel_booking');
	}*/
	public function testimonial()
	{
	    $this->load->view('static/testimonial');
	}
	public function contact()
	{
	    $this->load->view('static/contact');
	}
	/*public function error()
	{
	    $this->load->view('static/error');
	}*/
	
}
