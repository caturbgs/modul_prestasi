<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('application/libraries/dompdf/autoload.inc.php');
use Dompdf\Dompdf;

class Mypdf{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        // parent :: __construct();
    }

    public function generate($view, $data = array())
    {
        $dompdf = new Dompdf();
        $html = $this->ci->load->view($view, $data, TRUE);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'Landscape');

        // render
        $dompdf->render();
        $dompdf->stream("Laporan.pdf", array("Attachment" => FALSE));
    }

}

?>