<?php


namespace App\Domain;


interface MaquetteEnseignement
{
    public function findUEsOfASemester($semester):iterable;
    public function findModulesOfASemester($semester):iterable;
}