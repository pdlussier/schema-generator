<?php


namespace SchemaOrg;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Move Action
 * 
 * @link http://schema.org/MoveAction
 * 
 * @ORM\MappedSuperclass
 */
class MoveAction extends Action
{
    /**
     * From Location
     * 
     * @var Place $fromLocation A sub property of location. The original location of the object or the agent before the action.
     * 
     * @ORM\ManyToOne(targetEntity="Place")
     */
    private $fromLocation;
    /**
     * To Location
     * 
     * @var Place $toLocation A sub property of location. The final location of the object or the agent after the action.
     * 
     * @ORM\ManyToOne(targetEntity="Place")
     */
    private $toLocation;
}
