<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('CSS/style.css') }}">

    <title> To-do Homepage </title>
</head>
<body>
    <div class="hero-section d-flex" style="background-image: url('{{ asset('storage/images/desk.jpg') }}');">
        <div>
            <div class="main">
                <div class="mt-4">
                    <h1>
                         "A To-Do List is a simple yet powerful tool for organizing tasks,<br>
                         boosting productivity, and reducing stress."
                    </h1>
                    <p class="">
                        Here's why it's helpful:
                        <ul>
                            <li> Prioritization - Helps you focus on what's most important. </li>
                            <li> Organization - Keeps tasks structured, preventing overwhelm. </li>
                            <li> Motivation - Checking off completed tasks gives a sense of accomplishment. </li>
                            <li> Memory Aid - Ensures you don't forget important deadlines or errands. </li>
                        </ul>
                    </p>
                </div>

                <div>
                    <h5> Stay Organized, Get Things Done </h5>
                    <p class=" mt-3"> Manage your tasks easily with our Laravel To-do List App. </p>
                </div>

                <div class="mt-4">
                    <a href="{{ route('tasks.index') }}" class="btn btn-primary btn-lg"> View Tasks </a>
                    {{-- @guest
                        <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg">Get Started</a>
                    @endguest --}}
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
