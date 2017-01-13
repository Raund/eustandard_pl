@extends('ws-app')

@section('content')

    <div class="col-md-8">

        <div class="panel panel-default wow fadeInUp">

            <div class="panel-heading panel-heading_bg clearfix">

                <div class="col-md-9">

                    {{ $article->getTranslate('title') }}

                </div>

                <div class="col-md-3" style="padding: 0;">

                    <div class="pull-right"><i class="fa fa-calendar" aria-hidden="true"></i>{{ date('d/m/Y ',strtotime($article -> date)) }}</div>

                </div>

            </div>

            <div class="panel-body">

                <div class="row">

                    <div class="r-block-item r-block-item_article">

                        @if(count($article->getImages()) > 0)

                            <div class="col-md-12">

                                <a href="#" class="thumbnail">
                                    <img src="/{{$article->getImages()[0]['min']}}" alt="...">
                                </a>

                            </div>

                        @endif

                        <div class="col-md-12">

                            <div class="block-content"> {!! $article->getTranslate('description') !!}</div>

                            @if(Request::is('*/news/*'))

                                <a href="/{{ App::getLocale() }}/news" class="pull-right">{{ trans('base.all_news') }}<i class="fa fa-angle-right fa-lg fa_my"></i><i class="fa fa-angle-right fa-lg"></i></a>

                            @else

                                <a href="/{{ App::getLocale() }}/works" class="pull-right">{{ trans('base.all_jobs') }}<i class="fa fa-angle-right fa-lg fa_my"></i><i class="fa fa-angle-right fa-lg"></i></a>

                            @endif

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection