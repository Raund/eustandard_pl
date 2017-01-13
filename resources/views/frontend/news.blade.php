@extends('ws-app')

@section('content')

    <div class="col-md-12">

        <div class="panel panel-default wow fadeInUp">

            <div class="panel-heading panel-heading_bg">{{ trans('base.latest_news') }}</div>

            <div class="panel-body panel-body_news">

                <div class="row">

                    @foreach($news as $new)

                        <div class="r-block-item clearfix">

                            @if(count($new->getImages()) > 0)

                                <div class="col-md-3">

                                    <a href="/{{ App::getLocale() }}/news/article-{{ $new -> id }}" class="thumbnail news_img">
                                        <img src="/{{$new->getImages()[0]['min']}}" alt="...">
                                    </a>

                                </div>

                                <div class="col-md-9">

                            @else

                                <div class="col-md-12">

                            @endif

                                <h4 class="title_news">{{ $new->getTranslate('title') }}</h4>

                                <div class="block-content">{!! str_limit($new->getTranslate('short_description'), 710) !!}</div>

                                <div class="clearfix">

                                    <span class="pull-left"><span class="news-date">{{ trans('base.date') }}: {{ date('d/m/Y ',strtotime($new -> date)) }}</span></span>

                                    <a href="/{{ App::getLocale() }}/news/article-{{ $new -> id }}" class="pull-right">{{ trans('base.read_full_news') }}<i class="fa fa-angle-right fa-lg fa_my"></i><i class="fa fa-angle-right fa-lg"></i></a>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

                <nav aria-label="Page navigation">
                    {!! $works->render() !!}
                </nav>
            </div>

        </div>

    </div>

@endsection