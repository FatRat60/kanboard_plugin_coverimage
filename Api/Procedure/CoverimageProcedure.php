<?php

namespace Kanboard\Plugin\Coverimage\Api\Procedure;

use Kanboard\Api\Authorization\TaskAuthorization;
use Kanboard\Api\Procedure\BaseProcedure;

/**
 * Coverimage API controller
 * 
 * @package Kanboard\Plugin\Coverimage
 * @author Kyle Hultgren
 */
class CoverimageProcedure extends BaseProcedure
{
    public function setCoverimage($task_id, $file_id)
    {
        TaskAuthorization::getInstance($this->container)->check('CoverimageProcedure', 'setCoverimage', $task_id);

        $this->coverimageModel->setCoverimage($task_id, $file_id);
        return $this->coverimageModel->getCoverimage($task_id) != null ? true : false;
    }

    public function removeCoverimage($task_id)
    {
        TaskAuthorization::getInstance($this->container)->check('CoverimageProcedure', 'removeCoverimage', $task_id);

        $this->coverimageModel->removeCoverimage($task_id);
        return $this->coverimageModel->getCoverimage($task_id) == null ? true : false;
    }
}