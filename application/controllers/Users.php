<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'users/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'users/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'users/index.html';
            $config['first_url'] = base_url() . 'users/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Users_model->total_rows($q);
        $users = $this->Users_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'users_data' => $users,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('users/users_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Users_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_user' => $row->id_user,
		'nama_user' => $row->nama_user,
		'password' => $row->password,
		'user_mail' => $row->user_mail,
		'no_telp' => $row->no_telp,
		'nama_lengkap' => $row->nama_lengkap,
		'alamat' => $row->alamat,
		'no_rek' => $row->no_rek,
		'kota' => $row->kota,
	    );
            $this->load->view('users/users_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('users'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('users/create_action'),
	    'id_user' => set_value('id_user'),
	    'nama_user' => set_value('nama_user'),
	    'password' => set_value('password'),
	    'user_mail' => set_value('user_mail'),
	    'no_telp' => set_value('no_telp'),
	    'nama_lengkap' => set_value('nama_lengkap'),
	    'alamat' => set_value('alamat'),
	    'no_rek' => set_value('no_rek'),
	    'kota' => set_value('kota'),
	);
        $this->load->view('users/users_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_user' => $this->input->post('nama_user',TRUE),
		'password' => md5($this->input->post('password', TRUE)),
		'user_mail' => $this->input->post('user_mail',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
		'nama_lengkap' => $this->input->post('nama_lengkap',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'no_rek' => $this->input->post('no_rek',TRUE),
		'kota' => $this->input->post('kota',TRUE),
	    );

            $this->Users_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('users'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Users_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('users/update_action'),
		'id_user' => set_value('id_user', $row->id_user),
		'nama_user' => set_value('nama_user', $row->nama_user),
		'password' => set_value('password', $row->password),
		'user_mail' => set_value('user_mail', $row->user_mail),
		'no_telp' => set_value('no_telp', $row->no_telp),
		'nama_lengkap' => set_value('nama_lengkap', $row->nama_lengkap),
		'alamat' => set_value('alamat', $row->alamat),
		'no_rek' => set_value('no_rek', $row->no_rek),
		'kota' => set_value('kota', $row->kota),
	    );
            $this->load->view('users/users_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('users'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_user', TRUE));
        } else {
            $data = array(
		'nama_user' => $this->input->post('nama_user',TRUE),
		'password' => md5($this->input->post('password', TRUE)),
		'user_mail' => $this->input->post('user_mail',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
		'nama_lengkap' => $this->input->post('nama_lengkap',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'no_rek' => $this->input->post('no_rek',TRUE),
		'kota' => $this->input->post('kota',TRUE),
	    );

            $this->Users_model->update($this->input->post('id_user', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('users'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Users_model->get_by_id($id);

        if ($row) {
            $this->Users_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('users'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('users'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_user', 'nama user', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('user_mail', 'user mail', 'trim|required');
	$this->form_validation->set_rules('no_telp', 'no telp', 'trim|required');
	$this->form_validation->set_rules('nama_lengkap', 'nama lengkap', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('no_rek', 'no rek', 'trim|required');
	$this->form_validation->set_rules('kota', 'kota', 'trim|required');

	$this->form_validation->set_rules('id_user', 'id_user', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

