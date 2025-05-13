{{-- All these varaibles are coming from the include directive --}}

<h1>Hello {{$name}}</h1>
<p>Your Role: {{$role}}</p>

<ul>
    @foreach ($cars as $c)
        @if ($loop->first)
            <h4>List of cars:</h4>
        @endif
        <li>{{$loop->iteration}}. {{$c}}</li>
    @endforeach
</ul>