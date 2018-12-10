<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Smart Commerce</title>   
          <img src="https://yata.ostr.locaweb.com.br/2befa8f6de61a912dda5ad63cf8c0e7eb41705f5ba917cc7d5cce3378560059f" style="float:left;width:250px;height:250px; margin-top: 150px">
        <style>
            html, body {
                background-color: #F0FFFF;
                color: black;
                font-family: arial;
            }
            #formu{
                box-shadow: 5px 5px 10px #0076a3;
                -webkit-box-shadow: 5px 5px 10px #0076a3;
                -moz-box-shadow: 5px 5px 10px #0076a3;
            	padding:2%;
            	background-color:#B0E0E6;
            	width:40%;
            }
            #botao{
            	background-color:green;
            	border-color: green;
            	color:white;
            	padding:0.5%;
            }
            #but{
                background-color: #4CAAF8;
            }

        </style>
     </head>
     <body>
         @yield('conteudo')
     </body>
</html>