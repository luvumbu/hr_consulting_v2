<?php
 

class Bdd_class {
  // Properties
 
public $servername ; 
public $username ; 
public $password ; 
public $dbname ;
public $boolean_connection ;
public $count = 0 ; 

public $row_1 =false;
public $row_2 =false;
public $row_3 =false;
public $row_4 =false;
public $row_5 =false;

public $row_6 =false;
public $row_7 =false;
public $row_8 =false;
public $row_9 =false;
public $row_10 =false;

public $row_11 =false;
public $row_12 =false;
public $row_13 =false;
public $row_14 =false;
public $row_15 =false;

public $row_16 =false;
public $row_17 =false;
public $row_18 =false;
public $row_19 =false;
public $row_20 =false;


public $get_row_1 =array();
public $get_row_2 =array();
public $get_row_3 =array();
public $get_row_4 =array();
public $get_row_5 =array();

public $get_row_6 =array();
public $get_row_7 =array();
public $get_row_8 =array();
public $get_row_9 =array();
public $get_row_10 =array();

public $get_row_11 =array();
public $get_row_12 =array();
public $get_row_13 =array();
public $get_row_14 =array();
public $get_row_15 =array();

public $get_row_16 =array();
public $get_row_17 =array();
public $get_row_18 =array();
public $get_row_19 =array();
public $get_row_20 =array();





 






  function __construct(
  $servername,
  $username,
  $password,
  $dbname) {
    $this->servername = $servername;
    $this->username = $username;
    $this->password = $password;
    $this->dbname = $dbname;
  
    $this->exe_resul = false;
    
  }

function exe(){
    try {
        $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        return true  ; 
      } catch(PDOException $e) {
       // echo "Connection failed: " . $e->getMessage();
         
        return false; 
      }
}
function set_action($sql){   
 
      if($this->exe()){
      // Create connection
      $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      // sql to create table
      $conn->query($sql) ;
      $conn->close(); 

      }
}


function set_update($sql){   
$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
}

function set_all_exe($sql){   
    $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
     
    
    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }
    
    $conn->close();
    }
    
 
// Mise a jour d'un element dans la BDD

function get_count() {
    return $this->count ; 
}
 

function set_row_1($row){
      $this->row_1 =$row ;
      
}
function set_row_2($row){
$this->row_2 =$row ;
}
function set_row_3($row){
$this->row_3 =$row ;
}
function set_row_4($row){
$this->row_4 =$row ;
}
function set_row_5($row){
$this->row_5 =$row ;
}

function set_row_6($row){
$this->row_6 =$row ;
}
function set_row_7($row){
$this->row_7 =$row ;
}
function set_row_8($row){
$this->row_8 =$row ;
}

function set_row_9($row){
  $this->row_9 =$row ;
}

function set_row_10($row){
    $this->row_10 =$row ;
} 
function set_row_11($row){
  $this->row_11 =$row ;
} 
function set_row_12($row){
  $this->row_12 =$row ;
} 
function set_row_13($row){
  $this->row_13 =$row ;
} 
function set_row_14($row){
  $this->row_14 =$row ;
} 
function set_row_15($row){
  $this->row_15 =$row ;
} 
function set_row_16($row){
  $this->row_16 =$row ;
} 
function set_row_17($row){
  $this->row_17 =$row ;
} 
function set_row_18($row){
  $this->row_18 =$row ;
} 
function set_row_19($row){
  $this->row_19 =$row ;
} 
function set_row_20($row){
  $this->row_20 =$row ;
}

function set_row_21($row){
    $this->row_1 =$row ;
    
}
function set_row_22($row){
$this->row_2 =$row ;
}
function set_row_23($row){
$this->row_3 =$row ;
}
function set_row_24($row){
$this->row_4 =$row ;
}
function set_row_25($row){
$this->row_5 =$row ;
}



function get_row_1($number){
 
      return $this->get_row_1[$number] ; 
}
function get_row_2($number){
  return $this->get_row_2[$number] ; 
}
function get_row_3($number){
  return $this->get_row_3[$number] ; 
}
function get_row_4($number){
  return $this->get_row_4[$number] ; 
}
function get_row_5($number){
  return $this->get_row_5[$number] ; 
}

function get_row_6($number){
  return $this->get_row_6[$number] ; 
}
function get_row_7($number){
  return $this->get_row_7[$number] ; 
}
function get_row_8($number){
  return $this->get_row_8[$number] ; 
}

function get_row_9($number){
  return $this->get_row_9[$number] ; 
}

function get_row_10($number){
  return $this->get_row_10[$number] ; 
} 
function get_row_11($number){
  return $this->get_row_11[$number] ; 
} 
function get_row_12($number){
  return $this->get_row_12[$number] ; 
} 
function get_row_13($number){
  return $this->get_row_13[$number] ; 
} 
function get_row_14($number){
  return $this->get_row_14[$number] ; 
} 
function get_row_15($number){
  return $this->get_row_15[$number] ; 
} 
function get_row_16($number){
  return $this->get_row_16[$number] ; 
} 
function get_row_17($number){
  return $this->get_row_17[$number] ; 
} 
function get_row_18($number){
  return $this->get_row_18[$number] ; 
} 
function get_row_19($number){
  return $this->get_row_19[$number] ; 
}   
function get_row_20($number){
  return $this->get_row_20[$number] ; 
}

function get_row_21($number){
 
    return $this->get_row_1[$number] ; 
}
function get_row_22($number){
return $this->get_row_2[$number] ; 
}
function get_row_23($number){
return $this->get_row_3[$number] ; 
}
function get_row_24($number){
return $this->get_row_4[$number] ; 
}
function get_row_25($number){
return $this->get_row_5[$number] ; 
}

  

 
function not_false( $el1,$el2 ){

  
  //$this->get_row_1 =   $row[$this->row_1] ; 
$el1 = $el2; 

}
 


 

function select_info($selection){


      if($this->exe()){



                // Create connection
                $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
              // Check connection
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              $sql = $selection;
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {

                  
 
                  if($this->row_1!=false){                  
                    array_push($this->get_row_1,$row[$this->row_1]);
                    $this->count ++ ;                    
                  }
                  if($this->row_2!=false){                
                     
                    array_push($this->get_row_2,$row[$this->row_2]);                      
                  }
                  if($this->row_3!=false){                
                 
                    array_push($this->get_row_3,$row[$this->row_3]);                        
                  }
                  if($this->row_4!=false){                 
                    array_push($this->get_row_4,$row[$this->row_4]);                        
                  }
                  if($this->row_5!=false){                
                  
                    array_push($this->get_row_5,$row[$this->row_5]);                      
                  }

                  if($this->row_6!=false){                
                    array_push($this->get_row_6,$row[$this->row_6]);                       
                  }
                  if($this->row_7!=false){                
                    array_push($this->get_row_7,$row[$this->row_7]);                       
                  }
                  if($this->row_8!=false){                
                    array_push($this->get_row_8,$row[$this->row_8]);                        
                  }
                  if($this->row_9!=false){                
                    array_push($this->get_row_9,$row[$this->row_9]);                        
                  }
                  if($this->row_10!=false){                
                    array_push($this->get_row_10,$row[$this->row_10]);                        
                  }
                  if($this->row_11!=false){                
                    array_push($this->get_row_11,$row[$this->row_11]);                        
                  }
                  if($this->row_12!=false){                
                    array_push($this->get_row_12,$row[$this->row_12]);                        
                  }
                  if($this->row_13!=false){                
                    array_push($this->get_row_13,$row[$this->row_13]);                        
                  }
                  if($this->row_14!=false){                
                    array_push($this->get_row_14,$row[$this->row_14]);                        
                  }
                  if($this->row_15!=false){                
                    array_push($this->get_row_15,$row[$this->row_15]);                        
                  }
                  if($this->row_16!=false){                
                    array_push($this->get_row_16,$row[$this->row_16]);                        
                  }
                  if($this->row_17!=false){                
                    array_push($this->get_row_17,$row[$this->row_17]);                        
                  }
                  if($this->row_18!=false){                
                    array_push($this->get_row_18,$row[$this->row_18]);                        
                  }
                  if($this->row_19!=false){                
                    array_push($this->get_row_19,$row[$this->row_19]);                        
                  }
                  if($this->row_20!=false){                
                    array_push($this->get_row_20,$row[$this->row_20]);                        
                  }

                  if($this->row_21!=false){                  
                    array_push($this->get_row_1,$row[$this->row_1]);
                    $this->count ++ ;                    
                  }
                  if($this->row_22!=false){                
                     
                    array_push($this->get_row_2,$row[$this->row_2]);                      
                  }
                  if($this->row_23!=false){                
                 
                    array_push($this->get_row_3,$row[$this->row_3]);                        
                  }
                  if($this->row_24!=false){                 
                    array_push($this->get_row_4,$row[$this->row_4]);                        
                  }
                  if($this->row_25!=false){                
                  
                    array_push($this->get_row_5,$row[$this->row_5]);                      
                  }
 
                     

                }
              } else {
                echo "0 results";
              }
              $conn->close();
              } 
      }
}
/*
$servername = "localhost";
$username = "u481158665_ffa";
$password = "v3p9r3e@59A";
$dbname = "u481158665_ffa";
/*

 /*
$servername = "localhost";
$username = "root";
$password = "";
$dbname="athletisme_v3";
 
 
$apple = new Bdd_class(
$servername,
$username,
$password,
$dbname);
// Creation ed la classe
//echo $apple->exe();

 
  $apple->set_action ("CREATE TABLE imagination2 (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )");

$apple->set_update('UPDATE aa1 SET lastname="luvumbuokoko" WHERE email="545151"') ; 
echo "<br/>" ; 
 
$apple->set_all_exe('DELETE FROM `aa1` WHERE `aa1`.`id` = 1') ; 
// Methode select 
 
//$apple->set_row_1("get_result_users_nom_1") ;
//$apple->select_info('SELECT * FROM `info_all` WHERE 1 LIMIT 100000') ;





 

for($i = 0 ; $i<$apple->get_count() ; $i++){


    echo  $apple->get_row_1($i);
    echo "<br>" ; 
}
 */
?>