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
        
     </style>
     <div class="content">
    <h1>Categories</h1>

    <div class="text-content">
    <a href="{{ route('categories.create') }}" style="font-size: 25px;">Create New Category</a>
    <br>
        @foreach ($categories as $category)
            <br>
                {{ $category->name }}
                <li style="font-size: 25px;">
                <a href="{{ route('categories.edit', $category) }}">Edit</a>
                <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>

            </li>
        @endforeach
        <br>
        <a href="{{ route('welcome') }}" style="color: mistyrose;font-size: 25px;">Go to Welcome Page</a> 

    </div>
    </div>
@endsection
