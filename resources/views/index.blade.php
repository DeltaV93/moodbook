@extends('layouts.user_master')
@section('content')

<section class="">
    <div class="container-fluid jumbotron jumbotron-into text__white text-center">
      <h1 class="heavy">MoodBook</h1>
      <h2 class="light">Would you paint with all the colors of your words?</h2>

      <a href="{{ url('/login') }}"><button class="btn__primary">Login</button></a>
    </div>
<section>

<section class="container about-us">
    <div class="row col-md-12">
        <div class="col-md-4">
            <img src="{{ URL::asset('/img/where.svg') }}" alt="Stickfigure drawing of someone reading a book" class="col-xs-12 col-xs-offset-2 col-sm-4 col-md-5 col-md-offset-1 img-circle about-us-img about-us-why">
            <div class="row col-xs-12 col-sm-12">
            <h2 class="text-center">Why</h2>
            <p class=" light about-us-body">Every been on any social medai site and see a friend complain none stop? Well, that's why. Most people do not understand the weight of their words.</p>
            </div>    
        </div>
        <div class="container col-md-4">
            <img src="{{ URL::asset('/img/why.svg') }}" alt="Stick Figure Drawing of someone in a thinking postion with a question mark above their head." class="col-xs-12 col-xs-offset-2 col-sm-4 col-md-5 col-md-offset-1 img-circle about-us-img about-us-how">
            <div class="row col-xs-12 col-sm-12">
            <h2 class="text-center">How</h2>
            <p class="col-sm-12 light about-us-body">We base everthing on the words you use. By breaking down your input, we can get a good idea of how your feeling. We then create colors based on your words.</p>
            </div>    
        </div>

        <div class="container col-md-4">
            <img src="{{ URL::asset('/img/how.svg') }}" alt="Stick Figure hovered over a labtop getting ready to use MoodBook" class="col-xs-12 col-xs-offset-2 col-sm-4 col-md-5 col-md-offset-2 img-circle about-us-img about-us-where">
            <div class="row col-xs-12 col-sm-12">
            <h2 class="text-center">Where</h2>
            <p class="col-xs-12 col-sm-12 light about-us-body">Since this is a mobile first website, you can access it anywhere you have a internet connection. Soon we will be intergrating Twitter and Facebook into our app. That way you will be able to see the colors you make on othere social media website.</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class=" jumbotron jumbotron-video">
        <div class="bs-example" data-example-id="responsive-embed-16by9-iframe-youtube"> 
            <div class="embed-responsive embed-responsive-16by9"> 
                <iframe  width="420px" height="345px" class="embed-responsive-item" src="https://www.youtube.com/embed/6ZORzPbXqBo?autoplay=1&loop=1" frameborder="0" allowfullscreen"">
                </iframe> 
            </div> 
        </div>
    </div> 
</section>


<section>
<div class="container examples">
    <h2>Time to test drive!</h2>
</div>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-8 test-drive">
                <div class="">
                    <p>Try us out right now. Type in your last status update, or anything else on your mind. The box to the right will display the moods of your words</p>
                
<!--                 <div id="toolbar">
                  <a data-wysihtml5-command="bold">bold</a>
                  <a data-wysihtml5-command="italic">italic</a>
                  <a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1">H1</a>
                  <a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="p">P</a>
                  <a data-wysihtml5-command="createLink">insert link</a>
                </div> -->

                </div>
                    {!! Form::open() !!}
                    {!! Form::textarea('testDriveText', null,['class' => 'text-box ','id'=>'textarea','style'=>" col-xs-3",'placeholder' => 'If you use postive words, you will get bright colors. Use negative words ... well you get the picture.']) !!}
                <div>
                    {!! Form::submit('Submit', ['class' => 'btn__primary']) !!}      
                </div>  
                    {!! Form::close() !!}            
            </div>
            <div class="col-sm-3 col-md-3 ">
                <div class="testdrive-colorbox"></div>
            </div>
                <!-- <div class="col-sm-6 col-md-6 "> -->
            
        </div>
    </div>
</section> 

@endsection