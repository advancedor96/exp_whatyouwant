<?php


// Include the main TCPDF library (search for installation path).
require_once('../tcpdf/examples/tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 038');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 038', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

//////////////////////////////////
//自製函數:make_readable      //
//////////////////////////////////
///
function make_readable($pay_by){
	if($pay_by=='cash'){
		$pay_method_description = "現金";
	}else if($pay_by=='postal_service'){
		$pay_method_description = "劃撥";
	}else if($pay_by=='transfer_account'){
		$pay_method_description = "銀行轉帳";
	}else{
		$pay_method_description = "";
	}
	return $pay_method_description;
}

// set font //
$pdf->SetFont('msungstdlight', '', 20);

// add a page
$pdf->AddPage();

$txt = 	'台灣很棒慈善協會 捐款收據';
$pdf->Write(0, $txt, '', 0, 'L', true, 0, false, false, 0);
$txt = 	'地址、電話';
$pdf->Write(0, $txt, '', 0, 'L', true, 0, false, false, 0);
$txt = 	'立案字號';
$pdf->Write(0, $txt, '', 0, 'L', true, 0, false, false, 0);
$txt = 	'衛福部勸募許可字號：';
$pdf->Write(0, $txt, '', 0, 'L', true, 0, false, false, 0);
$txt = 	'收據編號：'.$o_id.'(免費版)  日期：'.$datetime;
$pdf->Write(0, $txt, '', 0, 'L', true, 0, false, false, 0);

$txt = 	'';
$pdf->Write(0, $txt, '', 0, 'L', true, 0, false, false, 0);

$txt = 	'捐款人：'.$name;
$pdf->Write(0, $txt, '', 0, 'L', true, 0, false, false, 0);
$txt = 	'身份證字號：'.$id_no.'(媒體申報抵稅專用)';
$pdf->Write(0, $txt, '', 0, 'L', true, 0, false, false, 0);
$txt = 	'統一編號：'.$EIN.'(媒體申報抵稅專用)';
$pdf->Write(0, $txt, '', 0, 'L', true, 0, false, false, 0);
$txt = 	'捐款金額：新台幣'.$amount.'元';
$pdf->Write(0, $txt, '', 0, 'L', true, 0, false, false, 0);




$txt = 	'捐款方式：'.make_readable($pay_by);
$pdf->Write(0, $txt, '', 0, 'L', true, 0, false, false, 0);
$txt = 	'收據地址：'.$receipt_address;
$pdf->Write(0, $txt, '', 0, 'L', true, 0, false, false, 0);
$txt = 	'備註：'.$remark;
$pdf->Write(0, $txt, '', 0, 'L', true, 0, false, false, 0);
$txt = 	'';
$pdf->Write(0, $txt, '', 0, 'L', true, 0, false, false, 0);

$txt = 	'常務監事：【章】 理事長：【章】 秘書長：【章】 會計：【章】 出納：【章】 經手人：【章】';
$pdf->Write(0, $txt, '', 0, 'L', true, 0, false, false, 0);





// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_038.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
