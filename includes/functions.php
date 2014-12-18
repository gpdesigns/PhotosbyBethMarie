<?php 
  function redirect_to($new_location) {
    header("Location: ". $new_location);
    exit;
  }

  function find_all_categories(){
    global $connection;
    $query = "SELECT * "; 
    $query .= "FROM category ";
    $query .= "ORDER BY menu_name ASC";
    $category_set = mysqli_query($connection, $query); // collection of database rows *special*
    confirm_query($category_set); // Test if there was a query error
    return $category_set; 
  }

  function find_all_photos() {
    global $connection;
    $query = "SELECT * "; 
    $query .= "FROM photos ";
    $query .= "ORDER BY menu_name ASC";
    $photo_set = mysqli_query($connection, $query); // collection of database rows *special*
    confirm_query($photo_set); // Test if there was a query error
    return $photo_set;
  }

  function confirm_query($result_set) {
    if (!$result_set) {
      die("Database query failed");
    }
  }

  function navigation() {

  }
?>