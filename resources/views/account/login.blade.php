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
            box-shadow: 0px 0px 10px #d2cda8;
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
        div.box{
            display: flex;
            border-radius: 10%;
            background-color: #ffffff;
            box-shadow: 0 0 90px 2px #eeead6;
            width: 40%;
            margin: auto;
            padding: 5%;
        }
        </style>
    </head>
    <body>
        <!-- header navigation -->
        <header>
            <a class='head' href="{{ route('home') }}">HOME</a>
            <a class='head' href="{{ route('about.index') }}">ABOUT</a>
        </header>
        
        <h1>LOG IN</h1>

        <div class='box'>
            <form action="{{ route('log.auth') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="username">Username</label>

            <br>

            <input type="text" id="username" name="username"
                value="{{ old('username') }}"
                placeholder="Enter customer name">

            <br>
            <br>

            <label for="password">Password</label>
            
            <br>

            <input type="password" id="password" name="password"
                value="{{ old('password') }}"
                placeholder="Enter password address">
            
            @error('username')
                <p style="color: red;">{{ $message }}</p>
            @enderror

            @error('password')
                <p style="color: red;">{{ $message }}</p>
            @enderror

            <br>
            <br>

            <button type="submit">Log In</button>
        </form>
    </div>
        
    </body>
</html>