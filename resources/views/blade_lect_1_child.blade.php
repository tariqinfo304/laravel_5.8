<!-- Stored in resources/views/child.blade.php -->

@extends('blade_lect_1_parent')

@section('title', 'Title from Child View')

@section('nav-bar')
    @parent
    <p>This nav bar is appended to the master sidebar by child view .</p>
@endsection


@section("left-bar")
	<p>Here is child left-bar will show<p>
@endsection


@section("right-bar")
	<p>Here is child right-bar will show </p>

	{{-- it's alias for making sub-folder componen easy to access --}}
	@alert(['foo' => "$title"])
    		<strong>Whoops!</strong> Something went wrong! : {{$title}}
    	@slot("title")
    		Forbidden 
    	@endslot
	@endalert

@endsection


@section('content')
    <p>This is my body content.</p>

    @component("alert",['foo' => "$title"])
    		<strong>Whoops!</strong> Something went wrong! : {{$title}}
    	@slot("title")
    		Forbidden 
    	@endslot
	@endcomponent


    <hr/>

    {{-- 
        Blade {{ }} statements are automatically sent through PHP's htmlspecialchars function to prevent XSS attacks. 

        Displaying Unescaped Data
        By default, Blade {{ }} statements are automatically sent through PHP's htmlspecialchars function to prevent XSS attacks. If you do not want your data to be escaped, you may use the following syntax:

        Hello, {!! $name !!}.

    --}}


    <p>Escaped Data : {{ $ex_data }}</p>
    <p>Unescaped Data  :  {!! $un_ex_data !!} </p>


    <hr/>
    <h2>Rendering JSON</h2>
    Json_data : @json($json)
    <hr/>
    @json($json, JSON_PRETTY_PRINT);


    <hr/>
    <h2>Blade & JavaScript Frameworks</h2>
    <p> Hello, @{{ name }} </p>

    <hr/>
    <h2>For showing all Js variabls </h2>
    @verbatim
        <div class="container">
            Hello, {{ name }}.
        </div>
    @endverbatim

    <hr/>
    <h2>Control Structures</h2>
    @if (count($title) === 1)
        I have one record!
    @elseif (count($title) > 1)
        I have multiple records!
    @else
        I don't have any records!
    @endif

    <hr/>

    @isset($name)
        <p>Set Name</p>
        // $records is defined and is not null...
    @endisset

    @empty($name)
        <p>name is empty</p>
    @endempty

    <hr/>

    <h2>Switch Statements</h2>
   
    {{ $i =1 }}
    @switch($i)
        @case(1)
            First case...
            @break

        @case(2)
            Second case...
            @break

        @default
            Default case...
    @endswitch


    <hr/>


@endsection
