<?php


namespace App\Domain;


interface MaquetteEnseignement
{
    public function findEachWeekOfASemester($semester):iterable;
}