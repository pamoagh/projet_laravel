@extends('layouts.app')

@section('content')

<style>
         body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background-image: url('/images/background2.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        h1{
         color: cadetblue;
        text-align: center;
        margin: 20px 0;
        font-style: italic;
        font-size: 50px;
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
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            /*border: 1px solid #ddd;*/
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(8px);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"], 
        input[type="date"], 
        textarea, 
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: moccasin;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        button:hover {
            background-color: moccasin;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-align: center;
            color: burlywood;
            text-decoration: none;
            font-size: 16px;
        }

        a:hover {
            text-decoration: underline;
        }
     </style>
     <div class="content">
    <h1>Edit Task</h1>


    <div class="text-content">
    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title" style="font-size: 25px;">Title:</label>
        <input type="text" name="title" id="title" value="{{ $task->title }}" required>
        <br> <br>

        <label for="description" style="font-size: 25px;">Description:</label>
        <textarea name="description" id="description">{{ $task->description }}</textarea>
        <br> <br>

        <label for="status" style="font-size: 25px;">Status:</label>
        <select name="status" id="status" required>
            <option value="Pending" {{ $task->status == 'Pending' ? 'selected' : '' }}>Pending</option>
            <option value="Completed" {{ $task->status == 'Completed' ? 'selected' : '' }}>Completed</option>

        </select>
        <br> <br>

        <label for="due_date" style="font-size: 25px;">Due Date:</label>
        <input type="date" name="due_date" id="due_date" value="{{ $task->due_date }}">
        <br> <br>
        <label for="category_id" style="font-size: 25px;">Category:</label>
        <select name="category_id" id="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $task->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        </div>
        <br> <br>
        <button type="submit" style="font-size: 25px;">Update Task</button>
    </form>
    <a href="{{ route('tasks.index') }}" style="font-size: 25px;">Back to Task List</a>
    </div>
@endsection
