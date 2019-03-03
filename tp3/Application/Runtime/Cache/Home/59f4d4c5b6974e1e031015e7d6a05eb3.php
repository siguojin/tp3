<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="appml.css">
</head> 

<body>
<h1>My First Web Application</h1>

<div id="Place01">

<table id="Template01" class="appmltable">
<tr>
  <th>Customer</th>
  <th>City</th>
  <th>Country</th>
</tr>
<tr id="appml_row">
  <td>#CustomerName#</td>
  <td>#City#</td>
  <td>#Country#</td>
</tr>
</table> 
</div>

<script src="appml.js"></script>
<script>
app=new AppML("appml.htmlx","Models/Customers.xml");
app.run("Place01","Template01");
</script>

</body>
</html>