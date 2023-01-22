<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
</head>
<body>
    <h1>For loop</h1>
    @for($i=0;$i<10;$i++)
    the current value is {{$i}}<br>
    @endfor
    <hr>
    <h2>Foreach loop</h2>
    
    <ul class="list-group">
        @foreach($courses as $course)
        <li class="list-group-item active" aria-current="true">{{$course}}</li>
        <p>Remaining Iteration:{{$loop->remaining}}</p>
        @endforeach
    </ul>
    <hr>
    <h2>Forelse loop</h2>
    <ul class="list-group">
    @forelse($courses as $course)
    <li class="list-group-item active" aria-current="true">{{$course}}</li>
    <p>Iteration:{{$loop->parent}}</p>
    {{-- total 8 iteration for foreach or forelse loop --}}
    {{-- index,first,last,iteration,depth,parent,count,remaining --}}
    @empty
    <p>No courses found</p>
    @endforelse
    </ul>
    <hr>
    <h2>While loop</h2>
    @while($count<=10)
    <p>the current value is:{{$count}}</p>
    @php $count++; @endphp
    @endwhile

   
    
</body>
</html>