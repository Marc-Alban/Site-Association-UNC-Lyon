<?php
declare (strict_types = 1);
namespace Unc\Controller;

use Unc\View\View;

class FrontendController
{
/**
 * Renvoie les chapitres sur la page Accueil
 *
 * @param [type] $session
 * @return void
 */
    public function homeAction(&$session): void
    {

        $view = new View;
        $view->getView('frontend', 'homeView', ['title' => 'Accueil', 'session' => $session]);
    }

    /**
     * Renvoie la page erreur
     *
     * @param [type] $session
     * @return void
     */
    public function errorAction(): void
    {
        $view = new View();
        $view->getView('frontend', 'errorView', null);
    }

}