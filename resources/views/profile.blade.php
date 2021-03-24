<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> 
Profile view
</h1>
<h2>{{$myId}} ==== {{$myEmail}}</h2>
@foreach($info as $user)
{{$user}}<br>
@endforeach
@if ($age > 30)
<p>You are older man</p>
@else
<p>You are Younger</p>
@endif  

  <p>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias nemo nisi blanditiis amet quidem fugit rem laborum saepe, ipsa molestias necessitatibus totam enim qui quasi accusantium nihil ut in magni?

    
    </p>
</body>
</html>