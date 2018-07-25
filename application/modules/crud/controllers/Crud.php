<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * @author Ahsan Jarral 
 */

class Crud extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        $data['details'] = file($this->file);
        $data['page_title'] = "Details";
        $data['view_title'] = "Details";
        $data['view_subtitle'] = "List All";
        $data['content'] = "crud/list";
        $data['module'] = "Crud";

        $this->load->view('crud/main-content', $data);
    }

    function create() {

        if ($this->input->post('submit')) {

            $this->_validateDetails();

            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('message', validation_errors());
                $this->session->set_flashdata('type', 'alert-danger');
            }
            if ($this->form_validation->run()) {

                $content = $this->_getDetails();
                $json_content = json_encode($content);

                file_put_contents($this->file, $json_content . PHP_EOL, FILE_APPEND);


                $this->session->set_flashdata('message', 'detials added successfully !');
                $this->session->set_flashdata('type', 'alert-success');
                redirect("crud");
            }
        }

        $data['page_title'] = "Details";
        $data['view_title'] = "Details";
        $data['view_subtitle'] = (!isset($id) ? "Add New" : "$id");
        $data['content'] = "crud/form";
        $data['module'] = "Crud";

        $this->load->view('crud/main-content', $data);
    }

    function update($id = NULL) {

        if ($id < 0) {
            $this->session->set_flashdata('message', 'detials not found !');
            $this->session->set_flashdata('type', 'alert-danger');
            redirect($_SERVER['HTTP_REFERER'], 'refresh');
        }

        $file = file($this->file);

        if ($this->input->post('submit')) {

            $this->_validateDetails();

            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('message', validation_errors());
                $this->session->set_flashdata('type', 'alert-danger');
            }
            if ($this->form_validation->run()) {

                $content = $this->_getDetails();
                $json_content = json_encode($content);

//                $file = file($this->file);

                foreach ($file as $key => $value) {
                    if ($key == $id) {

                        echo $key;
                        echo $value;
                        unset($file[$key]);
                        $file[$key] = $json_content . PHP_EOL;
                    }
                }
                file_put_contents($this->file, $file);

                $this->session->set_flashdata('message', 'detials updated successfully !');
                $this->session->set_flashdata('type', 'alert-success');
                redirect("crud");
            }
        }



        foreach ($file as $key => $value) {
            if ($key == $id) {
                $data['detail'] = json_decode($value);
            }
        }

        $data['id'] = "$id";
        $data['page_title'] = "Details";
        $data['view_title'] = "Details";
        $data['view_subtitle'] = (!isset($id) ? "Add New" : "$id");
        $data['content'] = "crud/form";
        $data['module'] = "Crud";

        $this->load->view('crud/main-content', $data);
    }

    function view($id) {

        if ($id < 0) {
            $this->session->set_flashdata('message', 'detials not found !');
            $this->session->set_flashdata('type', 'alert-danger');
            redirect($_SERVER['HTTP_REFERER'], 'refresh');
        }

        $file = file($this->file);

        foreach ($file as $key => $value) {
            if ($key == $id) {
                $data['detail'] = json_decode($value);
            }
        }

        $data['page_title'] = "Details";
        $data['view_title'] = "Details";
        $data['view_subtitle'] = "$id";
        $data['content'] = "crud/view";
        $data['module'] = "Crud";

        $this->load->view('crud/main-content', $data);
    }

    function delete($id) {

        if ($id < 0) {
            $this->session->set_flashdata('message', 'detials not found !');
            $this->session->set_flashdata('type', 'alert-danger');
            redirect($_SERVER['HTTP_REFERER'], 'refresh');
        }

        $file = file($this->file);

        foreach ($file as $key => $value) {
            if ($key == $id) {
                unset($file[$key]);
            }
        }

        file_put_contents($this->file, $file);

        $this->session->set_flashdata('message', 'detials deleted successfully !');
        $this->session->set_flashdata('type', 'alert-success');
        redirect('crud/index');
    }

    /**     * ********************
     *  VALIDATIONS        * 
     * ********************* */
    private function _validateDetails() {

        $this->form_validation->set_rules('title', 'Title', 'trim');
        $this->form_validation->set_rules('fname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|numeric');
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email');
    }

    /*     * *********************
     *  GET / POST DATA    * 
     * ********************* */

    private function _getDetails() {

        $content['title'] = $this->input->post('title');
        $content['first_name'] = $this->input->post('fname');
        $content['last_name'] = $this->input->post('lname');
        $content['phone'] = $this->input->post('phone');
        $content['email'] = $this->input->post('email');

        return $content;
    }

}
