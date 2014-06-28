<?php


namespace SchemaOrg;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Join Action
 * 
 * @link http://schema.org/JoinAction
 * 
 * @ORM\Entity
 */
class JoinAction extends InteractAction
{
    /**
     * Event
     * 
     * @var Event $event Upcoming or past event associated with this place or organization.
     * 
     */
    private $event;
}
