<?php
class Usuario{
    private $name;
    private $email;
    private $password;
    private $repassword;
    private $avatar;
    public function __construct($email,$password,$repassword=null, $name=null,$avatar=null){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->repassword = $repassword;
        $this->avatar = $avatar;
    }
    public function getNombre(){
        return $this->name;
    }
    public function setNombre($name){
        $this->name = $name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function getRepassword(){
        return $this->repassword;
    }
    public function setRepassword($password){
        $this->repassword = $repassword;
    }

    public function getAvatar(){
        return $this->avatar;
    }
    public function setAvatar($avatar){
        $this->avatar = $avatar;
    }

}
?>
