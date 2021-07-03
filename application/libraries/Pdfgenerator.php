<?php
 
use Dompdf\Dompdf;

define('DOMPDF_ENABLE_AUTOLOAD', false);
require_once('dompdf/autoload.inc.php');

class PdfGenerator
{
    public function generate($html, $filename)
    {
        $dompdf = new DOMPDF();
        $options = $dompdf->getOptions();
        $options->setIsHtml5ParserEnabled(true);
        $options->setIsRemoteEnabled(true);
        $options->setIsJavascriptEnabled(true);
        $dompdf->setOptions($options);
        $dompdf->loadHtml($html);
        $dompdf->render();
        $dompdf->stream($filename.'.pdf', array("Attachment"=>0));
    }
}