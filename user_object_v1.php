<?php

class User {

    public $username = "";
    public $birthday = "";

    public function setUsername($firstname, $lastname, $DOB) {
        $this->username = $firstname." ".$lastname;
        $this->birthday = $DOB;
    }

    public function getUsername() {
        return $this->username."<br>".$this->birthday;
    }

}

$lars = new User();
$lars->setUsername('Lars', 'van Vliet', '05-04-2002');
echo $lars->getUsername();


?>