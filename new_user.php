<html>
  <head>
    <!-- Material Design Lite -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="css/material.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>
  <body>
     <!-- Always shows a header, even in smaller screens. -->
  
    <div class="demo-layout-transparent mdl-layout mdl-js-layout">
    <header style="background-color:#3f51b5;height:100px;" class="mdl-layout__header mdl-layout__header--transparent">

        <div class="mdl-layout__header-row">
           <!-- Title -->
          <span class="mdl-layout-title">CORRO</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation. We hide it in small screens. -->
        </div>
      </header>
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">CORRO</span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="">OVERVIEW</a>
          <a class="mdl-navigation__link" href="">EXPENSE REPORT</a>
          <a class="mdl-navigation__link" href="">BOOKING</a>
          <a class="mdl-navigation__link" href="">SITTING's</a>
          <a class="mdl-navigation__link" href="">REPORT</a>
        </nav>
      </div>

    <main class="mdl-layout__content">
      <div class="page-content">
      <div class="container">
      <div class="row" style="margin-top:6%">
       <center>
      <div class="col-sm-5" style="width:32%">
    <!-- Textfield with Floating Label -->
   
    <form action="#" style="margin-top: 32px;">

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="name" name="name">
        <label class="mdl-textfield__label" for="sample3">NAME</label>
      </div>
      <br>

       <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="designation" name="designation">
        <label class="mdl-textfield__label" for="sample3">DESIGNATION</label>
      </div>
      <br>

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="department" name="department">
        <label class="mdl-textfield__label" for="sample3">DEPARTMENT</label>
      </div>
      <br>

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="email" name="email">
        <label class="mdl-textfield__label" for="sample3">EMAIL</label>
      </div>
      <br>

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="phone" name="phone">
        <label class="mdl-textfield__label" for="sample3">PHONE</label>
      </div>
      <br>

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="username" name="username">
        <label class="mdl-textfield__label" for="sample3">USERNAME</label>
      </div>
      <br>

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input name="password" id="password" class="mdl-textfield__input" type="password" value="">
          <label class="mdl-textfield__label" for="sample3">PASSWORD</label>
        </div>
      <br>

        <!-- Accent-colored raised button with ripple -->
    <button style="background-color: #5cb85c;width:7em" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
      Save
    </button>

     <button style="background-color:#d9534f" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
      Delete
    </button>
    </form>
    </center>
    </div>
    </div>
    </div>
    </div>
    </main>
    </div>
    </body>
    </html>