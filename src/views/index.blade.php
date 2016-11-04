<html>
<head>
    <title>Tags</title>
</head>
<body>
<ul>
    @foreach($tags as $tag)
        <li>{{$tag}}</li>
    @endforeach
</ul>
</body>
</html>