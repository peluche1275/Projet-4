<?php

namespace Model;

class ModerationManagerPDO extends ModerationManager
{
    public function getList($debut = -1, $limite = -1)
    {
        $sql = 'SELECT idcom FROM moderation ORDER BY id DESC';

        if ($debut != -1 || $limite != -1) {
            $sql .= ' LIMIT ' . (int) $limite . ' OFFSET ' . (int) $debut;
        }

        $listModeration = $this->dao->query($sql)->fetchAll();
        return $listModeration;
    }
}