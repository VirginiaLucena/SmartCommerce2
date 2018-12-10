<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Smart Commerce</title>   
         <img src="https://www.lojavirtual.com.br/wp-content/uploads/2015/12/AddProduto.png" style="float:left;width:300px;height:300px;margin-left:16px; margin-top:150px">
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
                margin-top: 100px;

                
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