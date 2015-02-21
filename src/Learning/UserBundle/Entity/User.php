<?php

namespace Learning\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 */
class User extends BaseUser
{

    private $firstName;
    private $lastName;

    /**
     * constructor
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param string
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string
     * @return string
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @param string
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string
     * @return string
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }



}