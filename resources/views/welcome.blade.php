
<!DOCTYPE html>
<html>
<head>
    <title>TODO_LIST</title>
    <style>
        body {
            margin: 0;
            padding: 50px;
            height: 100vh;
            background-image: url('images/background.png');   
            background-size: cover;
            animation: fadeInBackground 3s forwards;
        }

        @keyframes fadeInBackground{
            from{
                opacity: 0;
            }
            to{
                opacity: 1;
            }
        }

        .content {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            height: 100vh;
            opacity: 0;
            animation: fadeInContent 3s forwards;
            animation-delay: 1s;
        }

        @keyframes fadeInContent {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }



        h1{
         color: rgba(128, 0, 128, 0.5);
        text-align: center;
        margin: 20px 0;
        font-style: italic;
        font-size: 50px;
        
        }

        .text-content {
            text-align: center;
            padding: 10px;
            color: black;
        }


        


        </style>
</head>
<body>
    <div class="content">
        <h1>WELCOME TO THE TASK MANAGER BY PAMELA</h1>
    <div class="text-content">
    <p style="font-size: 25px;">WE INVITE YOU TO VISIT THE FOLLOWING SECTIONS :</p>
    <BR></BR>

    <ul style="list-style-type: none; padding: 0; margin: 0;">
        <li><a href="{{ route('tasks.index') }}" style="font-size: 20px;">SEE THE TASKS</a></li>
        <BR></BR>

        <li><a href="{{ route('categories.index') }}" style="font-size: 20px;">SEE THE CATEGOTIES</a></li>
    </ul>
    </div>
    </div>
</body>
</html>
