<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

<div data-role="page" id="pageone">
  <div data-role="header">
    <h1>Collapsible Lists</h1>
  </div>

  <div data-role="main" class="ui-content">
    <h2>My Phonebook</h2>
    <div data-role="collapsible">
    <h4>A</h4>
    <ul data-role="listview">
      <li><a href="#">Adele</a></li>
      <li><a href="#">Agnes</a></li>
    </ul>
    </div>

    <div data-role="collapsible">
    <h4>B</h4>
    <ul data-role="listview">
       <li><a href="#">Billy</a></li>
       <li><a href="#">Bob</a></li>
    </ul>
    </div>

    <div data-role="collapsible">
    <h4>C</h4>
    <ul data-role="listview">
      <li><a href="#">Calvin</a></li>
      <li><a href="#">Cameron</a></li>
      <li><a href="#">Chloe</a></li>
      <li><a href="#">Christina</a></li>
    </ul>
    </div>
  </div>

  <div data-role="footer">
    <h1>Insert Footer Text Here</h1>
  </div>
</div> 

</body>
</html>
