<?php
/*ob_start("ob_gzhandler");*/  //Enables Gzip compression 

session_start();
if($_SESSION['login_reimburse_app'] == 1){

}else{
  echo "<script>location='index.php'</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<link rel="stylesheet" type="text/css" href="css/profile.css">


</head>

<body>

<?php
session_start();
$pk=$_GET['pk'];
$trip_id=$_GET['trip_id'];

  $url_get_a_user = 'https://reimburse.herokuapp.com/get_details_of_org_user/';
  $options_get_a_user = array(
    'http' => array(
      'header'  => array(
                  'PK: '.$pk,
                  'TRIP-ID: '.$trip_id,
                  'ACCOUNT-TOKEN: '.$_SESSION['account_token']
                ),
      'method'  => 'GET',
    ),
  );
  $context_get_a_user = stream_context_create($options_get_a_user);
  $output_get_a_user = file_get_contents($url_get_a_user, false,$context_get_a_user);
/*  echo $output_get_a_user;*/
  $arr_get_a_user = json_decode($output_get_a_user,true);
/*  echo $arr_get_a_user;*/
  
?>
	
<!-- <div class="mdl-layout__container">
 -->
<div class=" mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header style="background-color:#3f51b5;" class="mdl-layout__header mdl-layout__header--transparent mdl-shadow--4dp ">
    	<div class="mdl-layout__header-row">
        <span class=" mdl-layout-title">Corro</span>
        <div class="mdl-layout-spacer"></div>
        <a href="logout.php"><img id="logout" style="" src="images/logout_btn.png"></img></a> 
      </div>
</header>
      <!-- NAv bar -->
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
 	<div class="mdl-grid">
		<div class="mdl-components mdl-js-components mdl-cell mdl-cell--3-col mdl-cell--3-col-tablet mdl-cell--3-col-desktop">
		<!-- 	<div class="">
				<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>

			</div> -->
			<aside class="mdl-components__nav docs-text-styling mdl-shadow--4dp">
			<div style="text-align: center;">

			<?php if($arr_get_a_user['profile image'] == ""){ 
              $profile_image="boy.png";
             }else{
              $profile_image=$arr_get_a_user['profile image'];
             }
			?>
			<a href="#" ><img src="<?php echo $profile_image; ?>" alt="" width="100px" height="100px" style="-moz-border-radius: 50px;-webkit-border-radius: 50px;border-radius: 50px; margin-top: 20px;" /></a>
			</div>

       <div style="overflow-x:auto;overflow-y: auto;height: 498px;" >
       <div style="display: inline-block;">
        <ul class=" mdl-list">
		  <li class="mdl-list__item">
		    <span class="mdl-list__item-primary-content">
		      <b>Employee ID : </b></span>
		        <span class="mdl-list__item-secondary-content">
			  <span class="mdl-list__item-secondary-info"><?php echo $arr_get_a_user['user_details']['uid']; ?></span>  
			  </span>
		    </span>
		    </li>

		    <li class="mdl-list__item">
		    <span class="mdl-list__item-primary-content">
		      <b>Designation :</b></span>
		        <span class="mdl-list__item-secondary-content">
			  <span class="mdl-list__item-secondary-info"><?php echo $arr_get_a_user['user_details']['designation']; ?></span>  
			  </span>
		    </li>
		    <li class="mdl-list__item">
		    <span class="mdl-list__item-primary-content">
		      <b>Department :</b></span>
		        <span class="mdl-list__item-secondary-content">
			  <span class="mdl-list__item-secondary-info"><?php echo $arr_get_a_user['user_details']['department']; ?></span>  
			  </span>
		    </li>
		<!-- <li class="mdl-list__item">
		    <span class="mdl-list__item-primary-content">
		      <b>Approver : </b></span>
		        <span class="mdl-list__item-secondary-content">
			  <span class="mdl-list__item-secondary-info">Prashant</span>  
			  </span>
		    </li> -->
		<li class="mdl-list__item">
		    <span class="mdl-list__item-primary-content">
		      <b>Mobile No : </b></span>
		      <span class="mdl-list__item-secondary-content">
			  <span class="mdl-list__item-secondary-info"><?php echo $arr_get_a_user['user_details']['mobile']; ?></span>  
			  </span>
		    </li>
		<li class="mdl-list__item">
		    <span class="mdl-list__item-primary-content">
		      <b>Email ID : </b></span>
		      <span class="mdl-list__item-secondary-content">
			  <span class="mdl-list__item-secondary-info"><?php echo $arr_get_a_user['user_details']['email']; ?></span>  
			  </span>
		    </li>		    
		  <li class="mdl-list__item">
		  	<button onclick="return goBack();" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
  				View History
			</button>
		  </li>
		   <li class="mdl-list__item">
		  	<button onclick="return goBack();" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
			Cancel
			</button>
		  </li>

		</ul>
		</div>
		</div>
	</aside>

		<!-- End of Aside bar -->
		</div>
		<div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-desktop">

		<div class="demo-card-square mdl-card mdl-shadow--2dp" style="text-align: center;">
            <div class="mdl-card__supporting-text">
              <span>TRIP NO :<?php echo $arr_get_a_user['trip']['pk']; ?></span>
              <div><span><?php echo $arr_get_a_user['trip']['category']; ?></span></div>
              <div><span><?php echo $arr_get_a_user['trip']['start_date']; ?> - <?php echo $arr_get_a_user['trip']['end_date']; ?></span></div>
              <div><span>&#8377; <?php echo $arr_get_a_user['total']; ?></span></div>
          </div>
		</div>

			<div class="mdl-shadow--2dp" style="overflow-y: auto;height: 451px;">

<script type="text/javascript">
	function display_text(category,amount,img12,btn_id){
	  /*alert(btn_id);*/
	  $('.btn_class').css('background-color','transparent');
	  document.getElementById(('btn_')+(btn_id)).style.background = "#D0D0D0";

	  $('.bill_class').css('border','none');
	  document.getElementById(('bill_')+(btn_id)).style.border = "2px solid #3F51B5";

      document.getElementById('category1').innerHTML=category;
      document.getElementById('amount1').innerHTML=amount;
      if(img12 == ""){
       document.getElementById('right_image').src="images/no_image_available.png";
      }else{
       document.getElementById('right_image').src=img12;
      }
      /*alert(category);*/
	}
</script>
			<?php for($t=0; $t< count($arr_get_a_user['categories']);$t++){?>
		    <button class="btn_class" id="btn_<?php echo $t ?>" style="width:100%;background:transparent;border:1px solid #D0D0D0 " onClick="display_text('<?php echo $arr_get_a_user['categories'][$t]['trip_details']['category'] ?>','<?php echo $arr_get_a_user['categories'][$t]['trip_details']['amount'] ?>','<?php echo $arr_get_a_user['categories'][$t]['image_id']; ?>','<?php echo $t ?>')">
				  <li class="mdl-list__item mdl-list__item--two-line">
				    <a style="text-align:left" class="mdl-list__item-primary-content " href="javascript:show_image();">
				      <span style="text-align:left"><?php echo $arr_get_a_user['categories'][$t]['trip_details']['name']; ?></span>
				      <span style="text-align:left" class="mdl-list__item-sub-title"><i><?php echo $arr_get_a_user['categories'][$t]['trip_details']['category']; ?></i></span>
				    </a>
				    <span class="mdl-list__item-secondary-content">
				      <span class="mdl-list__item-secondary-info">&#8377;<?php echo $arr_get_a_user['categories'][$t]['trip_details']['amount']; ?></span>
				      
				    </span>
				    <image style="display:none" src="<?php echo $arr_get_a_user['categories'][$t]['image_id']; ?>"></image>
            </button>      
				  </li>
            <?php }?>
				 </ul>
<!--           </div>
 -->		</div>
			 

		
	</div>

		<div class="mdl-cell mdl-cell--5-col mdl-cell--5-col-tablet mdl-cell--5-col-desktop">
		 
		 <div class="demo-card-image mdl-card mdl-shadow--2dp">

		 <?php for($t=0; $t< 1;$t++){?>
			 <table><tr><td> <span >Catergory: <span id="category1"><?php echo $arr_get_a_user['categories'][$t]['trip_details']['category']; ?></span></span>
	       <div></div><span >Amt: <span id="amount1"><?php echo $arr_get_a_user['categories'][$t]['trip_details']['amount']; ?></span></span></td></tr></table>
	     <?php }?>
	       
	       

	       <div class="mdl-card__actions mdl-card--border"></div>
<!--          <span class="demo-card-image__filename">Image.jpg</span>
           <div class=" mdl-card--expand"></div>-->
			  <div class="mdl-card__actions">
			 <!--  <div><a href="#!"><img src="http://lorempixel.com/1024/768/nature" style="width: 100%;"></a>
			  </div> -->
			 <?php for($t=0; $t< 1;$t++){?>

              <script type="text/javascript">
                 document.getElementById('btn_0').style.background = "#D0D0D0";
                 document.getElementById('bill_0').style.border = "2px solid #3F51B5";
              </script>
			  
			  <?php if($arr_get_a_user['categories'][$t]['image_id'] == ""){
			  	$rgt_img1="images/no_image_available.png";
			  }else{
			 	$rgt_img1=$arr_get_a_user['categories'][$t]['image_id'];
			  }

			  ?>
			  <div><img id="right_image" src="<?php echo $rgt_img1; ?>" style="width: 100%;"/>
			  </div>
			 <?php }?>
				<!-- <div id="display_bill">
			  </div> -->
			   </div>
		</div>

<script type="text/javascript">
	function display_image(category,amount,img12,btn_id){

	  $('.btn_class').css('background-color','transparent');
	  document.getElementById(('btn_')+(btn_id)).style.background = "#D0D0D0";

	  $('.bill_class').css('border','none');
	  document.getElementById(('bill_')+(btn_id)).style.border = "2px solid #3F51B5";

      document.getElementById('category1').innerHTML=category;
      document.getElementById('amount1').innerHTML=amount;

      if(img12 == ""){
       document.getElementById('right_image').src="images/no_image_available.png";
      }else{
       document.getElementById('right_image').src=img12;
      }
      /*alert(category);*/
	}
</script>

		<!-- Carousel -->
	<div class="bill-screens mdl-shadow--4dp">
            
           <?php for($t=0; $t< count($arr_get_a_user['categories']);$t++){?>
            <div class="bill-pic bill-screen">
              <!-- <a class="bill-image-link" href=""> -->
              <button class="bill_class" id="bill_<?php echo $t ?>"  onClick="display_image('<?php echo $arr_get_a_user['categories'][$t]['trip_details']['category'] ?>','<?php echo $arr_get_a_user['categories'][$t]['trip_details']['amount'] ?>','<?php echo $arr_get_a_user['categories'][$t]['image_id']; ?>','<?php echo $t ?>')">
                
                <?php if($arr_get_a_user['categories'][$t]['image_id'] == ""){
			  	  $btn_img1="images/no_image_available.png";
			 	}else{
			  	  $btn_img1=$arr_get_a_user['categories'][$t]['image_id'];
			    }

			  ?>
                <img class="bill-screen-image" src="<?php echo $btn_img1; ?>">
             </button>
              <!-- </a> -->
             <!--  <a class="bill-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Bill</a> -->
            </div>
           <?php }?>
            <!-- <div class="bill-pic bill-screen">
              <a class="bill-image-link" href="">
                <img class="bill-screen-image" src="http://lorempixel.com/1024/768/nature">
              </a>
              <a class="bill-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Bill0</a>
            </div>
            <div class="bill-pic bill-screen">
              <a class="bill-image-link" href="">
                <img class="bill-screen-image" src="http://lorempixel.com/1024/768/nature">
              </a>
              <a class="bill-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Bill1</a>
            </div><div class="bill-pic bill-screen">
              <a class="bill-image-link" href="">
                <img class="bill-screen-image" src="http://lorempixel.com/1024/768/nature">
              </a>
              <a class="bill-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Bill2</a>
            </div>
            <div class="bill-pic bill-screen">
              <a class="bill-image-link" href="">
                <img class="bill-screen-image" src="http://lorempixel.com/1024/768/nature">
              </a>
              <a class="bill-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Bill3</a>
            </div> -->
           <!--   <div class="bill-pic bill-screen">
              <a class="bill-image-link" href="">
                <img class="bill-screen-image" src="http://lorempixel.com/1024/768/nature">
              </a>
              <a class="bill-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Bill3</a>
            </div>
             <div class="bill-pic bill-screen">
              <a class="bill-image-link" href="">
                <img class="bill-screen-image" src="http://lorempixel.com/1024/768/nature">
              </a>
              <a class="bill-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Bill3</a>
            </div>
             <div class="bill-pic bill-screen">
              <a class="bill-image-link" href="">
                <img class="bill-screen-image" src="http://lorempixel.com/1024/768/nature">
              </a>
              <a class="bill-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Bill3</a>
            </div> -->
   		</div>

		</div>
	 </div>
	</main>
</div>






<!-- Scripts -->
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

<script type="text/javascript">
// function show_image(bill_image) {
// 	var bill_img = document.createElement("bill_img");
// 	bill_img.bill_image=bill_image;
// document.getElementById('display_bill').innerHTML="<img src="+bill_img+" style="width:100%;" />";
// }
function goBack() 
{
 window.history.back()
}
</script>
</body>
</html>
