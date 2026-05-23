<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Board</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="font-family: serif; padding: 20px;">

    <h1 style="font-size: 2em; font-weight: bold; margin-bottom: 10px;">{{ $heading }}</h1>
    <hr style="margin-bottom: 20px;">

    <ul style="list-style-type: disc; padding-left: 40px;">
        @foreach($jobs as $job)
            <li style="margin-bottom: 10px;">
                <a href="/jobs/{{ $job['id'] }}" style="color: #0000ee; text-decoration: underline;">
                    {{ $job['title'] }}
                </a>
            </li>
        @endforeach
    </ul>

</body>
</html>