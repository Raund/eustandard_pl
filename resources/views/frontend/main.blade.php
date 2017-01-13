@extends('ws-app')

@section('content')

    <div class="col-md-12">

        <div id="webstudio-slider" style="display:none;">

            @foreach($slides as $slide)

                @if(count($slide->getImages()) > 0)

                    <img alt="{{$slide->getTranslate('title')}}"
                         src="/{{$slide->getImages()[0]['full']}}"
                         data-image="/{{$slide->getImages()[0]['full']}}"
                         id="img-{{$slide->id}}"
                         data-description=" {{$slide->getTranslate('description')}}">

                @endif

            @endforeach

        </div>

    </div>

    <div class="col-md-8">

        <div class="panel panel-default about-us wow fadeInLeft">

            <div class="panel-heading about-us_heading">{{ $main->getTranslate('title') }}</div>

            <div class="panel-body about-us_body">

                <div class="col-md-12">

                    {!! $main->getTranslate('short_description') !!}

                    <div class="description" style="display: none;">{!!$main->getTranslate('description') !!}</div>

                    <a href="#" class="description-show pull-right">{{ trans('base.more') }}<i class="fa fa-angle-down fa-lg"></i></a>

                </div>

            </div>

        </div>

        <div class="panel panel-default wow fadeInLeft">

            <div class="panel-heading panel-heading_bg">{{ trans('base.video') }}</div>

            <div class="panel-body">

                <iframe width="100%" height="400" src="{{  $texts->get('main.video') }}" frameborder="0" allowfullscreen></iframe>

            </div>

        </div>


    </div>

@endsection