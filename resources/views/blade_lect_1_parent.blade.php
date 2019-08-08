{{-- 

@section directive, as the name implies, defines a section of content

@yield   directive is used to display the contents of a given section.

The @yield directive also accepts a default value as its second parameter. This value will be rendered if the section being yielded is undefined:

@show    will define and immediately yield the section.
 --}}
<html>
    <head>
        <title>App Name - @yield('title',"Nothing")</title>
    </head>
    <body>

        @section('nav-bar')
        <button>Home</button>
            Nav bar of system from parent <br/>
        @show

        <hr/>


        @section('left-bar')
            Left bar of website from parent <br/>
        @show

        <hr/>

        @section('right-bar')
            right bar of website from parent <br/>
        @show


        <hr/>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>