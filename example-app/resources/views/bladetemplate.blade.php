@extends('layouts.bsdefault')

@section('pagetitle')
    {{'Blade Syntax'}}
@endsection
@section('bladesyntax')
    active
@endsection
@section('maincontent')

    <h1>This is the The Blade Syntax Page</h1>

    <p class="text-danger fw-bold fs-4">2 + 4 = {{2 + 4}}</p>

    @php
        $num1 = 3;
        $num2 = 10;
    @endphp

    <p>Num1 + Num2 = {{$num1 + $num2}}</p>
    {!!    "<h1 class='text-success'>Printing h1 with blade syntax</h1>"   !!}

    {{-- {{"Control Structures in blade"}} --}}
    <hr>
    <h1 class="text-primary">Control Structures in blade (if,else)</h1>

    @php
        $name = "aklsdf";
        $switchnum = 3;
    @endphp

<h6 class="text-success">Output Using if else</h6>
{{-- if else in blade --}}
@if($name == "Akash")
{{"Hello Mukul"}}
@elseif ($name == "Akash")
{{"Hello Akash"}}
@else
{{"Unrecognized User"}}
@endif

<br>
<br>

{{-- Switch case in blade --}}

<h6 class="text-success">Output Using Switch Case</h6>
    @switch($switchnum)
        @case(1)
            {!!"<h3 class=text-secondary>Monday</h3>"!!}
            @break
        @case(2)
            {!!"<h3 class=text-secondary>Tuesday</h3>"!!}
            @break
        @case(3)
            {!!"<h3 class=text-secondary>Wednesday</h3>"!!}
            @break
        @case(4)
            {!!"<h3 class=text-secondary>Thursday</h3>"!!}
            @break
        @case(5)
            {!!"<h3 class=text-secondary>Friday</h3>"!!}
            @break
        @case(6)
            {!!"<h3 class=text-secondary>Saturday</h3>"!!}
            @break
        @case(7)
            {!!"<h3 class=text-secondary>Sunday</h3>"!!}
            @break
        @default
            {!!"<h3 class=text-secondary>Invalid Day</h3>"!!}
    @endswitch
    
    <hr>
    <h1 class="text-primary">Loops in Blade</h1>

    @php
        $fruits = ['Apple', "Mango", "Grapes", "Kiwi", "Avacado"];
    @endphp

    <h6 class="text-success">List of Fruits using for loop</h6>
    <ul>
        @for($i = 0; $i< 5; $i++)
            <li>{{$fruits[$i]}}</li>
        @endfor
    </ul>
    
    <h6 class="text-success">List of Fruits using foreach loop</h6>
    <ul>
        @foreach($fruits as $f)
            @if ($loop->first)
                {!!"<p class='text-danger'>Total Number of fruits = $loop->count</p>"!!}
            @endif
                <li>{{$loop->iteration}} : {{$f}}</li>
        @endforeach
    </ul>

    {{-- Using Javascript in blade --}}
    {{-- {!!"<script>
        alert('Hello World');
        </script>"!!} --}}
@endsection