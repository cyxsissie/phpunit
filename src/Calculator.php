<?php

namespace App;

class Calculator
{
   public function add($a,$b){
        $c = $a + $b;
        return $c;
   }

   public function sum(array $items){
         $total = 0;

         foreach($items as $item){
            $total +=$item;
         }

         return $total;
   }
   
}
