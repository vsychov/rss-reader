<?php

declare(strict_types=1);

namespace App\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    //username is the same, that email field
    public function setEmail($email)
    {
        $this->setUsername($email);
        return parent::setEmail($email);
    }
}