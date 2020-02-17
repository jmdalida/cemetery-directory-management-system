<?php
    if (!defined('BASEPATH'))
    exit('No direct script access allowed');
   
    require_once APPPATH . "/libraries/tcpdf/tcpdf.php";
    class Pdf extends tcpdf 
    {
        public function __construct() 
        {
            parent::__construct();
        }
    }
?>
/*Author:Tutsway.com */
/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */