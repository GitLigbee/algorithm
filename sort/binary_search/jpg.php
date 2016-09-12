<?php
    require_once 'src/jpgraph.php';
    require_once 'src/jpgraph_line.php';

    $rec = json_decode($_POST['rec']);
    $none = json_decode($_POST['none']);
    
    $graph = new Graph(600,600);
    $aAxisType = 'textint';
    $graph->SetScale($aAxisType);
    $graph->title->Set('com');
    
    $line_rec = new LinePlot($rec);
    $line_rec->SetLegend('rec');
    $line_none = new LinePlot($none);
    $line_none->SetLegend('none');
    
    $graph->Add($line_none);
    $graph->Add($line_rec);
    $line_none->SetColor('red');
    $line_rec->SetColor('blue');
    
    $time = time();
    $graph->Stroke($time.'.jpg');
    echo $time;
?>