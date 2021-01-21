<?php


namespace App\Domain\Query;


use App\Domain\MaquetteEnseignement;

class ListeSemainesDeLUE12Handler
{
    private $maquetteEnseignement;

    public function __construct(MaquetteEnseignement $maquetteEnseignement)
    {
        $this->maquetteEnseignement=$maquetteEnseignement;
    }

    public function handle(ListeSemainesDeLUE12Query $requete):iterable
    {
        return $this->maquetteEnseignement->toutesLesSemainesDeLUE12();
    }
}