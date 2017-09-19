<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Triangle extends CI_Controller {

    /**
     * counts circumference & surface of a triangle
     */
    public function index() {
        
        $a = $this->input->post('a');
        $b = $this->input->post('b');
        $c = $this->input->post('c');
        $height = $this->input->post('height');
  
        if ((!empty($a)) && (!empty($b)) && (!empty($b)) && (!empty($height))) {
            $circumference = $a + $b + $c;
            $surface = ($c * $height) / 2;
            $data = [
                't_circumference' => $circumference,
                't_surface' => $surface
            ];
        } else {
             $data = [
                't_circumference' => '',
                't_surface' => ''
            ];
        }
        
        $this->load->view('main', $data);
    }

}
