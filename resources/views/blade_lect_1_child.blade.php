<!-- Stored in resources/views/child.blade.php -->

@extends('blade_lect_1_parent')

@section('title', 'Title from Child View')

@section('nav-bar')

    <button>Child</button>
    <p>This nav bar is appended to the master sidebar by child view .</p>
     @parent

@endsection



@section("left-bar")
    
     @component("alert")
            <strong>Good!</strong>
             @slot("title")
                Forbidden 
            @endslot
    @endcomponent

	<p>Here is child left-bar will show<p>
        @parent
        
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


    @component("alert",['foo' => "$title"] )
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
    <h1> Lecture # 15 </h1>
    <h2>Loops</h2>
    
    <h3>For Loop</h3>
    
    @for ($i = 0; $i < 10; $i++)
        The current value is {{ $i }} <br/>
    @endfor
    
    <h3>Foeach Loop</h3>
    
    @foreach ($users as $user)
        <p>This is user :  {{ $user }}</p>
    @endforeach

     <hr/>

    <h3>Forelse Loop</h3>

    @php  //$users = array() @endphp

    @forelse ($users as $user)
        <li> {{ $user }} </li>
    @empty
        <p>No users</p>
    @endforelse

     <hr/>

    <h3>While Loop </h3>
    
    @php $i = 0 @endphp

    @while ($i < 5 )
        <p>while Loop :  {{ $i++ }}</p>
        
    @endwhile

     <hr/>

    <h3>Break AND Continue</h3>
    @foreach ($users as $user)
        @if ($user == "admin")
            @continue
        @endif

        <li>{{ $user }}</li>

        @if ($user == "evs")
            @break
        @endif
    @endforeach


     <hr/>

    <h3>break with condition </h3>

    @foreach ($users as $user)
        @continue($user == "evs")

        <li>{{ $user }}</li>

        @break($user == "lahore")
    @endforeach

    {{--
        The Loop Variable
When looping, a $loop variable will be available inside of your loop. This variable provides access to some useful bits of information such as the current loop index and whether this is the first or last iteration through the loop:

        --}}

         <hr/>

    <h3>Loop Variables</h3>
    @foreach ($users as $user)
        @if ($loop->first)
            This is the first iteration.
        @endif

        @if ($loop->last)
            This is the last iteration.
        @endif

        <p> Loop index :  {{$loop->index}} </p>
        <p>This is user {{ $user }}</p>
    @endforeach

     <hr/>

    <h3> Nested Loop indexing </h3>
    {{-- If you are in a nested loop, you may access the parent loop's $loop variable via the parent property:
     --}}

    @foreach ($users as $user)
        @foreach ($users as $user)
                {{-- $loop->parent->first --}}
                @php echo "<pre>"; print_r($loop); @endphp
                @php //echo "<pre>"; print_r($loop->parent); @endphp
                 @break;
        @endforeach
         @break;
    @endforeach

     <hr/>

    <h3>PHP Code  in Blade Template</h3>
    @php
        echo "ok";
    @endphp


    <h3>Including Sub-Views</h3>
    @include("show",["data" => "tariq is coming"])
    {{-- @includeIf('view.name', ['some' => 'data'])  --}}
    {{-- @includeWhen($boolean, 'view.name', ['some' => 'data']) --}}

    <hr/>

    <h3>Rendering Views For Collections</h3>
    {{-- You may combine loops and includes into one line with Blade's @each directive: --}}

    @php 
        $users = [];
    @endphp
    <ul>
        @each("each",$users,"user","empty")
    </ul>

    <hr/>

    <h3>Stacks</h3>
    {{--
        Blade allows you to push to named stacks which can be rendered somewhere else in another view or layout. This can be particularly useful for specifying any JavaScript libraries required by your child views:

        --}}
    @push('scripts')
        <script src="/example.js"></script>
    @endpush
     {{-- @stack('scripts') --}}


     {{--

        @push('scripts')
    This will be second...
@endpush

// Later...

@prepend('scripts')
    This will be first...
@endprepend

        --}}

        <hr/>

        <h3>Model Injection</h3>
        @inject('login', 'App\Model\Login')
        <div>
            Login show Method : {{ $login->show() }}.
        </div>

        <hr/>

        <h3>Custom Blade Directive</h3>
        
        @string("evs sdfkjbsdfh sdfgsdjf sd ")



        <h4/>

        <h3>sharing data to all views</h3>
        <p>{{$key}}</p>

        <hr/>
        <h3>View composer</h3>
        {{--  --}}
        {{ $show_data_by_view_composer }}

@endsection
