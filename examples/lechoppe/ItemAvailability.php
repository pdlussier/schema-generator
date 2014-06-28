<?php

/*
 * This file is part of the L'Échoppe package.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Echoppe\CoreBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Item Availability
 * 
 * @author Kévin Dunglas <dunglas@gmail.com>
 * @link http://schema.org/ItemAvailability
 * 
 * @ORM\Entity
 */
class ItemAvailability extends Enumeration
{
}
