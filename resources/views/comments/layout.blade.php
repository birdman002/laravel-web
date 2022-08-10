<!-- master.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/comments.css') }}" rel="stylesheet" />
  </head>
  <body>
      <div class="container">
          @yield('content')
      </div>
  </body>
</html>