<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('admin/login');
	}



     public function do_login() {


        if ($this->session->userdata('is_admin_login')) {


            redirect('admin/');


        }else{




            $user = $_POST['user'];
            $password = $_POST['pass'];

            $salt = '5&JDDlwz%Rwh!t2Yg-Igae@QxPzFTSId';
            //$enc_pass  = md5($salt.$password);
            $enc_pass  = $password;
            $sql = "SELECT * FROM admin WHERE user = ? AND pass = ?";
            $val = $this->db->query($sql,array($user ,$enc_pass ));

            if ($val->num_rows) {
            	
                    foreach ($val->result_array() as $recs => $res) {
                        $this->session->set_userdata(array(
                            'id' => $res['id'],
                            'user' => $res['user'],                        
                            'is_admin_login' => true
                                )
                        );
                    }

            redirect('admin/');

            } else {

                    $err['error'] = '<strong>Access Denied</strong> Invalid Username/Password';
                    $this->load->view('admin/login', $err);
            }
            



        }


    }


     public function logout() {

        $this->session->unset_userdata('id');
        $this->session->unset_userdata('user');
        $this->session->unset_userdata('is_admin_login');   
        $this->session->sess_destroy();
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
        redirect('admin/', 'refresh');
    }
           
           }




