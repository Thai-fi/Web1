<?php
require_once '../../PHPExcel-1.8/Classes/PHPExcel.php';

$columnLabels = array("№",
											"Начало ремонта",
											"Конец ремонта",
											"Холодильник",
											"центр",
											"ФИО",
											"Цена");
$columnNames = array( 'A', 'B', 'C', 'D', 'E', 'F', 'G');

$pExcel = new PHPExcel();

$pExcel->setActiveSheetIndex(0);
$aSheet = $pExcel->getActiveSheet();

$aSheet->getPageSetup()
       ->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);
$aSheet->getPageSetup()
       ->SetPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
// Поля документа
$aSheet->getPageMargins()->setTop(1);
$aSheet->getPageMargins()->setRight(0.75);
$aSheet->getPageMargins()->setLeft(0.75);
$aSheet->getPageMargins()->setBottom(1);
// Название листа
$aSheet->setTitle('Ремонт');
// Шапка и футер (при печати)

// Настройки шрифта
$pExcel->getDefaultStyle()->getFont()->setName('Arial');
$pExcel->getDefaultStyle()->getFont()->setSize(8);

$aSheet->getColumnDimension('A')->setWidth(5);
$aSheet->getColumnDimension('B')->setWidth(20);
$aSheet->getColumnDimension('C')->setWidth(20);
$aSheet->getColumnDimension('D')->setWidth(25);
$aSheet->getColumnDimension('E')->setWidth(15);
$aSheet->getColumnDimension('F')->setWidth(25);
$aSheet->getColumnDimension('G')->setWidth(10);

for($i=0;$i<count($columnLabels);$i++)
{
	$aSheet->setCellValue($columnNames[$i].'1', $columnLabels[$i]);
}

require "../../config.php";
$mysqli = new mysqli($localhost, $login, $password, $db);
if ($mysqli->connect_errno)
{
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

$i=2;
$query = "SELECT r_id, r_datestart, r_datefinish, rf_id, rs_id, r_fio, r_cost FROM repairrequest";
$result = $mysqli->query($query);
while($row1=mysqli_fetch_array($result)){
	$j=0;

	$aSheet->setCellValue($columnNames[$j].$i, $i-1);
	$j++;

	$aSheet->setCellValue($columnNames[$j].$i, $row1['r_datestart']);
	$j++;

	$aSheet->setCellValue($columnNames[$j].$i, $row1['r_datefinish']);
	$j++;

	$subquery1 = "SELECT f_name FROM fridges WHERE f_id =" . $row1['rf_id'];
	$result1 = $mysqli->query($subquery1);
	while ($row2 = mysqli_fetch_array($result1)){
		$aSheet->setCellValue($columnNames[$j].$i, $row2['f_name']);
	}
	$j++;

	$subquery1 = "SELECT s_name FROM servicecenter WHERE s_id =" . $row1['rs_id'];
	$result1 = $mysqli->query($subquery1);
	while ($row2 = mysqli_fetch_array($result1)){
		$aSheet->setCellValue($columnNames[$j].$i, $row2['s_name']);
	}
	$j++;

	$aSheet->setCellValue($columnNames[$j].$i, $row1['r_fio']);
	$j++;

	$aSheet->setCellValue($columnNames[$j].$i, $row1['r_cost']);
	$j++;

	$i++;
}

header('Content-Type:application/vnd.ms-excel');
header('Content-Disposition:attachment;filename="simple.xls"');
$objWriter = new PHPExcel_Writer_Excel5($pExcel);
$objWriter->save('php://output');
?>
