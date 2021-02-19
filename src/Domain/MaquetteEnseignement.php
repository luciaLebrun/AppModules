<?php


namespace App\Domain;


interface MaquetteEnseignement
{
    public function findEachModuleOfASemester($semester):iterable;
}