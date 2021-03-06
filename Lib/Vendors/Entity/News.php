<?php

namespace Entity;

use \OCFram\Entity;

class News extends Entity
{
    // PROPERTIES //

    protected $titre,
        $contenu,
        $dateAjout,
        $dateModif;

    const TITRE_INVALIDE = 2;
    const CONTENU_INVALIDE = 3;

    // METHOD //

    public function isValid()
    {
        return !(empty($this->titre) || empty($this->contenu));
    }


    // SETTERS //


    public function setTitre($titre)
    {
        if (!is_string($titre) || empty($titre)) {
            $this->erreurs[] = self::TITRE_INVALIDE;
        }

        $this->titre = $titre;
    }

    public function setContenu($contenu)
    {
        if (!is_string($contenu) || empty($contenu)) {
            $this->erreurs[] = self::CONTENU_INVALIDE;
        }

        $this->contenu = $contenu;
    }

    public function setDateAjout(\DateTime $dateAjout)
    {
        $this->dateAjout = $dateAjout;
    }

    public function setDateModif(\DateTime $dateModif)
    {
        $this->dateModif = $dateModif;
    }

    // GETTERS //

    public function titre()
    {
        return $this->titre;
    }

    public function contenu()
    {
        return $this->contenu;
    }

    public function dateAjout()
    {
        return $this->dateAjout;
    }

    public function dateModif()
    {
        return $this->dateModif;
    }
}
