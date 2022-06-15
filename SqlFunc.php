<?php
  function getConnection() { 
     return new mysqli("localhost", "root", "", "bfriend"); //REMOVE PORT ON RELEASE
  }
  function sql_query_to_array($queryResult) {
    try {
      if($queryResult->num_rows != 0) { //is the query length not 0
        $arrayResult = array(); // create empty array
        while ($row = $queryResult->fetch_assoc()) {
          $arrayResult[] = $row;
        } //Fill the $arrayResult array with the rows of the query

        return $arrayResult; //Correct result returned
      }else {
        throw new Exception("The query given has no rows.");
        return -1; //No rows found
      }
    }catch(Exception $e) {
      return -2; // error occurred
    }
  }
 ?>