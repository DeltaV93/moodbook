<!DOCTYPE HTML>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <title>@yield('title') | Project Name</title>
            <meta name="description" content="@yield('description')">
            
        <link rel="icon" href="{!! asset('favicon.png') !!}" type="image/x-icon">
        
            {{-- APP STYLESHEETS --}}
        {{-- {!! HTML::style('css/components.css') !!} --}}
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,200italic,700italic|Open+Sans:400,300' rel='stylesheet' type='text/css'>
        {!! HTML::style('css/app.css') !!}
    </head>
    <body>
        @include('layouts.partials.nav')
        {{-- APP CONTENT BEGINS --}}
        {{-- @include('layouts.partials.header') --}}
        
            <div class="wrapper">
                @yield('content')
            </div>
            {{-- MODALS --}}
            @yield('modal')
        @include('layouts.partials.footer')
        {{-- APP CONTENT ENDS --}}
        
        {{-- APP SCRIPTS --}}
 

        {!! HTML::script('js/app.js') !!}
        {!! HTML::script('js/toolbar.js') !!}
        {!! HTML::script('js/advanced_and_extended.js') !!}
        {!! HTML::script('js/editor.js') !!}



    </body>
</html>