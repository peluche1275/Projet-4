<?php

namespace Model;

use \OCFram\Manager;

abstract class ModerationManager extends Manager
{
    abstract public function getList($debut = -1, $limite = -1);
}