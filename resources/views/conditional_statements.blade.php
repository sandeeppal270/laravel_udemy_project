<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>this is conditional statements view page</h1>
    <h2>this is second heading</h2>
    <h3>this is third heading</h3>
    <h4>this is four heading</h4>
    <h5>this is five heading</h5>
    <h6>this is six heading</h6>
    @unless(!count($retArr))
    <h1>this is unless condition</h1>
    @endunless
        
    
    @if(count($retArr)==1)
    <h1>we have one course to learn.</h1>
    @elseif(count($retArr)>1)
    <h2>we have 2 or more course learn</h2>
    @else
    <h1>this is vacation time</h1>

    @endif
</body>
</html>