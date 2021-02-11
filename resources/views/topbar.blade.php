<!DOCTYPE html>
<html>
<head>
<style>

body {
  box-sizing:border-box;
margin:0;
padding:0;
}

#main-navbar {
  font: 1.15em;
  background: #444;
}

#main-navbar ul {
  margin: 0;
  padding: 0;
}

#main-navbar li {
  display: inline-block;
  padding: 10px 20px;
}

#main-navbar li a {
  text-decoration: none;
  color: #EDA51A;
}

#main-navbar li a:hover {
  padding-bottom: 3px;
  color: #222;
}

</style>

</head>
<body>

<!-- Showcase of simple minimum top navbar without any front end framework -->

<!-- Rumour said that CSS ID is faster than class. Hence I used ID instead -->
<nav id="main-navbar">
  <ul>
    <li><a href="{{url('/basic/create')}}">Personal information</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Portfolio</a></li>
    <li><a href="#">FAQ</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</nav>

</body>
</html>
