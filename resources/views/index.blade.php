@extends('layouts.master')
@section('content')

<section class="">
    <div class="container-fluid jumbotron jumbotron-into">
      <h1 class="jumbotron-intro--title">MoodBook</h1>
      <p class="jumbotron-intro--sub-title light ">Really cool tag line that is longer than the title</p>
      <!-- <img src="{{ URL::asset('/img/why.svg') }}"> -->
    </div>
<section>

<section class="container about-us">
    <div class="row col-md-12">
        <div class="col-md-4">
            <img src="{{ URL::asset('/img/why.svg') }}" alt="Stickfigure drawing of someone asking why" class="col-xs-12 col-xs-offset-2 col-sm-4 col-md-5 col-md-offset-1 img-circle about-us-img about-us-why">
            <div class="row col-xs-12 col-sm-12">
            <h2>Why</h2>
            <p class=" light about-us-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>    
        </div>
        <div class="container col-md-4">
            <img src="{{ URL::asset('/img/how.svg') }}" alt="..." class="col-xs-12 col-xs-offset-2 col-sm-4 col-md-5 col-md-offset-1 img-circle about-us-img about-us-how">
            <div class="row col-xs-12 col-sm-12">
            <h2>How</h2>
            <p class="col-sm-12 light about-us-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>    
        </div>

        <div class="container col-md-4">
            <img src="{{ URL::asset('/img/where.svg') }}" alt="..." class="col-xs-12 col-xs-offset-2 col-sm-4 col-md-5 col-md-offset-2 img-circle about-us-img about-us-where">
            <div class="row col-xs-12 col-sm-12">
            <h2>Where</h2>
            <p class="col-xs-12 col-sm-12 light about-us-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
            <div class="col-sm-9 col-md-9 test-drive">
                <div class="container">
                    <p>Try us out right now. Type in your last status update, or anything else on your mind. The box to the right will display the moods of your words</p>
                </div>
                    {!! Form::open() !!}
                    {!! Form::textarea('testDriveText', null,['class' => 'text-box testdrive--textbox', 'style'=>"width:100%",'placeholder' => 'If you use postive words, you will get bright colors. Use negative words ... well you get the picture.']) !!}
                <div>
                    {!! Form::submit('Submit', ['class' => 'btn btn-defult defult--input']) !!}      
                </div>  
                    {!! Form::close() !!}            
            </div>
            <div class="col-sm-3 col-md-3 ">
                <div class="testdrive-colorbox">
                    
                </div>
            </div>
                <!-- <div class="col-sm-6 col-md-6 "> -->
            
        </div>
    </div>
</section> 

@endsection