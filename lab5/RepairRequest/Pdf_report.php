<?php
require_once( "../../fpdf/fpdf.php" );
require_once( "../../tfpdf/tfpdf.php" );

$textColour = array( 0, 0, 0 );
$headerColour = array( 100, 100, 100 );
$tableHeaderTopTextColour = array( 255, 255, 255 );
$tableHeaderTopFillColour = array( 125, 152, 179 );
$tableHeaderTopProductTextColour = array( 0, 0, 0 );
$tableHeaderTopProductFillColour = array( 143, 173, 204 );
$tableHeaderLeftTextColour = array( 99, 42, 57 );
$tableHeaderLeftFillColour = array( 184, 207, 229 );
$tableBorderColour = array( 50, 50, 50 );
$tableRowFillColour = array( 213, 170, 170 );
$reportName = "Отчет pdf";
$reportNameYPos = 10;
$logoXPos = 50;
$logoYPos = 108;
$logoWidth = 110;
$columnLabels = array("№",
											"Начало ремонта",
											"Конец ремонта",
											"Холодильник",
											"центр",
											"ФИО",
											"Цена");
// Конец конфигурации


$pdf = new tfPDF();

$pdf->AddFont('DejaVu', '', 'DejaVuSansCondensed.ttf', true);

$pdf->SetTextColor( $textColour[0],
										$textColour[1],
										$textColour[2] );														/*устанавливаем цвет текста*/

$pdf->AddPage();
$pdf->SetFont('DejaVu', '', 10);                                       /*добавляем страницу*/											/*устанавливаем шрифт*/
$pdf->Ln( $reportNameYPos );																		/*сдвигаем на 1см вниз от начала*/
$pdf->Cell( 0/*высота*/,
						15/*ширина*/,
						$reportName/*содержание*/,
						0/*нет рамки*/,
						0/*выбор позиции после ячейки*/,
						'C'/*выравнивание по центру*/ );										/*вывод названия*/

$pdf->SetTextColor( $textColour[0],
										$textColour[1],
										$textColour[2] );													 /*устанавливаем цвет текста*/

/*$pdf->SetFont('DejaVu', '', 10);  													 /*устанавливаем шрифт*/
$pdf->Ln( 16 );																								 /*отступ*/

$pdf->SetDrawColor( $tableBorderColour[0],
										$tableBorderColour[1],
										$tableBorderColour[2] );										/*устанавливаем цвет рамок таблицы*/

// Создаем строку заголовков таблицы
/*$pdf->SetFont('DejaVu', '', 10); */

// Остальные ячейки заголовков
$pdf->SetTextColor( $tableHeaderTopTextColour[0],
										$tableHeaderTopTextColour[1],
										$tableHeaderTopTextColour[2] );

$pdf->SetFillColor( $tableHeaderTopFillColour[0],
										$tableHeaderTopFillColour[1],
										$tableHeaderTopFillColour[2] );

for ( $i=0; $i<count($columnLabels); $i++ ) {
	$l = 0;
	if($i == 0){
		$l = 8;
	}
	else if($i == 1 or $i == 2){
		$l = 35;
	}
	else if($i == 1 or $i == 2){
		$l = 35;
	}
	else if ($i == 6){
		$l = 20;
	}
	else{
		$l = 25;
	}
	$pdf->Cell( $l, 12, $columnLabels[$i], 1, 0, 'C', true );
}
$pdf->Ln( 12 );

// Создаем строки с данными
$fill = false;                      														/*не заполняем фон ячейки цветом*/
$row = 0;

require "../../config.php";
$mysqli = new mysqli($localhost, $login, $password, $db);
if ($mysqli->connect_errno)
{
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

$query = "SELECT r_id, r_datestart, r_datefinish, rf_id, rs_id, r_fio, r_cost FROM repairrequest";
$result = $mysqli->query($query);
while ($row = mysqli_fetch_array($result)){
	$k=1;
	$pdf->Cell( 8, 12, $k, 1, 0, 'C', true );
	$pdf->Cell( 35, 12, $row['r_datestart'], 1, 0, 'C', true );
	$pdf->Cell( 35, 12, $row['r_datefinish'], 1, 0, 'C', true );
	$subquery1 = "SELECT f_name FROM fridges WHERE f_id =" . $row['rf_id'];
	$result1 = $mysqli->query($subquery1);
	while ($row1 = mysqli_fetch_array($result1)){
		$pdf->Cell( 25, 12, $row1['f_name'], 1, 0, 'C', true );
	}
	$subquery1 = "SELECT s_name FROM servicecenter WHERE s_id =" . $row['rs_id'];
	$result1 = $mysqli->query($subquery1);
	while ($row1 = mysqli_fetch_array($result1)){
		$pdf->Cell( 25, 12, $row1['s_name'], 1, 0, 'C', true );
	}
	$pdf->Cell( 25, 12, $row['r_fio'], 1, 0, 'C', true );
	$pdf->Cell( 20, 12, $row['r_cost'], 1, 0, 'C', true );
	$pdf->Ln( 12 );
	$k++;
}
$content = $pdf->Output('doc.pdf','D');

?>
