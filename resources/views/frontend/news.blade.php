@extends('ws-app')

@section('content')

    <div class="col-md-8">

        <div class="panel panel-default wow fadeInUp">

            <div class="panel-heading">{{ trans('base.latest_news') }}</div>

            <div class="panel-body">

                <div class="row">

                    @foreach($news as $new)

                        <div class="r-block-item">

                            @if(count($new->getImages()) > 0)

                                <div class="col-md-3">

                                    <a href="/{{ App::getLocale() }}/news/article-{{ $new -> id }}" class="thumbnail">
                                        <img src="/{{$new->getImages()[0]['min']}}" alt="...">
                                    </a>

                                </div>

                                <div class="col-md-9">

                            @else

                                <div class="col-md-12">

                            @endif

                                <h4>{{ $new->getTranslate('title') }}</h4>

                                {!! str_limit($new->getTranslate('short_description'), 230) !!}

                                <div class="clearfix">

                                    <span class="pull-left">{{ trans('base.date') }}:<span class="news-date">{{ date('d/m/Y ',strtotime($new -> date)) }}</span></span>

                                    <a href="/{{ App::getLocale() }}/news/article-{{ $new -> id }}" class="pull-right">{{ trans('base.read_full_news') }}<i class="fa fa-angle-right fa-lg"></i></a>

                                </div>

                            </div>

                            <hr>

                        </div>

                    @endforeach

                </div>

                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>

    </div>

@endsection