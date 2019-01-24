<?php

class User
{

    private $_firstname = "";
    private $_lastname = "";
    private $_birthday = "";

    public function setUser($parFirstname = "", $parLastname = "", $parBirthday = "01-01-1900") 
    {
        $this->_firstname = $parFirstname;
        $this->_lastname = $parLastname;
        $this->_birthday = $parBirthday;
    }

    public function getUser()
    {
        return 'Name: '.$this->_firstname.' '.$this->_lastname."<br>\n Birthday: ".$this->_birthday;
    }

}

$lars = new User();
$lars->setUser('Lars', 'van Vliet', '05-04-2002');
echo $lars->getUser();


?>