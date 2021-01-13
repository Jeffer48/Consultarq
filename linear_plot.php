<?php 
   include 'conexión.php'; 
   require_once ('jpgraph-4.3.4/src/jpgraph.php');
   require_once ('jpgraph-4.3.4/src/jpgraph_line.php');

   $queryObtener = "SELECT inicio FROM vistasmes order by id desc LIMIT 12;";
   $datay1 = contadores('inicio', $queryObtener);

   $queryObtener = "SELECT contacto FROM vistasmes order by id desc LIMIT 12;";
   $datay2 = contadores('contacto', $queryObtener);

   $queryObtener = "SELECT faqs FROM vistasmes order by id desc LIMIT 12;";
   $datay3 = contadores('faqs', $queryObtener);

   $queryObtener = "SELECT nservicios FROM vistasmes order by id desc LIMIT 12;";
   $datay4 = contadores('nservicios', $queryObtener);
   
   $queryObtener = "SELECT nexpertos FROM vistasmes order by id desc LIMIT 12;";
   $datay5 = contadores('nexpertos', $queryObtener);

   $queryObtener = "SELECT snosotros FROM vistasmes order by id desc LIMIT 12;";
   $datay6 = contadores('snosotros', $queryObtener);
    
   // Setup the graph
   $graph = new Graph(900,500);
   $graph->SetScale("textlin");
    
   $theme_class = new UniversalTheme;
    
   $graph->SetTheme($theme_class);
   $graph->img->SetAntiAliasing(false);
   $graph->title->Set('Visitas de la pagina');
   $graph->SetBox(false);
    
   $graph->img->SetAntiAliasing();
    
   $graph->yaxis->HideZeroLabel();
   $graph->yaxis->HideLine(false);
   $graph->yaxis->HideTicks(false,false);
    
   $graph->xgrid->Show();
   $graph->xgrid->SetLineStyle("solid");
   $graph->xaxis->SetTickLabels(Meses());
   $graph->xgrid->SetColor('#E3E3E3');
    
   // Create the first line
   $p1 = new LinePlot($datay1);
   $graph->Add($p1);
   $p1->SetColor("#6495ED");
   $p1->SetLegend('Inicio');
    
   // Create the second line
   $p2 = new LinePlot($datay2);
   $graph->Add($p2);
   $p2->SetColor("#B22222");
   $p2->SetLegend('Contacto');
    
   // Create the third line
   $p3 = new LinePlot($datay3);
   $graph->Add($p3);
   $p3->SetColor("#FF1493");
   $p3->SetLegend('FAQs');

   $p4 = new LinePlot($datay4);
   $graph->Add($p4);
   $p4->SetColor("#033659");
   $p4->SetLegend('Nuestros Servicios');

   $p5 = new LinePlot($datay5);
   $graph->Add($p5);
   $p5->SetColor("#033604");
   $p5->SetLegend('Nuestros Expertos');

   $p6 = new LinePlot($datay6);
   $graph->Add($p6);
   $p6->SetColor("#8f1704");
   $p6->SetLegend('Sobre Nosotros');
    
   $graph->legend->SetFrameWeight(1);
    
   $graph->legend->SetPos(0.5,0.98,'center','bottom');
    
   // Output line
   $graph->Stroke();


   function Meses(){
      $queryObtener = "SELECT fecha FROM vistasmes order by id desc LIMIT 12;";
      $respuesta = solicitarDatos($queryObtener);
      $fecha = array();
      $meses = array('Ene','Feb','Mar','Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Nov', 'Oct', 'Dic');
      $resultado = array();
      while($fila = mysqli_fetch_array($respuesta)){
         array_push($fecha,$fila["fecha"]);
      }
      for ($i = 11; $i > -1 ; $i--) { 
         $mes = substr($fecha[$i], 5,2);
         array_push($resultado, $meses[(int)$mes-1]);
      }

      return $resultado;
   }

   function contadores($dato, $query){
      $respuesta = solicitarDatos($query);
      $cambiarposicion = array();
      $contador = array();
      while($fila = mysqli_fetch_array($respuesta)){
         array_push($cambiarposicion,$fila[$dato]);
      }
      for ($i = 11; $i > -1 ; $i--) { 
         $guardartem = $cambiarposicion[$i];
         array_push($contador, $guardartem);
      }
      return $contador;
   }


?>