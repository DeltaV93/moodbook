<!DOCTYPE HTML>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <title>@yield('title') | Moodbook</title>
            <meta name="description" content="@yield('description')">
            
        <link rel="icon" href="{!! asset('favicon.png') !!}" type="image/x-icon">
        
            {{-- APP STYLESHEETS --}}
        {{-- {!! HTML::style('css/components.css') !!} --}}
        {!! HTML::style('css/app.css') !!}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    </head>
    <body>
        @include('user.partials.user_nav')
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
        {!! HTML::script('js/editor.js') !!}}

       
<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>

<script type="text/javascript">
$(function(){

    $(".save_btn").click(function(){
        alert('cats');
       $.ajax({
            type: "STORE",
            url: "user",
            data: { 
                text: "cat"
            },
            success: function(result){
                console.log(result);
            }
        })
    });


});        
            
    </body>
</html>