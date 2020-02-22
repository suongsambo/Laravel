<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Styles -->
        <style>
            
            #header{
                background: green;
                height: 120px;
                width: 100%;
            }
            #left{
            background: gray; 
            width: 30%;
            float: left;
            height: 400px;
            }
            #right{
                background: silver; 
                width: 70%;
                float: right;
                height: 400px;
            }
          
        </style>
    </head>
    <body>
        <div id="header">
          @yield('header')
        </div>
        <div id="left">
          @yield('left')
        </div>
        <div id="right">
          @yield('right')
        </div>
    </body>
</html>
