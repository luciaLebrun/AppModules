<?php


namespace App\Domain;


interface MaquetteEnseignement
{
    public function toutesLesSemaines():iterable;
    public function toutesLesSemainesDeLUE11():iterable;
    public function toutesLesSemainesDeLUE12():iterable;
    public function toutesLesSemainesDeLUE21():iterable;
    public function toutesLesSemainesDeLUE22():iterable;
    public function toutesLesSemainesDeLUE31():iterable;
    public function toutesLesSemainesDeLUE32():iterable;
    public function toutesLesSemainesDeLUE41():iterable;
    public function toutesLesSemainesDeLUE42():iterable;
    public function toutesLesSemainesDeLP():iterable;
}