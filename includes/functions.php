<?php 
  function redirect_to($new_location) {
    header("Location: ". $new_location);
    exit;
  }

  function find_all_categories(){
    global $connection;
    $query = "SELECT * "; 
    $query .= "FROM category ";
    $query .= "ORDER BY position ASC";
    $category_set = mysqli_query($connection, $query); // collection of database rows *special*
    confirm_query($cateogry_set); // Test if there was a query error
    return $category_set; 
  }

  function navigation() {

  }
?>