<?php
namespace src;

class Employee
{
    protected $firstName;
    protected $lastName;
    protected $birthday;
    protected $address;
    protected $role;

    public function __construct($data)
    {
        $this->firstName = $data['firstName'];
        $this->lastName = $data['lastName'];
        $this->birthday = $data['birthday'];
        $this->address = $data['address'];
        $this->role = $data['role'];
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

}