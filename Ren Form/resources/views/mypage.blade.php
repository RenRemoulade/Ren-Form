<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My package</title>
  </head>
  <body>
    <h1>My webpage</h1>
    {{ $var1 }}

    <ul>
      @foreach($orders as $order)
        <li>{{ $order->name }}</li>
      @endforeach
    </ul>
  </body>
</html>
