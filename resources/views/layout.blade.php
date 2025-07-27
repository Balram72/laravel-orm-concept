<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Table Example</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
  <div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="jumbotron text-center">
                <h1 class="display-6">ORM CRUD</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h6 class="text-left bg-secondary p-2 text-white">@yield('title')</h6>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>

