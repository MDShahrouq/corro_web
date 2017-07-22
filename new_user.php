<?php
/*ob_start("ob_gzhandler");*/  //Enables Gzip compression 

session_start();
if($_SESSION['login_reimburse_app'] == 1){

}else{
  echo "<script>location='index.php'</script>";
}

?>
<html>
  <head>
    <!-- Material Design Lite -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="css/material.min.css">
      <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>
  <!-- <style type="text/css">
    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
  </style> -->
  <style type="text/css">
.mdl-textfield {
    position: relative;
    font-size: 16px;
    display: inline-block;
    box-sizing: border-box;
    width: 300px;
    max-width: 100%;
    /* margin: 0; */
    margin-top: -1%;
    padding: 20px 0;
}
</style>
  <body>

<?php
if(isset($_POST['delete_btn'])){
  $url_delete_user = 'https://reimburse.herokuapp.com/delete_user/';
  $options_delete_user = array(
    'http' => array(
      'header'  => array(
                  'USER-ID: '.$_POST['pk_delete'],
                ),
      'method'  => 'GET',
    ),
  );
  $context_delete_user = stream_context_create($options_delete_user);
  $output_delete_user = file_get_contents($url_delete_user, false,$context_delete_user);
  /*echo $output_get_all_accounts;*/
  $arr_delete_user = json_decode($output_delete_user,true);
/*  echo $arr_get_all_accounts;*/
}?> 

<?php

session_start();
if(isset($_POST['submit'])){

  $url_check_count = 'https://reimburse.herokuapp.com/check_no_of_users_in_org/';
  $options_check_count = array(
    'http' => array(
      'header'  => array(
                  'ACCOUNT-TOKEN: '.$_SESSION['account_token'],
                ),
      'method'  => 'GET',
    ),
  );
  $context_check_count = stream_context_create($options_check_count);
  $output_check_count = file_get_contents($url_check_count, false,$context_check_count);
  /*echo $output_check_count;*/
  $arr_check_count = json_decode($output_check_count,true);
  /*echo $arr_check_count['count'];*/
  if($arr_check_count['count'] >= 10){
    echo "<script type='text/javascript'>alert('Ten users already exists.');</script>";
  }else{
    /*echo "<script type='text/javascript'>alert('Ten users does not already exists.');</script>";*/
    $url = 'https://reimburse.herokuapp.com/organization_users/';
    $data = array(
                'name' => $_POST['name'],
                'designation' => $_POST['designation'],
                'department' => $_POST['department'],
                'mobile' => $_POST['phone'],
                'email' => $_POST['email'],
                'username' => $_POST['username'],
                'password' => $_POST['password'],
                'account_token' => $_SESSION['account_token'],
                'image_id' => ''
              );

      $options = array(
        'http' => array(
          'header'  => "Content-Type: application/json\r\n" .
                       "Accept: application/json\r\n",
          'method'  => 'POST',
          'content' => json_encode( $data ),
        ),
      );
      $context  = stream_context_create($options);
      $result = file_get_contents($url, false, $context);
      $arr = json_decode($result,true);
  }

}
?>
     <!-- Always shows a header, even in smaller screens. -->
  
    <div class="demo-layout-transparent mdl-layout mdl-js-layout">
    <header style="background-color:#3f51b5;height:100px;" class="mdl-layout__header mdl-layout__header--transparent">

        <div class="mdl-layout__header-row">
           <!-- Title -->
          <span class="mdl-layout-title">CORRO</span>
          
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <a href="logout.php"><img id="logout" style="margin-top:49px" src="images/logout_btn.png"></img></a> 
          <!-- Navigation. We hide it in small screens. -->
        </div>
      </header>
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">CORRO</span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="#!">OVERVIEW</a>
          <a class="mdl-navigation__link" href="home.php">EXPENSE REPORT</a>
          <a class="mdl-navigation__link" href="#!">BOOKING</a>
          <a class="mdl-navigation__link" href="new_user.php">SETTING's</a>
          <a class="mdl-navigation__link" href="#!">REPORT</a>
        </nav>
      </div>

    <main class="mdl-layout__content">
      <div class="page-content">
    <!-- Textfield with Floating Label -->
    <div class="mdl-grid">
    <div class="mdl-components mdl-js-components mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-desktop">
   <center>
    <form  action="#" style="margin-top:0px;" method="post">
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="name" name="name">
        <label class="mdl-textfield__label" for="sample3">NAME</label>
      </div>
      <br>

       <div style="margin-top:-5%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="designation" name="designation">
        <label class="mdl-textfield__label" for="sample3">DESIGNATION</label>
      </div>
      <br>

      <div style="margin-top:-5%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="department" name="department">
        <label class="mdl-textfield__label" for="sample3">DEPARTMENT</label>
      </div>
      <br>

      <div style="margin-top:-5%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="email" name="email">
        <label class="mdl-textfield__label" for="sample3">EMAIL</label>
      </div>
      <br>

      <div style="margin-top:-5%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="phone" name="phone">
        <label class="mdl-textfield__label" for="sample3">PHONE</label>
      </div>
      <br>

      <div style="margin-top:-5%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="username" name="username">
        <label class="mdl-textfield__label" for="sample3">USERNAME</label>
      </div>
      <br>

      <div style="margin-top:-5%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="password" name="password">
        <label class="mdl-textfield__label" for="sample3">PASSWORD</label>
      </div>
      <br>

        <!-- Accent-colored raised button with ripple -->
    <button name="submit" id="submit" style="background-color: #5cb85c;width:7em;margin-top:0%" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
      Save
    </button>

<!--      <button style="background-color:#d9534f" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
      Delete
    </button> -->
    </form>
    </center>
    </div>


<?php
  $url_get_all_users = 'https://reimburse.herokuapp.com/get_all_users/';
  $options_get_all_users = array(
    'http' => array(
      'header'  => array(
                  'ACCOUNT-TOKEN: '.$_SESSION['account_token'],
                ),
      'method'  => 'GET',
    ),
  );
  $context_get_all_users = stream_context_create($options_get_all_users);
  $output_get_all_users = file_get_contents($url_get_all_users, false,$context_get_all_users);
  /*echo $output_get_all_users;*/
  $arr_get_all_users = json_decode($output_get_all_users,true);
/*  echo $arr_get_all_users;*/
  
?>
<div class="mdl-components mdl-js-components mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-desktop">
<table align="center" style="box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 1px -2px rgba(0, 0, 0, .2), 0 1px 5px 0 rgba(0, 0, 0, .12);" class="mdl-data-table mdl-js-data-table">
        <thead>
            <tr>
                <th class="mdl-data-table__cell--non-numeric">Name</th> 
                <th class="mdl-data-table__cell--non-numeric">Designation</th>
                <th class="mdl-data-table__cell--non-numeric">Department</th>
                <th class="mdl-data-table__cell--non-numeric">Email</th>
                <th class="mdl-data-table__cell--non-numeric">Phone</th>
                <!-- <th>Edit</th> -->
                <th class="mdl-data-table__cell--non-numeric">Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php for($x=0;$x<count($arr_get_all_users);$x++){?>
          <?php for($y=0;$y<count($arr_get_all_users[$x]['profile']);$y++){?>

              <td class="mdl-data-table__cell--non-numeric"><?php echo $arr_get_all_users[$x]['profile'][$y]['name'] ?></td>
              <td class="mdl-data-table__cell--non-numeric"><?php echo $arr_get_all_users[$x]['profile'][$y]['designation'] ?></td>
              <td class="mdl-data-table__cell--non-numeric"><?php echo $arr_get_all_users[$x]['profile'][$y]['department'] ?></td>
              <td class="mdl-data-table__cell--non-numeric"><?php echo $arr_get_all_users[$x]['profile'][$y]['email'] ?></td>
              <td class="mdl-data-table__cell--non-numeric"><?php echo $arr_get_all_users[$x]['profile'][$y]['mobile'] ?></td>
             <!--  <td>
                <form method="post" action="edit_account.php">
                  <input type="hidden" name="pk_value" value="<?php echo $arr_get_all_users[$x]['profile'][$y]['pk'] ?>">
                  <button style="width:55px;height:30px" type="submit" name="edit_btn">Edit</button>
                </form>
              </td> -->
                     <td>
                        <form method="post" action="new_user.php">
                          <input type="hidden" name="pk_delete" value="<?php echo $arr_get_all_users[$x]['profile'][$y]['pk'] ?>">
                          <button onclick="return confirm('Are you sure you want to delete?');" style="width:55px;height:30px" type="submit" name="delete_btn">Delete</button>
                         </form>
                     </td>
             
            </tr>

          <?php }?>
          <?php }?>
        </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </main>
    </div>
    </body>
    </html>