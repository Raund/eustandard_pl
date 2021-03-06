@extends('ws-app')

@section('content')

    <div class="col-md-8">

        <div class="panel panel-default wow fadeInUp">

            <div class="panel-heading">{{ trans('base.contacts') }}</div>

            <div class="panel-body">

                <div class="row" style="margin-bottom: 20px">

                    <div class="col-md-6 text-center">

                        <i class="fa fa-phone fa-3x" aria-hidden="true"></i>

                        <ul class="phone">
                            <li>{{  $texts->get('header.tel1') }}</li>
                            <li>{{  $texts->get('header.tel2') }}</li>
                        </ul>

                    </div>

                    <div class="col-md-6 text-center">

                        <i class="fa fa-envelope fa-3x" aria-hidden="true"></i>

                        <ul class="phone">
                            <li>{{  $texts->get('contact.email_ukraine_1') }}</li>
                            <li>{{  $texts->get('contact.email_ukraine_2') }}</li>
                        </ul>

                    </div>
                    
                </div>

            </div>

        </div>

        <div class="panel panel-default wow fadeInUp">

            <div class="panel-heading">{{ trans('base.message') }}</div>

            <div class="panel-body">

                <div class="row">

                    <form method="post" id="message-form" class="r-form" action="">

                        <div class="clearfix">
                            <label for="name"><h4>{{ trans('base.resume.name') }}</h4></label>
                            <input id="name" type="text" required="required" name="name" required class="form-control" aria-describedby="sizing-addon2">
                        </div>

                        <div class="clearfix">
                            <label for="mobile"><h4>{{ trans('base.resume.mobile') }}</h4></label>
                            <input id="mobile" type="number" required="required" name="mobile" class="form-control" aria-describedby="sizing-addon2">
                        </div>

                        <div class="clearfix">
                            <label for="email"><h4>{{ trans('base.email') }}</h4></label>
                            <input id="email" type="email" required="required" name="email" class="form-control" aria-describedby="sizing-addon2">
                        </div>

                        <div class="clearfix">
                            <label for="message"><h4>{{ trans('base.your_message') }}</h4></label>
                            <textarea id="message" name="message_body" required="required" rows="5" class="form-control" aria-describedby="sizing-addon2"></textarea>
                        </div>
                        <input type="hidden" name="_method" value='post'/>
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <input type="submit" value="{{ trans('base.send') }}" name="submit" id="send-message" class="btn btn-primary btn-lg" style="width: 100%;" href="#" role="button">

                    </form>
                    {{--Файл переводов--}}
                    <script>
                        var trans = {
                            'base.success': '{{ trans('base.success_send_resume') }}',
                            'base.error': '{{ trans('base.error_send_resume') }}'
                        };
                    </script>
                    {{--Файл переводов--}}
                </div>

            </div>

        </div>

    </div>

@endsection