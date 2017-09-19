<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Circle extends CI_Controller {
    
    /**
     * counts circumference & surface of a circle
     */
    public function index() {
        
        $radius = $this->input->post('circle');
  
        if (!empty($radius)) {
            
            $circumference = 6.28 * $radius;
            $surface = pow($radius, 2) * 3.14;
            $data = [
                'circumference' => $circumference,
                'surface' => $surface
            ];
        } else {
             $data = [
                'circumference' => '',
                'surface' => ''
            ];
        }
        
        $this->load->view('main', $data);
    }

}
