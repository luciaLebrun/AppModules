<?php


namespace App\Domain;


interface FicheModule
{
    public function findResponsableFromModule($module):iterable;
}