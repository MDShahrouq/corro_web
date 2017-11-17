<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travel-Request</title>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<!--     <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
 -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="css/material.indigo-pink.min.css">

<!-- <link rel="stylesheet" type="text/css" href="css/profile.css">
 -->

<!--  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css"> -->
   <!-- DATA TABLE CSS -->
  <!--  <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css"> -->
<!--   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"> -->

<!-- Table js -->

<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js
"></script>
 -->

<!-- <script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js"></script> -->
<style type="text/css">
  .titles{
    color: #719ea7;
  }
</style>
</head>
<body>

 <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
     <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">

        <div class="mdl-layout__header-row" style="background-color: #ffffff;padding: 4px;">
          <span class="mdl-layout-title" style="font-family: Ubuntu;font-style: normal;font-weight: 500;line-height: normal;font-size: 50px;color: #000000;">corro</span>
          <div class="mdl-layout-spacer"></div>

       <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">Logout</li>
          </ul>
        </div>

<div class="mdl-card__actions mdl-card--border" style="background-color: white;color: #000000;">
<b>Travel Requests</b>
</div>  

      </header>


			<div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50" style="width: 7%;background-color: #4ab8c9 !important;">
			        <header class="demo-drawer-header">
			    	<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800" style="background-color: #4ab8c9 !important;overflow-x:hidden;overflow-y: hidden;">
			          <a class="mdl-navigation__link" href="#" style="padding-left: 30px;"><i class="material-icons">home</i>Overview</a>
			          <a class="mdl-navigation__link" href="#" style="padding-left: 30px;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Expense Report</a>
			          <a class="mdl-navigation__link" href="#" style="padding-left: 30px;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">delete</i>Travel Requests</a>
			          <a class="mdl-navigation__link" href="#" style="padding-left: 30px;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">report</i>Booking</a>
			          <a class="mdl-navigation__link" href="#" style="padding-left: 30px;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">settings</i>Settings</a>
			          
			        </nav>
			        </header>

			 </div>
			 <!-- Side Bar and Header -->

			   <main class="mdl-layout__content mdl-color--grey-100" style="margin-left:83px;">
        <div class="mdl-grid demo-content">
        
          <div class="mdl-components mdl-js-components mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-desktop">
          
              <div class="mdl-card mdl-shadow--2dp" style="width: 100%;height: 260px;">
  <!-- 1st Card Data Begins -->
<div class="mdl-grid" style="margin: unset;border-left-color: green;border-left-style: solid;">

<div class="mdl-components mdl-js-components mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-desktop" style="width: 170px;">
<p><b class="titles">Name</b><br>Shahrouq</p>
<p><b class="titles">Mode of Travel</b><br>Flight</p>
<p><b class="titles">Approval Status</b><br>Approved</p>
</div>

<div class="mdl-components mdl-js-components mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-desktop" style="width: 170px;">
<p><b class="titles">Employee ID</b><br>43</p>
<p><b class="titles">From</b><br>Bengaluru</p>
<p><b class="titles">Approval Level 1</b><br>Approved</p>
</div>

<div class="mdl-components mdl-js-components mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-desktop" style="width: 170px;">
<p><b class="titles">Grade</b><br>M1</p>
<p><b class="titles">To</b><br>Mumbai</p>
<p><b class="titles">Approval Level 2</b><br>Approved</p>
</div>

<div class="mdl-components mdl-js-components mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-desktop" style="width: 170px;">
<br><br><br>
<p><b class="titles">Travel Date</b><br>28/10/2017</p>
</div>

<div class="mdl-components mdl-js-components mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-desktop" style="width: 170px;">
<br><br><br>

<p><b class="titles">Class</b><br>Business</p>
</div>

</div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" style="float: right;">
    Book
    </a>
  </div>	  <!-- 1st Card Data End's -->

               <!-- Card Div below dont delete -->
               </div>

        </div>  <!--Grid ends-->


<div class="mdl-components mdl-js-components mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-desktop">
          
<div class="mdl-card mdl-shadow--2dp" style="width: 100%;height: 260px;">
  <!-- 2nd Card Data Begins -->
<div class="mdl-grid" style="margin: unset;border-left-color: yellow;border-left-style: solid;">

<div class="mdl-components mdl-js-components mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-desktop" style="width: 170px;">
<p><b class="titles">Name</b><br>Shahrouq</p>
<p><b class="titles">Mode of Travel</b><br>Flight</p>
<p><b class="titles">Approval Status</b><br>Approved</p>
</div>

<div class="mdl-components mdl-js-components mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-desktop" style="width: 170px;">
<p><b class="titles">Employee ID</b><br>43</p>
<p><b class="titles">From</b><br>Bengaluru</p>
<p><b class="titles">Approval Level 1</b><br>Approved</p>
</div>

<div class="mdl-components mdl-js-components mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-desktop" style="width: 170px;">
<p><b class="titles">Grade</b><br>M1</p>
<p><b class="titles">To</b><br>Mumbai</p>
<p><b class="titles">Approval Level 2</b><br>Approved</p>
</div>

<div class="mdl-components mdl-js-components mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-desktop" style="width: 170px;">
<br><br><br>
<p><b class="titles">Travel Date</b><br>28/10/2017</p>
</div>

<div class="mdl-components mdl-js-components mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-desktop" style="width: 170px;">
<br><br><br>

<p><b class="titles">Class</b><br>Business</p>
</div>

</div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" style="float: right;">
    Book
    </a>
  </div>    <!-- 3rd Card Data End's -->
              <!-- Card Div below dont delete -->
               </div>

        </div><!--Grid ends-->

<div class="mdl-components mdl-js-components mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-desktop">
          
<div class="mdl-card mdl-shadow--2dp" style="width: 100%;height: 260px;">
  <!-- 2nd Card Data Begins -->
<div class="mdl-grid" style="margin: unset;border-left-color: red;border-left-style: solid;">

<div class="mdl-components mdl-js-components mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-desktop" style="width: 170px;">
<p><b class="titles">Name</b><br>Shahrouq</p>
<p><b class="titles">Mode of Travel</b><br>Flight</p>
<p><b class="titles">Approval Status</b><br>Approved</p>
</div>

<div class="mdl-components mdl-js-components mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-desktop" style="width: 170px;">
<p><b class="titles">Employee ID</b><br>43</p>
<p><b class="titles">From</b><br>Bengaluru</p>
<p><b class="titles">Approval Level 1</b><br>Approved</p>
</div>

<div class="mdl-components mdl-js-components mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-desktop" style="width: 170px;">
<p><b class="titles">Grade</b><br>M1</p>
<p><b class="titles">To</b><br>Mumbai</p>
<p><b class="titles">Approval Level 2</b><br>Approved</p>
</div>

<div class="mdl-components mdl-js-components mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-desktop" style="width: 170px;">
<br><br><br>
<p><b class="titles">Travel Date</b><br>28/10/2017</p>
</div>

<div class="mdl-components mdl-js-components mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-desktop" style="width: 170px;">
<br><br><br>

<p><b class="titles">Class</b><br>Business</p>
</div>

</div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" style="float: right;">
    Book
    </a>
  </div>    <!-- 3rd Card Data End's -->
              <!-- Card Div below dont delete -->
               </div>

        </div><!--Grid ends-->
<!-- ================================== -->
      </div>
   </div>
</main>


<!--  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
 -->      
</body>
</html>