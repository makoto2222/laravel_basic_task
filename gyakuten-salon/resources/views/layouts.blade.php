<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link 
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" 
        integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" 
        crossorigin="anonymous"
        >
    <title>人生逆転サロン</title>
</head>
<body>
    <header class="navbar navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="{{url('')}}">
                Gyakuten
            </a>
        </div>
    </header>
    
    @yield('content')
    

    
</body>
</html>