<?php

 //This TypeFilter class is responsible for filtering the data based on the type.


namespace App\Filters;

class TypeFilter
{
     public function filter($builder, $value)
     {
         return $builder->where('type', $value);
     }
}