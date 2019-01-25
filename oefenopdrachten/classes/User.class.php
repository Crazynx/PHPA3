<?php
class User
{

    private $_firstname = "";
    private $_lastname = "";
    private $_birthday = "";

    public function setUser($parFirstname, $parLastname, $parBirthday)
    {
        $this->_firstname = $parFirstname;
        $this->_lastname = $parLastname;
        $this->_birthday = $parBirthday;
    }

    public function getUser()
    {
        return 'Name: ' . $this->_firstname . ' ' . $this->_lastname . "<br>\n Birthday: " . $this->_birthday;
    }

}
?>