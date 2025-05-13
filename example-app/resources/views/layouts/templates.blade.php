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

{{-- Using a for else loop to check if the array is empty --}}

<h4>List of sports:</h4>
<ul>
    @forelse ($sport as $key => $value)
        <li>{{$key}} - {{$value}}</li>
    @empty
        <li>No Sports to display</li>
    @endforelse
</ul>