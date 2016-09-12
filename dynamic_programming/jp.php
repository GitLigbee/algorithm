<?php

    require_once 'src/jpgraph.php';
    require_once 'src/jpgraph_line.php';
    
    class jpg{
        
        function single($name,$arr){
            $graph = new Graph(600,600);
            $aAxisType = 'textint';
            $graph->SetScale($aAxisType);
            $graph->title->Set($name);
            
            $line = new LinePlot($arr);
            $line->SetLegend($name);
            $graph->Add($line);
            $line->SetColor('red');
            $graph->Stroke();
        }
    }

?>