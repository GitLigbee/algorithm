<?php

    require_once 'src/jpgraph.php';
    require_once 'src/jpgraph_line.php';
    
    class jpg{
        
        function single($name,$arr){
            $graph = new Graph(600,600);
            $aAxisType = 'textint';
            $graph->SetScale($aAxisType);
            $graph->title->Set("wsq");
            
            for($i=0;$i<count($name);$i++){
                $line = new LinePlot($arr[$name[$i]]);
                $line->SetLegend($name[$i]);
                $graph->Add($line);
            }
            
//            $line->SetColor('red');
            $graph->Stroke();
        }
    }

?>