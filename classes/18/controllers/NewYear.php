<?php
    class NewYear extends CI_Controller {
        
        public function index($year = null, $month = null) {
            
            $prefs = array(
                'start_day' => 'sunday',
                'month_type' => 'long',
                'day_type' => 'long',
                'show_next_prev' => true
            );

            $this->load->library("calendar", $prefs);

            $data = array(
                3 => '',
                7 => 'https://#',
                13 => 'https://#',
                26 => 'https://#'
            );

            echo $this->calendar->generate($year, $month, $data);
        }
    }
?>