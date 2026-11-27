<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
        <style>
        *{
            box-sizing: border-box;
        }
        h1{
            font-family: Arial, sans-serif;
            font-weight: bold;
            font-size: 55px;
            letter-spacing: 3.5px;
            color: #230800; 
            text-align: center;
        }
        h4{
            font-family: Arial, sans-serif;
            font-weight: bold;
            color: #372823; 
            text-align: center;
        }
        body { 
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            max-width: none;
            width: 100%;
            background-image: linear-gradient(to bottom, #fff7c7, #ffffff);
            background-repeat: no-repeat;
        }
        a.button{
            font-family: Arial, sans-serif;
            border: 1px solid #3d0a00;
            color: #230800;
            text-decoration: none;
            margin-left: 35px;
            font-size: 20px;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin: 5px auto;
            width: 200px;
            padding: 12px;
            border-radius: 5px;
            background-color: #ffffff;
        }
        a.head{
            color: #230800;
            text-decoration: none;
            padding: 5px;
        }
        header{
            background-color: #f9ec9d;
            width: 100%;
            max-width: 100%;
            padding: 20px;
            text-align: right;
        }
        </style>
    </head>
    <body>
        <!-- header navigation -->
         <header>
            <a class='head' href="{{ route('home') }}">HOME</a>
            <a class='head' href="{{ route('about.index') }}">ABOUT</a>
        </header>
        
        <h1>WELCOME!</h1>
        <h4>This is a simple task management system</h4>

        <br>
        <br>
        
        <a class='button' href="{{ route('login') }}">Login</a>
       
    </body>
</html>