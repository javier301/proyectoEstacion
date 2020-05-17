<?php
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_line.php');
include_once './clases.php';
include_once './conexion_consultas.php';

$k=0;
for($i=0; $i<=count($registroH); $i++){
	if ($registroH[$i]->idEstacion2 == $_GET["id2"]){
		$temperatura_g[$k] = $registroH[$i]->temperatura;
		$humeda_g[$k] = $registroH[$i]->humedad;
		$presion_g[$k] = $registroH[$i]->presion;
		$k++;
	}
}

 
// Setup the graph
$graph = new Graph(925,350);
$graph->SetScale("textlin");
 
$theme_class=new UniversalTheme;
 
$graph->SetTheme($theme_class);
$graph->img->SetAntiAliasing(false);
$graph->title->Set('Evolucion del clima por horas');
$graph->SetBox(false);
 
$graph->img->SetAntiAliasing();
 
$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);
 
$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");
$graph->xaxis->SetTickLabels(array('00:00','01:00','02:00','03:00', '04:00', '05:00', 
	'06:00', '07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00',
	'18:00', '19:00', '20:00', '21:00', '22:00', '23:00'));
$graph->xgrid->SetColor('#E3E3E3');
 
// Create the first line

$p1 = new LinePlot($temperatura_g);
$graph->Add($p1);
$p1->SetColor("#6495ED");
$p1->SetLegend('Temperatura');
 
// Create the second line
$p2 = new LinePlot($humeda_g);
$graph->Add($p2);
$p2->SetColor("#B22222");
$p2->SetLegend('Humedad');
 
// Create the third line
$p3 = new LinePlot($presion_g);
$graph->Add($p3);
$p3->SetColor("#FF1493");
$p3->SetLegend('Presion');
 
$graph->legend->SetFrameWeight(1);
 
$graph->legend->SetPos(0.5,0.98,'center','bottom');
 
// Output line
$graph->Stroke();
?>
