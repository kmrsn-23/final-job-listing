<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $job['title'] }} - Details</title>
</head>
<body>

    <a href="/jobs" style="text-decoration: none; color: gray; font-weight: bold;">Back to Job List</a>

    <h1 style="color: blue; margin-top: 20px;">{{ $job['title'] }}</h1>
    
    <p><strong>Company:</strong> {{ $job['company'] }}</p>
    <p><strong>Location:</strong> {{ $job['location'] }}</p>
    <p><strong>Salary:</strong> ₱{{ $job['salary'] }}</p>
    
    <hr>
    
    <h3>Job Description:</h3>
    <p style="line-height: 1.6; max-width: 600px;">
        {{ $job['description'] }}
    </p>

</body>
</html>