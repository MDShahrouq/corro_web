<head>
    <!-- Material Design Lite -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="css/material.min.css">
      <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">


<!-- Table js -->

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>
  </head>
<?php
/*ob_start("ob_gzhandler");*/  //Enables Gzip compression 

session_start();
if($_SESSION['login_reimburse_app'] == 1){

}else{
  echo "<script>location='index.php'</script>";
}

?>

<?php

session_start();
if(isset($_POST['submit_2'])){

  $url_check_count = 'https://reimburse.herokuapp.com/check_no_of_users_in_org/';
  $options_check_count = array(
    'http' => array(
      'header'  => array(
                  'ACCOUNT-TOKEN: '.$_SESSION['acnt_token_selected'],
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
                'account_token' => $_SESSION['acnt_token_selected'],
                'access_token' => '',
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

<?php
if(isset($_POST['submit'])){
  $url = 'https://reimburse.herokuapp.com/edit_account/';
  $data = array(
              'pk_value' => $_POST['pk'],
              'username' => $_POST['username'],
              'password' => $_POST['password']
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
    if($arr != ''){
      echo "<script>window.location.href = 'new_organization.php';</script>";
    }
}
?>

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

if(isset($_POST['pk_value'])){
 $_SESSION['pk_value']= $_POST['pk_value'];
}
  /*echo $_POST['pk_value'];*/
  $url_get_account_by_id = 'https://reimburse.herokuapp.com/get_account_by_id/';
  $options_get_account_by_id = array(
    'http' => array(
      'header'  => array(
                  'PK-VALUE: '.$_SESSION['pk_value'],
                ),
      'method'  => 'GET',
    ),
  );
  $context_get_account_by_id = stream_context_create($options_get_account_by_id);
  $output_get_account_by_id = file_get_contents($url_get_account_by_id, false,$context_get_account_by_id);
  /*echo $output_get_account_by_id;*/
  $arr_get_account_by_id = json_decode($output_get_account_by_id,true);
/*  echo $arr_get_account_by_id;*/
$_SESSION['acnt_token_selected']= $arr_get_account_by_id['account'][0]['account_token'];  
?>

<a href="new_organization.php">Back</a>



<div class="container" style="margin-left:25%;margin-top:10%;width:50%;border:1px solid black;padding-bottom:8px">
<form align="center" style="margin-top:2%" action="edit_account.php" method="post">
<h4><?php echo $arr_get_account_by_id['account'][0]['organization'] ?></h4>

<input type="hidden" name="pk" value="<?php echo $_SESSION['pk_value'] ?>">

  <div class="row">
    <div class="col-sm-4">
      <input type="text" name="username" value="<?php echo $arr_get_account_by_id['account'][0]['username'] ?>">
    </div><br>
    <div class="col-sm-4">
      <input type="text" name="password" value="<?php echo $arr_get_account_by_id['account'][0]['password'] ?>"> 
    </div><br>
    <div class="col-sm-4">
      <input type="submit" name="submit" id="submit" style="margin-top:1%;width:100px;height:30px;background-color:green" value="Save">
    </div>
  </div>
</form>
</div>


<div class="container" style="margin-left:25%;margin-top:1%;width:50%;border:1px solid black;padding-bottom:8px">

<h4 style="text-align:center">Add New User</h4>
<form  align="center" action="#" style="margin-top:-6%;" method="post">

<input class="mdl-textfield__input" type="hidden" id="pk_value" name="pk_value" value="<?php echo $_SESSION['pk_value'] ?>">
<input class="mdl-textfield__input" type="hidden" id="account_token" name="account_token" value="<?php echo $_SESSION['acnt_token_selected'] ?>">

<br><br>
<input placeholder="NAME" type="text" id="name" name="name" required/><br><br>
<input placeholder="DESIGNATION" type="text" id="designation" name="designation" required/><br><br>
<input placeholder="DEPARTMENT" type="text" id="department" name="department" required/><br><br>
<input placeholder="EMAIL" type="email" id="email" name="email" required/><br><br>
<input placeholder="PHONE" type="text" id="phone" name="phone" minlength="12" maxlength="12" required/><br><br>
<input placeholder="USERNAME" type="text" id="username" name="username" required autocomplete="off"><br><br>
<input placeholder="PASSWORD" type="password" id="password" name="password" required autocomplete="off"><br><br>

    <button name="submit_2" id="submit_2" style="background-color: #5cb85c;width:7em;margin-top:0%" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
      Save
    </button><br>
</div> 


<?php
  $url_get_all_users = 'https://reimburse.herokuapp.com/get_all_users/';
  $options_get_all_users = array(
    'http' => array(
      'header'  => array(
                  'ACCOUNT-TOKEN: '.$_SESSION['acnt_token_selected'],
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


<table align="center" id="example" style="box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 1px -2px rgba(0, 0, 0, .2), 0 1px 5px 0 rgba(0, 0, 0, .12);" class="mdl-data-table">
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
                        <form method="post" action="edit_account.php">
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