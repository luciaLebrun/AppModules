<?php


namespace App\Domain;


interface MaquetteEnseignement
{
    public function findModulesOfASemester($semester):iterable;
}