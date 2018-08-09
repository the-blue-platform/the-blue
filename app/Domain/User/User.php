<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/09
 * Time: 12:51
 */

namespace Blue\Domain\User;


class User
{

    public $id;
    public $email;
    public $firstName;
    public $lastName;
    public $location;

    /**
     * User constructor.
     * @param $id
     * @param $email
     * @param $firstName
     * @param $lastName
     * @param $location
     */
    public function __construct($id, $email, $firstName, $lastName, $location)
    {
        $this->id = $id;
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->location = $location;
    }

    /**
     * @return Display name
     */
    public function getDisplayName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}