<?php
    $fonts = "verdana";
    $bgcolor = "#444";
    $fontcolor = "#fff";
    ?>
<!doctype html>
<html>
    <head>
        <title>PHP OOP CRUD</title>
        <style>
            body{
    font-family:<?php echo $fonts;?>
}
.phpcoding{
    width:900px;
     margin: 0 auto;
    background:<?php echo "#ddd" ?>;
}
.headeroption, .footeroption{
    background:<?php echo $bgcolor;
     ?>;
    color:<?php echo $fontcolor;
     ?>;
    text-align:center;
    padding:20px;
}
.headeroption h2, .footeroption h2{
    margin:0;
    font-size:24px
}
.maincontent{
    min-height:400px;
    padding:20px;
    font-size:18px
}
 p{
    margin:0
}
 input[type="text"]{
    width:238px;
    padding:5px;
}
 select{
    font-size:18px;
    padding:2px 5px;
    width:250px;
}
 .tblone{
    width:100%;
    border:1px solid #fff;
    margin:20px 0
}
 .tblone td{
    padding:5px 10px;
     text-align: center;
}
 table.tblone tr:nth-child(2n+1){
    background:#fff;
    height:30px;
}
 table.tblone tr:nth-child(2n){
    background:#f1f1f1;
    height:30px;
}
 #myform{
    width:400px;
    border:1px solid #fff;
    padding:10px;
}
 input[type="text"],[type="email"] {
    border:1px solid #ddd;
    margin-bottom:5px;
    padding:5px;
    width:228px;
    font-size:16px
}
 input[type="submit"],[type="reset"]{
    cursor: pointer
}
 input[type=text],[type="email"] {
    border-radius: 5px;
    padding: 5px 5px;
    width: 225px;
     font-size: 15px;
}
 input[type=submit],input[type=reset] {
    font-size: 16px;
    padding: 3px 15px;
    border: 2px solid #008CBA;
    border-radius: 8px;
     margin-top: 20px;
     -webkit-transition-duration: 0.4s;
    /* Safari */
     transition-duration: 0.4s;
}
 .button{
    font-size: 16px;
    padding: 3px 15px;
    border: 2px solid #008CBA;
    border-radius: 8px;
     margin-top: 20px;
    cursor: pointer
}
 .button{
     text-decoration: none;
     color: #000;
     -webkit-transition-duration: 0.4s;
    /* Safari */
     transition-duration: 0.4s;
}
 .button:hover{
    background-color: #008CBA;
     color: white;
     border: 2px solid #008CBA
}
 .gbutton{
    font-size: 16px;
    padding: 3px 15px;
    border: 2px solid #555555;
    border-radius: 8px;
     margin-top: 20px;
    cursor: pointer
}
 .gbutton{
     text-decoration: none;
     color: #000;
     -webkit-transition-duration: 0.4s;
    /* Safari */
     transition-duration: 0.4s;
}
 .gbutton:hover{
    background-color: #555555;
     color: white;
     border: 2px solid #555555
}
 input[type=submit]:hover{
    background-color: #008CBA;
     color: white;
     border: 2px solid #008CBA
}
 input[type=reset]:hover{
    background-color: #008CBA;
     color: white;
     border: 2px solid #008CBA
}
 input.rbutton{
    font-size: 16px;
     padding: 3px 15px;
     border: 2px solid #F44336 !important;
     border-radius: 8px;
     margin-top: 20px;
    cursor: pointer;
     text-decoration: none;
     color: #000;
     -webkit-transition-duration: 0.4s;
     transition-duration: 0.4s;
}
 input.rbutton:hover{
    background-color: #F44336 !important;
     color: white;
     border: 2px solid #F44336 !important
}
 input.update{
    font-size: 16px;
     padding: 3px 15px;
     border: 2px solid #4CAF50 !important;
     border-radius: 8px;
     margin-top: 20px;
    cursor: pointer;
     text-decoration: none;
     color: #000;
     -webkit-transition-duration: 0.4s;
     transition-duration: 0.4s;
}
 input.update:hover{
    background-color: #4CAF50 !important;
     color: white;
     border: 2px solid #4CAF50 !important
}

        </style>
    </head>
    <body>
        <div class="phpcoding">
        <section class="headeroption">
            <h2><?php echo "CRUD Using OOP PHP and MYSQLi"; ?></h2>
        </section>
        <section class="maincontent">

