<?php

class User {

    private $_firstname = "";
    private $_lastname = "";
    private $_birthday = "";

    public function __construct($parFirstname, $parLastname, $parbirthday) {
        $this->_firstname = $parFirstname;
        $this->_lastname = $parLastname;
        $this->_birthday = $parbirthday;
    }

    public function setUsername($firstname, $lastname, $DOB) {
        $this->fullname = $firstname." ".$lastname;
        $this->birthday = $DOB;
    }

    public function getUsername() {
        return $this->_firstname."<br>".$this->_lastname."<br>".$this->_birthday;
    }

}

$lars = new User('Lars', 'van Vliet', '05-04-2002');
echo $lars->getUsername();


?>