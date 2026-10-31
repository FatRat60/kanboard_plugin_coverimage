<?php

namespace Kanboard\Plugin\Coverimage\Api\Procedure;

use Kanboard\Api\Authorization\ProjectAuthorization;
use Kanboard\Api\Procedure\BaseProcedure;

/**
 * Project Coverimage API controller
 * 
 * @package Kanboard\Plugin\Coverimage
 * @author Kyle Hultgren
 */
class ProjectCoverimageProcedure extends BaseProcedure
{
    public function setProjectCoverimage($project_id, $file_id)
    {
        if (empty($this->projectModel->getById($project_id)) || !$this->db->table(TaskFileModel::TABLE)->eq('id', $file_id)->exists())
            return false;

        ProjectAuthorization::getInstance($this->container)->check('ProjectCoverimageProcedure', 'setProjectCoverimage', $project_id);

        $this->projectcoverimageModel->setCoverimage($project_id, $file_id);
        return $this->projectcoverimageModel->getCoverimage($project_id) != null ? true : false;
    }

    public function removeProjectCoverimage($project_id)
    {
        if (empty($this->projectModel->getById($project_id)))
            return false;

        ProjectAuthorization::getInstance($this->container)->check('ProjectCoverimageProcedure', 'removeProjectCoverimage', $project_id);

        $file_id = null;
        $coverimage = $this->projectcoverimageModel->getCoverimage($project_id);
        if ($coverimage)
            $file_id = $coverimage->id;
        
        $this->projectcoverimageModel->removeCoverimage($project_id);
        return $this->projectcoverimageModel->getCoverimage($project_id) == null ? $file_id : false;
    }
}