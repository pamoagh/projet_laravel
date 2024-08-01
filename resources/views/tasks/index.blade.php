@extends('layouts.app')

@section('content')
     <style>
         body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background-image: url('/images/background.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        h1{
         color: rgba(128, 0, 128, 0.5);
        text-align: center;
        margin: 20px 0;
        font-size: 50px;
        font-style: italic;
        }

        .content {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            height: 100vh;
        }

        .text-content {
            text-align: center;
            padding: 10px;
            color: black;
        }
        
     </style>
   
   <body>
 <div class="content">
      <h1>Tasks</h1>
      

    <div class="text-content">
    <form action="{{ route('tasks.index') }}" method="GET">
        <label for="category" style="font-size: 25px;">Category:</label>
        <select name="category" id="category">
            <option value="">All</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <label for="status" style="font-size: 25px;">Status:</label>
        <select name="status" id="status">
            <option value="">All</option>
            <option value="Pending">Pending</option>
            <option value="Completed">Completed</option>

        </select>

        <button type="submit" style="font-size: 25px;">Filter</button>
    </form>
    

    <a href="{{ route('tasks.create') }}" style="font-size: 25px;">Create New Task</a>
<br> 
    <ul style="list-style-type: none; padding: 0; margin: 0;">
        @foreach ($tasks as $task)
            <br>
                {{ $task->title }} - {{ $task->status }} - {{ $task->category->name }}
                <li style="font-size: 25px;">
                <a href="{{ route('tasks.edit', $task) }}">Edit</a>
                <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                <br><br>
            </li>

        @endforeach
    </ul>
    <a href="{{ route('welcome') }}" style="color: mistyrose;font-size: 25px;" >Go to Welcome Page</a> 

    </div>
@endsection
 </div>
   </body>
