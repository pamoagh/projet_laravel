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
            color: cadetblue;
            text-decoration: none;
            font-size: 16px;
        }

        a:hover {
            text-decoration: underline;
        }
     </style>

     <div class="content">
    <h1>Edit Category</h1>

    <div class="text-content">
    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name" style="font-size: 25px;">Name:</label>
        <input type="text" name="name" id="name" value="{{ $category->name }}" required>

        <button type="submit" style="font-size: 25px;">Update Category</button>
    </form>
    </div>
    <a href="{{ route('categories.index') }}" style="font-size: 25px;">Back to Categories List</a>

    </div>
@endsection
