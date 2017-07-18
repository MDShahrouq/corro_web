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
    <link rel="stylesheet" href="css/new_user.css">
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>
  <body>

<?php
if(isset($_POST['delete_btn'])){
  $url_delete_account = 'https://reimburse.herokuapp.com/delete_account/';
  $options_delete_account = array(
    'http' => array(
      'header'  => array(
                  'PK-DELETE: '.$_POST['pk_delete'],
                ),
      'method'  => 'GET',
    ),
  );
  $context_delete_account = stream_context_create($options_delete_account);
  $output_delete_account = file_get_contents($url_delete_account, false,$context_delete_account);
  /*echo $output_get_all_accounts;*/
  $arr_delete_account = json_decode($output_delete_account,true);
/*  echo $arr_get_all_accounts;*/
}?> 
<?php
if(isset($_POST['submit'])){
  $url = 'https://reimburse.herokuapp.com/accounts/';
  $data = array(
              'organization' => $_POST['organization'],
              'admin_username' => $_POST['username'],
              'admin_password' => $_POST['password'],
              'role' => 'admin'
            );

    // use key 'http' even if you send the request to https://...
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
    /*echo $result8;*/
    $arr = json_decode($result,true);
    /*if($arr != ''){
      echo "<script>alert('New Account Added')</script>";
    }*/
}
?>
     <!-- Always shows a header, even in smaller screens. -->
  
    <div class="demo-layout-transparent mdl-layout mdl-js-layout">
    <header style="background-color:#3f51b5;height:100px;" class="mdl-layout__header mdl-layout__header--transparent">

        <div class="mdl-layout__header-row">
           <!-- Title -->
          <span class="mdl-layout-title">CORRO</span>
          <a href="logout.php"><img id="logout" style="" src="images/logout_btn.png"></img></a> 
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
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
      <div class="container">
      <div class="row" style="margin-top:6%">
       <center>
      <div class="col-sm-5" style="width:32%">
    <!-- Textfield with Floating Label -->
   
    <form action="#" style="margin-top: 32px;" method="post">

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="organization" name="organization">
        <label class="mdl-textfield__label" for="sample3">Organization</label>
      </div>
      <br>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input"  type="text" id="username" name="username">
        <label class="mdl-textfield__label" for="sample3">USERNAME</label>
      </div>
      <br>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input name="password" id="password" class="mdl-textfield__input" type="password" name="password" value="">
          <label class="mdl-textfield__label" for="sample3">PASSWORD</label>
        </div>
      <br>
        <!-- Accent-colored raised button with ripple -->
    <button name="submit" id="submit" style="background-color: #5cb85c;width:7em" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
      Save
    </button>

   <!--   <button style="background-color:#d9534f" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
      Delete
    </button> -->
    </form>
    </center>



<?php
  $url_get_all_accounts = 'https://reimburse.herokuapp.com/get_all_accounts/';
  $options_get_all_accounts = array(
    'http' => array(
      'method'  => 'GET',
    ),
  );
  $context_get_all_accounts = stream_context_create($options_get_all_accounts);
  $output_get_all_accounts = file_get_contents($url_get_all_accounts, false,$context_get_all_accounts);
  /*echo $output_get_all_accounts;*/
  $arr_get_all_accounts = json_decode($output_get_all_accounts,true);
/*  echo $arr_get_all_accounts;*/
  
?>
<table align="center" class="mdl-data-table mdl-js-data-table">
        <thead>
            <tr>
                <th class="mdl-data-table__cell--non-numeric">Organization</th> 
                <th class="mdl-data-table__cell--non-numeric">Role</th>
                <th class="mdl-data-table__cell--non-numeric">Username</th>
                <th class="mdl-data-table__cell--non-numeric">Password</th>
                <th class="mdl-data-table__cell--non-numeric">Edit</th>
                <th class="mdl-data-table__cell--non-numeric">Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php for($x=0;$x<count($arr_get_all_accounts);$x++){?>
          <?php for($y=0;$y<count($arr_get_all_accounts[$x]['profile']);$y++){?>

          <?php if($arr_get_all_accounts[$x]['profile'][$y]['role'] != "super_admin"){?>

              <?php if($y==(count($arr_get_all_accounts[$x]['profile'])-1)){
                    $style="border-bottom:1px solid #B8B8B8";
                }else{
                    $style='';
                }?>
            <tr style="<?php echo $style; ?>">
              <?php if($y==0){
                    $account=$arr_get_all_accounts[$x]['account'];
                }else{
                    $account='';
                }?>
              <td><?php echo $account ?></td>
              <td><?php echo $arr_get_all_accounts[$x]['profile'][$y]['role'] ?></td>
              <td><?php echo $arr_get_all_accounts[$x]['profile'][$y]['username'] ?></td>
              <td><input style="border:none" type="password" value="<?php echo $arr_get_all_accounts[$x]['profile'][$y]['password'] ?>" readonly></input></td>
              <td>
                <form method="post" action="edit_account.php">
                  <input type="hidden" name="pk_value" value="<?php echo $arr_get_all_accounts[$x]['profile'][$y]['pk'] ?>">
                  <button style="width:55px;height:30px" type="submit" name="edit_btn">Edit</button>
                </form>
              </td>
              <?php if($y==0){ ?>
                     <td>
                        <form method="post" action="new_organization.php">
                          <input type="hidden" name="pk_delete" value="<?php echo $arr_get_all_accounts[$x]['profile'][$y]['pk'] ?>">
                          <button onclick="return confirm('Are you sure you want to delete?');" style="width:55px;height:30px" type="submit" name="delete_btn">Delete</button>
                         </form>
                     </td>
              <?php }else{ ?>
                     <td></td>
              <?php } ?>
             
            </tr>

          <?php }?>
          <?php }?>
        </tbody>
        <?php }?>
    </table>
    </div>
    </div>
    </div>
    </div>





    </main>
    </div>


    </body>
    </html>