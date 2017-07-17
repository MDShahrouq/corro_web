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
          <span class="mdl-layout-title" style="margin-left:80%;">CORRO</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="page-content"><!-- Your content goes here -->

    <!-- card is added -->
        <div class="mdl-grid">
       <div class="mdl-card mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-shadow--2dp" style="margin-left:75%">
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
          <button name="submit" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
           Log In
          </button>

        </form>

          </div>
        </div>
        </div>
        </div>
      </main>
    </div>
  </body>
</html>