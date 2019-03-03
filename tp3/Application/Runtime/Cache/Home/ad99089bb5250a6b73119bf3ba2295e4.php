<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>jquery template demo</title>
    <link rel="stylesheet" href="content/site.css" type="text/css" />
    <link rel="stylesheet" href="content/jquery.ui.css" type="text/css" />
   <script src="/Public/jquery.js"></script>
        <tr><td>${ID}</td><td>${Name}</td></tr>
    </script>
    <script type="text/javascript">
        $(function () {
            var users = [{ ID: 'think8848', Name: 'Joseph Chan' }, { ID: 'aCloud', Name: 'Mary Cheung'}];
            $('#myTemplate').tmpl(users).appendTo('#rows');
        });
    </script>
    <style type="text/css">
        body
        {
            padding: 10px;
        }
        table
        {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table cellspacing="0" cellpadding="3" border="1">
        <tbody id="rows">
        </tbody>
    </table>
</body>
</html>