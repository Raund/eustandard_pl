@extends('ws-app')

@section('content')

    <div class="col-md-8">

            <div class="panel panel-default wow fadeInDown">

                <div class="panel-heading">{{ trans('base.latest_jobs') }}</div>

                <div class="panel-body">

                    <div class="row">

                        @foreach($works as $work_item)

                            <div class="r-block-item">

                                <div class="col-md-12">

                                    <h4 class="r-prof">{{ $work_item->getTranslate('title') }}</h4>

                                    <h5 class="works-atribute">{{ trans('base.date') }}:<span class="news-date">{{ date('d/m/Y ',strtotime($work_item -> date)) }}</span></h5>

                                    <h5 class="r-price works-atribute">{{ trans('base.salary') }}<span class="news-date">{{ $work_item->getTranslate('price') }} грн</span></h5>

                                    {!! $work_item->getTranslate('short_description') !!}

                                    <a href="/{{ App::getLocale() }}/works/article-{{ $work_item -> id }}" class="pull-right">{{ trans('base.more') }}<i class="fa fa-angle-right fa-lg"></i></a>

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