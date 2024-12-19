<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View 4 - Data Passing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        h2 {
            color: #555;
        }
        .container {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
            background-color: #f9f9f9;
            max-width: 600px;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Passing Data to View4</h1>
        <h2>Name: <span style="color: #007BFF;">{{ $name }}</span></h2>
        <h2>Company: <span style="color: #28A745;">{{ $company }}</span></h2>
    </div>
</body>
</html>
