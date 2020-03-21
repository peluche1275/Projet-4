<?php

namespace Model;

use \OCFram\Manager;
use \Entity\Comment;

abstract class CommentsManager extends Manager
{
    abstract protected function add(Comment $comment);

    abstract public function delete($id);

    abstract public function deleteFromNews($news);

    public function save(Comment $comment)
    {
        if ($comment->isValid()) {
            $comment->isNew() ? $this->add($comment) : $this->modify($comment);
        } else {
            throw new \RuntimeException('Le commentaire doit être validé pour être enregistré');
        }
    }

    abstract public function getListOf($news);

    abstract protected function modify(Comment $comment);

    abstract public function get($id);
}
