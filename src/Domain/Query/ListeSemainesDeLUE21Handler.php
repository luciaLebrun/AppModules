<?php


namespace App\Domain\Query;


use App\Domain\MaquetteEnseignement;

class ListeSemainesDeLUE21Handler
{
    private $maquetteEnseignement;

    public function __construct(MaquetteEnseignement $maquetteEnseignement)
    {
        $this->maquetteEnseignement=$maquetteEnseignement;
    }

    public function handle(MaquetteEnseignementQuery $requete):iterable
    {
        return $this->maquetteEnseignement->toutesLesSemainesDeLUE21();
    }
}