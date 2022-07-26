<?php
    class ExportSample extends REST_Controller{

            public function __construct(){
            parent::__construct();

               $this->load->database();
               $this->load->library('Excel');
            }   
   }
?>
