<?php

namespace App\Backend;

use \OCFram\Application;

class BackendApplication extends Application
{

    // CONSTRUCTOR //

    public function __construct()
    {
        parent::__construct();

        $this->name = 'Backend';
    }

    // METHOD //

    public function run()
    {
        if ($this->user->isAuthenticated()) {
            $controller = $this->getController();
        } else {
            $controller = new Modules\Connexion\ConnexionController($this, 'Connexion', 'index');
        }

        $controller->execute();

        $this->httpResponse->setPage($controller->page());
        $this->httpResponse->send();
    }
}
