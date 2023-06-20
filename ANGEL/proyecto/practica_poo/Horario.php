<?php
            //namespace "cuando tenga el autolader"
        use  DateTimeImmutable;

       final class Horario{


            //DateTimeImmutable 
         

                    public function __construct
                    ( 
                     private readonly string $fecha,
                     private readonly string $dia,
                     private readonly string $hora_en,
                     private readonly string $hora_sal,
                     private readonly string $hora_rec1,
                     private readonly string $hora_rec2,
                    )
                    {
                  
                    }
                     public function getFecha():string
                     {
                                    return $this->fecha;
                     }
                    
                     public function getDia():string
                     {
                                    return $this->dia;
                     }
                     public function getHora_en():string
                     {
                                    return $this->hora_en;
                     }
                     public function getHora_sal():string
                     {
                                    return $this->hora_sal;
                     }
                     public function getHora_rec1():string
                     {
                                    return $this->hora_rec1;
                     }
                     public function getHora_rec2():string
                     {
                                    return $this->hora_rec2;
                     }


                     
                    
        }





?>










<?php

?>









