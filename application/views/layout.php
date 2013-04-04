<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<link type="text/css" href="{{base_url()}}css/style.css" rel="stylesheet" />
	<link type="text/css" href="{{base_url()}}css/base/jquery.ui.all.css" rel="stylesheet" />
	<script type="text/javascript" src="{{base_url()}}javascript/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}javascript/jquery-ui.min.js"></script>
	<title>Acityaventory - Inventory Management System - @yield('title')</title>
</head>
<body>
<div id="page">
  <b class="box">
  <b class="box1"><b></b></b>
  <b class="box2"><b></b></b>
  <b class="box3"></b>
  <b class="box4"></b>
  <b class="box5"></b></b>
  <div class="boxfg">
    <!-- content goes here -->
  	<div id="header">
        @yield('header')
    </div>
    
    <div id="menu">
    </div>
    
	<div id="wrapper">
    <h2>@yield('subheader')</h2>
        
        @yield('main')
	</div>
	
    <div id="footer">
        @yield('footer')
    </div>
  </div>
  <b class="box">
  <b class="box5"></b>
  <b class="box4"></b>
  <b class="box3"></b>
  <b class="box2"><b></b></b>
  <b class="box1"><b></b></b></b>
</div>
</body>
</html>

