<!DOCTYPE HTML>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <title>@yield('title') | Moodbook</title>
            <meta name="description" content="@yield('description')">
            
        <link rel="icon" href="{!! asset('favicon.png') !!}" type="image/x-icon">
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,200italic,700italic|Open+Sans:400,300' rel='stylesheet' type='text/css'>
        
            {{-- APP STYLESHEETS --}}
        {{-- {!! HTML::style('css/components.css') !!} --}}
        {!! HTML::style('css/app.css') !!}
        

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
        {{ HTML::script('js/app.js') }}


        

       
<!-- <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script> -->

 
    </body>
<script type="text/javascript">
var $status = $('#status'),
    $commentBox = $('.text-box'),
    $titleBox = $('.editable--title'),
    timeoutId,
    $entry_body,
    $entry_color_1,
    $entry_color_2,
    $entry_color_3,
    $color_input_1 = $('#entry_color_1'),
    $color_input_2 = $('#entry_color_2'),
    $color_input_3 = $('#entry_color_3');

$commentBox.keypress(function () {
    $status.attr('class', 'pending').text('changes pending');
    
    // If a timer was already started, clear it.
    if (timeoutId) clearTimeout(timeoutId);
    
    // Set timer that will save comment when it fires.
    timeoutId = setTimeout(function () {
        console.log("BODY: " + $commentBox.val());
        $.ajax({
            type: "POST",
            url: 'colorchange',
            data: { 
                entry_title: $titleBox.val(),
                _token: '{{ csrf_token() }}',
                entry_body: $commentBox.val()
            }

    }, 50).done(function(result){
        $entry_color_1 = result[0],
        $entry_color_2 = result[1],
        $entry_color_3 = result[2];        
        
        $titleBox.css('background-image','linear-gradient(-180deg,'+ $entry_color_1+' 0%, '+ $entry_color_2+' 51%, '+ $entry_color_3 +' 100%)');
        $color_input_1.val($entry_color_1);
        $color_input_2.val($entry_color_2);
        $color_input_3.val($entry_color_3);
        

        console.log($entry_color_3);
        })  
        $status.attr('class', 'saved').text('changes saved');
        $status.addClass('text__success');
        $titleBox.addClass('text__white trans');


    });
});    

</script>     
</html>