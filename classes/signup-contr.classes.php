<?php

class SignupContr extends Signup {

  private $uid;
  private $pwd;
  private $pwdRepeat;
  private $email;

  public function __construct($uid, $pwd, $pwdRepeat, $email)
  {
    $this->uid = $uid;
    $this->pwd = $pwd;
    $this->pwdRepeat = $pwdRepeat;
    $this->email = $email;
  }

  public function signupUser() {
    if ($this->emptyInput() == false) {
      // echo "Empty input!";
      header("Location: ../index.php?error=emptyinput");
      exit();
    }
    if ($this->invalidUid() == false) {
      // echo "Invalid username!";
      header("Location: ../index.php?error=username");
      exit();
    }
    if ($this->invalidEmail() == false) {
      // echo "Invalid email!";
      header("Location: ../index.php?error=email");
      exit();
    }
    if ($this->pwdMatch() == false) {
      // echo "Passwords don't match!";
      header("Location: ../index.php?error=passwordmatch");
      exit();
    }
    if ($this->uidTakenCheck() == false) {
      // echo "Username or email taken!";
      header("Location: ../index.php?error=useroremailtaken");
      exit();
    }

    $this->setUser($this->uid, $this->pwd, $this->email);
  }

  // private function emptyInput() {
    
  //   if ( $this->uid !== "" || $this->pwd !== "" || $this->pwdRepeat !== "" || $this->email !== "" ) {
  //     return false;
  //   } 
  //   return true;
    
  // }

  private function emptyInput() {
    $result = "";
    if(empty($this->uid)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }
  // private function emptyInput() {
  //   $result = "";
  //   if(empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email)) {
  //     $result = false;
  //   } else {
  //     $result = true;
  //   }
  //   return $result;
  // }

  private function invalidUid() {
    $result = "";
    if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }

  private function invalidEmail() {
    $result = "";
    if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }

  private function pwdMatch() {
    
    if ($this->pwd !== $this->pwdRepeat) {
      return false;
    } 
  }
  // private function pwdMatch() {
  //   $result = "";
  //   if ($this->pwd !== $this->pwdRepeat) {
  //     $result = false;
  //   } else {
  //     $result = true;
  //   }
  //   return $result;
  // }

  // naziv funkcije je drugaciji
  private function uidTakenCheck() {
    $result = "";
    if (!$this->checkUser($this->uid, $this->email)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }

}

?>