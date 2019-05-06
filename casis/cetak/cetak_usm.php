<?php  
require_once '../../libs/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;


// $html = new Html2Pdf();
// $html->writeHTML('<h1>Hallo dunia</h1> ini masih coba coba');
// $html->output();


try{
	ob_start();
	include dirname(__FILE__). '/kpusm.php';
	$konten = ob_get_clean();

	$html = new Html2Pdf('A4');
	$html->writeHTML($konten);
	$html->output('kartu.pdf');
}
catch(Html2PdfException $e){
	$html->clean();

	$formatter = new ExceptionFormatter($e);
	echo $formatter->getHtmlMessage();	
}

?>