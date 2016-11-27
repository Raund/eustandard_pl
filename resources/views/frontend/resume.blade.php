@extends('ws-app')

@section('content')

    <div class="col-md-8">

            <ul class="nav nav-tabs">

                <li class="active"><a data-toggle="tab" href="#tab1">{{ trans('base.resume.makeresume') }}</a></li>

                <li><a data-toggle="tab" href="#tab2">{{ trans('base.resume.sendresume') }}</a></li>

            </ul>

            <div class="row">

                <div class="col-md-12">

                    <div class="tab-content">

                        <div id="tab1" class="tab-pane fade in active">

                            <form method="POST" id="resume-form" class="r-form" action="">

                                <div class="clearfix">
                                    <label for="name"><h4>{{ trans('base.resume.name') }}</h4></label>
                                    <input id="name" type="text" name="name" required class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <div class="clearfix">
                                    <label for="birth"><h4>{{ trans('base.resume.birth') }}</h4></label>
                                    <input id="birth" type="text" name="birth" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <div class="clearfix">
                                    <label for="address"><h4>{{ trans('base.resume.address') }}</h4></label>
                                    <input id="address" type="text" name="address" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <div class="clearfix">
                                    <label for="mobile"><h4>{{ trans('base.resume.mobile') }}</h4></label>
                                    <input id="mobile" type="tel" name="mobile" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <div class="clearfix">
                                    <label for="homephone"><h4>{{ trans('base.resume.homephone') }}</h4></label>
                                    <input id="homephone" type="tel" name="homephone" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <div class="clearfix">
                                    <label for="education"><h4>{{ trans('base.resume.education') }}</h4></label>
                                    <textarea id="education" name="education" rows="5" class="form-control" aria-describedby="sizing-addon2"></textarea>
                                </div>

                                <div class="clearfix">
                                    <label for="profession"><h4>{{ trans('base.resume.profession') }}</h4></label>
                                    <input id="profession" type="text" name="profession" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <div class="clearfix">
                                    <label for="experience"><h4>{{ trans('base.resume.experience') }}<br><sub>{{ trans('base.resume.experiencedescribe') }}</sub></h4></label>
                                    <textarea id="experience" name="experience" rows="5" class="form-control" aria-describedby="sizing-addon2"></textarea>
                                </div>

                                <div class="clearfix">
                                    <label for="tool"><h4>{{ trans('base.resume.tool') }}</h4></label>
                                    <input id="tool" type="text" name="" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <div class="clearfix">
                                    <label for="salary"><h4>{{ trans('base.resume.salary') }}</h4></label>
                                    <input id="salary" type="text" name="" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <input type="submit" value="{{ trans('base.send') }}" class="btn btn-primary btn-lg" style="width: 100%;" href="#" role="button">
                                <input type="hidden" name="article_id" value=''/>
                                <input type="hidden" name="_method" value='post'/>
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                            </form>

                        </div>

                        <div id="tab2" class="tab-pane fade">

                            <form method="POST" id="resume-form-file" enctype="multipart/form-data" class="r-form" action="">

                                <div class="clearfix">
                                    <label for="file"><h4>{{ trans('base.resume.file') }}</h4></label>
                                    <input id="file" accept="doc,xls,zip" type="file" name="file" class="form-control" aria-describedby="sizing-addon2">
                                </div>

                                <input type="submit" value="{{ trans('base.send') }}" class="btn btn-primary btn-lg" href="#" role="button">
                                <input type="hidden" name="article_id" value=''/>
                                <input type="hidden" name="_method" value='post'/>
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                            </form>


                        </div>

                    </div>

                </div>

            </div>

        </div>

@endsection