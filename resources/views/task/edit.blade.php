<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tasks</title>
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
        a.head{
            color: #230800;
            text-decoration: none;
            padding: 5px;
        }
        a.new{
            color: #230800;
            text-decoration: none;
            padding: 5px;
            font-family: Arial, sans-serif;
            font-size: 20px;
            margin-left: 50px;
        } 
        a.edit{
            color: #e0491b;
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
        table{
            margin: 30px auto;
            width: 100%; 
            border-collapse: collapse; 
            background: white;
            max-width: 850px; 
        }
        th, td{ 
            padding: 10px; 
            border: 1px solid #ccc;
            text-align: center;
        }
        
        td.task{
            text-align: left;
        }

        th{ 
            background: #e9f1f2; 
        }
        p{
            text-align: center;
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
        <header>
            <a class='head' href="{{ route('li_home') }}">HOME</a>
            <a class='head' href="{{ route('about.li') }}">ABOUT</a>
            <a class='head' href="{{ route('task') }}">TASKS</a>
        </header>
        <h1>TASKS</h1>
        <div class='box'>
            <form action="{{ route('task.update', $task->id) }}" method="POST" enctype="multipart/form-data">
            
            @csrf
            <label for="tn">Task: {{ $task->tn}} </label>
            
            <br>
            <br>
            
            <input type="text" id="tn" name="tn"
                value="{{ old('tn') }}"
                placeholder="Enter new task name">
        
            @error('tn')
                <p style="color: red;">{{ $message }}</p>
            @enderror

                <button tupe='submit'>Update Task</button>      
            </form>
        </div>
    </body>
</html>