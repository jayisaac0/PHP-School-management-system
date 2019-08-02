<!DOCTYPE html>
<html lang="en">
<head>

<base href="https://k-schoolsystem.herokuapp.com/">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 
<title> SP | </title>
    <link rel="icon" href="images/logo.gif">
<!-- Bootstrap -->
<link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- NProgress -->
<link href="vendors/nprogress/nprogress.css" rel="stylesheet">
<!-- jQuery custom content scroller -->
<link href="vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>

<link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">

<link href="build/css/custom.min.css" rel="stylesheet">

</head>
<script src="jquery/jquery-3.0.0.min.js"></script>
<script type="text/javascript">
    function countChars(val){
        var len = val.value.length;
        if(len>=500){
            val.value=val.value.substring(0, 500);
        }else{
            $('#charNum').text(500 - len);
        }
    };
</script>
<style type="text/css">
    html, body{background:#fff;}
    .green{background:green;}
    .blue{background:#0093FB;}
    .blackfont{color:#000000;}
    .green{background:#006B03;}
    .whitefont{color:#FFFFFF;}
    .orange{background:#FFCE34;}
    .lightyellow{background:#FEDAA6;}
    .lightgreen{background: #B5FF76;}
    .brown{background: #993501;}
    .red{background:#FF3332;}
    blue{color:blue;}
    .fivepad{padding-left:5px;}
    .right{float:right;padding-right:5px;}
    textarea{resize:none;}
</style>
<body class="nav-md">


<div class="container body">

<div class="main_container">
