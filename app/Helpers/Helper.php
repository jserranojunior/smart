<?php


    function calcularDiferencaEntreHoras($horaEntrada, $horaSaida){

        $horaEntrada = date('H', strtotime($horaEntrada));
        $horaSaida = date('H', strtotime($horaSaida));

        $count = 0;              
        $horaSoma = 0;
        $inicioCount = $horaEntrada;                       

        if($horaEntrada < $horaSaida){
            while($horaEntrada < $horaSaida){                  
                $horaEntrada += date('H', strtotime('+1 hour', strtotime($horaEntrada)));
                $count += 1;  
                if($count == 20){
                    dd("$matricula -- $horaEntrada $count");
                }                    
            }
        }else{
            while($horaEntrada > $horaSaida){                  
                $horaEntrada -= date('H', strtotime('+1 hour', strtotime($horaEntrada)));
                $count += 1;  
                if($count == 20){
                    dd("$matricula -- $horaEntrada $count");
                }                    
            }
        }
        return $count;
    }/* FIM CALCULO HORA*/


