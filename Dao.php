<?php


class Dao{
  private $host = "us-cdbr-iron-east-03.cleardb.net";
  private $db = "heroku_79d54c135c6c093";
  private $user = "ba22791affc9be";
  private $pass = "e21a5bad";


     public function getConnection () {
        return new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
      }

     public function getUser() {
        $conn = $this->getConnection();
        return $conn->query("select user, password, email from username");
      }

    public function getID($user){

        $conn = $this->getConnection();
        //TODO: need to debug this method
        $r = $conn->query("select id from username where user = $user");
        echo $r;
        return $r;
        //return $conn->query("select id from username where user = $user");
    }

    public function chechUser($user, $password){
        $conn = $this->getConnection();
        $user = $conn-> quote($user);
        $rows = $conn->query("SELECT password FROM username WHERE user = $user");
        if ($rows){
            foreach ($rows as $row){
                if ($password === $row["password"]){
                    return TRUE;
                }
            }
        }
        return FALSE;
    }

  public function saveUser ($user, $password, $email) {
    $conn = $this->getConnection();

    $saveQuery = "insert into username (user, password, email) values (:user, :password, :email)";

    $q = $conn->prepare($saveQuery);
    $q->bindParam(":user", $user);
    $q->bindParam(":password", $password);
    $q->bindParam(":email", $email);

    $q->execute();
  }

  public function getTask($user) {

    $conn = $this->getConnection();

    $returned = $conn->query("SELECT * FROM task");
      //$returned = $conn->query("SELECT taskname, numx, done, comments FROM task WHERE user = $user")
    //print_r($conn->query("select taskname, numx, done, comments from task where user = $user"));

    return $returned;
  }

    public function saveTask ($user ,$taskName, $numx, $done, $comments) {
        $conn = $this->getConnection();

        $saveQuery = "INSERT INTO task (user, taskname, numx, done, comments) VALUES (:user, :taskname, :numx, :done, :comments)";

        $q = $conn->prepare($saveQuery);
        $q->bindParam(":user", $user);
        $q->bindParam(":taskname", $taskName);
        $q->bindParam(":numx", $numx);
        $q->bindParam(":done", $done);
        $q->bindParam(":comments", $comments);


        $q->execute();

      }

      public function userExist($user){

          $conn = $this->getConnection();
          $user = $conn-> quote($user);
          $rows = $conn->query("SELECT * FROM username WHERE user = $user");
          $res = $rows->fetchAll();

          if (sizeof($res) > 0){
              return TRUE;
          }else {
              return FALSE;
          }

      }
}

?>
