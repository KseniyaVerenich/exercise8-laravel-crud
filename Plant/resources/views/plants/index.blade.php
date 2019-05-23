<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PLOG</title>
</head>
<body>

<h1>Plants</h1>

@foreach($plants as $plant)



<h1>{{$plant->common}}</h1>
<ul>
<li>{{$plant->id}}</li>
<li>{{$plant->genus}}</li>
<li>{{$plant->species}}</li>
<li>{{$plant->description}}</li>
<li>{{$plant->created_at}}</li>

</ul>

@endforeach
    
</body>
</html>