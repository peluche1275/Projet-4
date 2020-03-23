<?php

namespace Model;

use \OCFram\Manager;
use \Entity\News;

abstract class NewsManager extends Manager
{
    abstract protected function add(News $news);

    public function save(News $news)
    {
        if ($news->isValid()) {
            $news->isNew() ? $this->add($news) : $this->modify($news);
        } else {
            throw new \RuntimeException('Le billet doit être validé pour être enregistrée');
        }
    }

    abstract public function count();

    abstract public function delete($id);

    abstract public function getList($debut = -1, $limite = -1);

    abstract public function getUnique($id);

    abstract protected function modify(News $news);
}
