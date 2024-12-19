<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action=""></form>
            @csrf
        <div class="card-header">
            <h1>NDK - Login</h1>
        </div>

        <div class="card-body">
            <div class="mb-3">
                <label for="ndkEmail" class="form-label">Email </label>
                <input type="email" class="form-control" 
                    id="ndkEmail" name="ndkEmail"
                    placeholder="ndkEmail@example.com">
                <span id="email-error"></span>
            </div>
            <div class="mb-3">
                <label for="ndkPass" class="form-label">Password </label>
                <input type="password" class="form-control" 
                    id="ndkPass" name="ndkPass"
                    placeholder="xxxx"/>
                <span id="email-error"></span>
            </div>
        </div>

        <div class="card-footer">
            <button class="btn btn-primary">Submit</button>
        </div>
    </section>
</body>
</html>