<?php

class User
{

    // private $conn;  
    // private $table = 'users';
    private  $reference;
    private  $firstname;
    private  $lastname;
    private  $age;

    // public function __construct($db)
    // {
    //     $this->conn = $db;
    // }

    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    public function setFirstName($firstname)
    {
        $this->firstname = $firstname;
    }
    public function setLastName($lastname)
    {
        $this->lastname = $lastname;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }


    public function count()
    {

        $qr = "SELECT count(*) as nb from users";
        $res = DB::connect()->query($qr)->fetch(PDO::FETCH_ASSOC);
        return $res;
    }

    public function addUser($tab)  //ajouterU
    {

        $ref = $tab['reference'];
        $first = $tab['firstname'];
        $last = $tab['Cin'];
        $age = $tab['age'];

        // $qr='INSERT INTO users (reference, firstname, lastname, age) values("'.$this->reference.'","'.$this->firstname.'","'.$this->lastname.'",'.$this->age.'")';
        $qr = "INSERT INTO `users` ( `reference`, `firstname`, `CIN`, `age`) values  ( '$ref'  ,'$first','$last','$age') ";
        // die($qr);
        $res = DB::connect()->prepare($qr);
        if ($res->execute()) {
            return 'ok';
        } else {
            return 'no';
        }
    }

    public function Signin()
    {
        $qr='SELECT * from users where reference="'.$this->reference.'"';
        $res=DB::connect()->query($qr);
       if( $row=$res->fetch(PDO::FETCH_ASSOC)){
        return $row;
        
       }
       else{
        return array("message"=>"ID is not found");
       }
        
        //    $res->close();
           $res=null;
      
    }
}
