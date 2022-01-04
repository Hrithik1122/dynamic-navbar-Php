<!-- Nav Bar Dynamic -->

<?php
    require_once 'db.php';
    display_menu();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="htmlcss bootstrap menu, navbar, hover nav menu CSS examples" />
    <meta name="description" content="Bootstrap 5 navbar hover examples for any type of project, Bootstrap 5" />
    
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <title></title>
    
    <script type="text/javascript" src="script.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
<body>

<!-- ============= NAVBAR ============== -->
<div style="background-color: black;">
<div class="container">

<nav class="navbar navbar-expand-lg navbar navbar-dark mw-100" style="background-color: black;">
 <div class="container-fluid">
     <!-- <a class="navbar-brand" href="#">Brand</a> -->
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="main_nav" style="justify-content: center !important;">

    <?= display_menu() ?>
    <!-- <ul class="navbar-nav">
        <li class="nav-item active"> <a class="nav-link" href="#">HOME</a> </li>
        <li class="nav-item"><a class="nav-link" href="#"> ABOUT US</a></li>
        <li class="nav-item"><a class="nav-link" href="#"> SERVICES </a></li>
        <li class="nav-item dropdown">
            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> COUNTRIES </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
              <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
              <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> PARTNERS </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
              <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
              <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
            </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="#"> SUCCESS STORIES </a></li>
        <li class="nav-item"><a class="nav-link" href="#"> EVENTS </a></li>
        <li class="nav-item"><a class="nav-link" href="admin.php"> ADMIN </a></li>
        <li class="nav-item"><a class="nav-link" href="#"> CONTACT US </a></li>
    </ul> -->

  </div> <!-- navbar-collapse.// -->
 </div> <!-- container-fluid.// -->
</nav>
</div><!-- container //  -->
</div>



<!-- Adding & Deleting Nav Bar Dynamically -->

<style>
.button {
  background-color: #192844;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
  .form_wrapper{
    text-align: center;
    width: 400px;
  }
  .form_wrapper input,
  .form_wrapper select{
    padding: 10px;
    width: 100%;
    margin: 5px;
    box-sizing: border-box;
  }
</style>

<div class="form_wrapper">
  <h3>Add Menu List item</h3>
  <form action="add_menu.php" method="post">
    <input type="text" name="menu_title" placeholder="Type menu item name">
    <input type="text" name="menu_page" placeholder="Menu navigation location page (optional)">
    <select name="menu_id">
      <option value="">Select a parent menu (optional)</option>
      <?= get_parent_menus() ?>
    </select>
    <br>
    <input type="submit" name="submit" class="button" value="Add menu item">
  </form>
</div>

<div class="form_wrapper">
  <h3>Delete Menu List item.</h3>
  <form action="delete_menu.php" method="post">
    <select name="menu_id">
      <option value="">Select a menu to delete</option>
      <?= get_all_menus() ?>
    </select>
    <br>
    <input type="submit" name="submit" class="button" value="Delete menu item">
  </form>
</div>

</body>
</html>