<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="./css/applicant.css">
	<title></title>
</head>
<body>
<div id="mySidenavs" class="sidenavs">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">Add</a>
      <a href="#">Update</a>
      <a href="#">Suspend</a>
      <a href="#">Logout</a>
    </div>

    <!-- Use any element to open the sidenav -->
    <span onclick="openNav()">Applicant Details</span

    <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
    <div id="main">

    </div>
    <!-- javascript -->
    <script>
    /* Set the width of the side navigation to 250px */
    function openNav() {
      document.getElementById("mySidenavs").style.width = "250px";
    }

    /* Set the width of the side navigation to 0 */
    function closeNav() {
      document.getElementById("mySidenavs").style.width = "0";
    }
    </script>
    </body>
    </html>