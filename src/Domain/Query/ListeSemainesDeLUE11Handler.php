<?php


namespace App\Domain\Query;

use App\Domain\MaquetteEnseignement;

class ListeSemainesDeLUE11Handler
{
    private $maquetteEnseignement;

    public function __construct(MaquetteEnseignement $maquetteEnseignement)
    {
        $this->maquetteEnseignement=$maquetteEnseignement;
    }

    public function handle(ListeSemainesDeLUE11Query $requete):iterable
    {
        return $this->maquetteEnseignement->toutesLesSemainesDeLUE11();
    }
}