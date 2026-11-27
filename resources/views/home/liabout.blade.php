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
            text-align: left;
            margin-left: 10%;
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
        p{
           margin-left: 10%;
        }
        </style>
    </head>
    <body>
        <!-- header navigation -->
        <header>
            <a class='head' href="{{ route('li_home') }}">HOME</a>
            <a class='head' href="{{ route('about.li') }}">ABOUT</a>
            <a class='head' href="{{ route('task') }}">TASKS</a>
        </header>
        
        <h1>ABOUT</h1>
        <p>
            This is a simple task managment system that can create, modify, and delete task.
        </p>
       
        
    </body>
</html>