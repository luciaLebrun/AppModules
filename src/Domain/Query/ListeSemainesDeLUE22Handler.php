<?php


namespace App\Domain\Query;


use App\Domain\MaquetteEnseignement;

class ListeSemainesDeLUE22Handler
{
    private $maquetteEnseignement;

    public function __construct(MaquetteEnseignement $maquetteEnseignement)
    {
        $this->maquetteEnseignement=$maquetteEnseignement;
    }

    public function handle(ListeSemainesDeLUE22Query $requete):iterable
    {
        return $this->maquetteEnseignement->toutesLesSemainesDeLUE22();
    }
}