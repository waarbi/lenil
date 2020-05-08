<?php


namespace App\Twig;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends  AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('format', [$this, 'formatDateFrench']),
        ];
    }

    public function formatDateFrench($date){
        setlocale(LC_TIME, 'fr_FR.UTF8', 'fr.UTF8', 'fr_FR.UTF-8', 'fr.UTF-8');
        $dateformatee = '';
        if (!is_null($date)){
            $timestamp = $date->getTimestamp();
            $dateformatee = strftime('%d %B %Y',$timestamp);
        }
        return $dateformatee;

    }

}