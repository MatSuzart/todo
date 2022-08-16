<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css" />
    <title>To-Do</title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <img src="/assets/images/logo.png" />
        </div>
        <div class="content">
            <nav>
                <a href="#" class="btn btn-primary">
                    NEW
                </a>
                <main>
                    {{$slot}}
                </main>
            </nav>
        </div>
    </div>
</body>
</html>

