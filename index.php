<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            #div-box{
                background: red;
                color: white;
                position: absolute;
                height: 100px;
                width: 200px;
                top:200px;
                left: 100px;
                  display: inline-block;
            }
        </style>
    </head>
    <body>
        <div id="div-box" onclick="hand()">Đây là bài tập thứ 2</div>
        <script>
            var box = document.getElementById('div-box');
           
            function hand(){
                alert('amazing');
            }
        </script>
    </body>
</html>
