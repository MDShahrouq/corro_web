<?php ?>
<html>
  <head>
    <!-- Material Design Lite -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="css/material.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>
  <body>


<?php

session_start();

if(isset($_POST['login_btn'])){
$url2 = 'https://reimburse.herokuapp.com/check_org_login/';
$options2 = array(
  'http' => array(
    'header'  => array(
                  'USERNAME: '.$_POST['username'],
                  'PASSWORD: '.$_POST['password'],
                ),
    'method'  => 'GET',
  ),
);
$context2 = stream_context_create($options2);
$output2 = file_get_contents($url2, false,$context2);
/*echo $output2;*/
$arr2 = json_decode($output2,true);

if($_POST['username'] == "corro" && $_POST['password'] == "12345"){
 $_SESSION['login_reimburse_app'] = 1;
 $_SESSION['account_token'] = "open_account";
 echo "<script>location='home.php'</script>";
}
elseif($arr2['status']==200 && $arr2['message']=='Is Super Admin'){
  $_SESSION['login_reimburse_app'] = 1;
  echo "<script>location='new_organization.php'</script>";

}elseif($arr2['status']==200 && $arr2['message']=='Is Admin'){
  $_SESSION['login_reimburse_app'] = 1;
  $_SESSION['is_admin'] = 1;
  $_SESSION['admin_pk'] = $arr2['admin_pk'];
  $_SESSION['account_token'] = $arr2['account_token'];
  /*echo $_SESSION['account_token'];*/

  echo "<script>location='home.php'</script>";

}elseif($arr2['status']==401){
  echo "<script type='text/javascript'>window.onload = function(){ alert('Password Invalid');}</script>";
}elseif($arr2['status']==400){
  echo "<script type='text/javascript'>window.onload = function(){ alert('Invalid Credentials');}
</script>";
}

}
?>

    <!-- Always shows a header, even in smaller screens. -->

    <div class=" mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header style="background-color:#3f51b5;height: 100px;" class="mdl-layout__header mdl-layout__header--transparent mdl-shadow--4dp ">
      <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title" style="">CORRO</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
        </div>
      </header>
      <main class="mdl-layout__content">

    <!-- card is added -->
        <div class="mdl-grid">
      <div class=" mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet mdl-cell--8-col-desktop">
        </div>

        <!-- <div class="mdl-components mdl-js-components mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-desktop"> -->
        
       <div class="mdl-card mdl-cell mdl-cell--3-col mdl-cell--3-col-tablet mdl-cell--3-col-desktop mdl-shadow--2dp" style="width: inherit;">
      <div class="mdl-card__title">
      <h1 class="mdl-card__title-text">Admin Console</h1>
    </div>
    <div class="mdl-card__supporting-text">
  
        <form name="myForm" method="post" action=""  style="background-color:white !important">

        <!-- username and password field -->

          <div style="width:180px" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input name="username" id="username" class="mdl-textfield__input" value="">
          <label style="font-size:14px;" class="mdl-textfield__label" for="sample3">Username</label>
          </div>
          <br>
          <div style="width:180px" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input name="password" id="password" class="mdl-textfield__input" type="password" value="">
          <label style="font-size:14px;" class="mdl-textfield__label" for="sample3">Password</label>
          </div>
          </p>

          <br>
          <button name="login_btn" id="login_btn"  type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
           Log In
          </button>

        </form>

          </div>
        </div>
             <div class=" mdl-cell mdl-cell--1-col mdl-cell--1-col-tablet mdl-cell--1-col-desktop"> </div>
        </div>
    
        </div>
        </div>
      </main>
    </div>
  </body>
</html>