@extends('ws-app')

@section('content')

    <div class="col-md-8">

        <div class="panel panel-default wow fadeInDown">

            <div class="panel-body">

                <div class="col-md-6 map">

                    {!! $texts->get('contact.map_poland_1') !!}

                </div>

                <div class="col-md-6 address-block">

                    <h4 class="title_contact">{{ trans('base.poland_office_1') }}</h4>

                    <i class="fa fa-phone fa-3x" aria-hidden="true"></i>

                    <ul class="phone">
                        <li>{{  $texts->get('contact.poland_phone_1') }}</li>
                        <li>{{  $texts->get('contact.poland_phone_2') }}</li>
                    </ul>

                    <br>

                    <i class="fa fa-envelope fa-3x" aria-hidden="true"></i>

                    <ul class="phone mail">
                        <li>{{  $texts->get('contact.email_poland_1') }}</li>
                        <li>{{  $texts->get('contact.email_poland_2') }}</li>
                    </ul>

                    <br>

                    <i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>

                    <ul class="phone address">
                        <li>{{  $texts->get('header.address_poland') }}</li>
                    </ul>

                </div>

            </div>

        </div>

        <div class="panel panel-default wow fadeInDown">

            <div class="panel-body">

                <div class="col-md-6 map">

                    {!! $texts->get('contact.map_poland_2') !!}

                </div>

                <div class="col-md-6 address-block">

                    <h4 class="title_contact">{{ trans('base.poland_office_2') }}</h4>

                    <i class="fa fa-phone fa-3x" aria-hidden="true"></i>

                    <ul class="phone">
                        <li>{{  $texts->get('contact.poland_phone_3') }}</li>
                        <li>{{  $texts->get('contact.poland_phone_4') }}</li>
                    </ul>

                    <br>

                    <i class="fa fa-envelope fa-3x" aria-hidden="true"></i>

                    <ul class="phone mail">
                        <li>{{  $texts->get('contact.email_poland_3') }}</li>
                        <li>{{  $texts->get('contact.email_poland_4') }}</li>
                    </ul>

                    <br>

                    <i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>

                    <ul class="phone address">
                        <li>{{  $texts->get('header.address_poland_2') }}</li>
                    </ul>

                </div>

            </div>

        </div>

        <div class="panel panel-default wow fadeInDown">

            <div class="panel-body panel-body_contact">

                <div class="col-md-6 map">

                    {!! $texts->get('contact.map_ukraine') !!}

                </div>

                <div class="col-md-6 address-block">

                    <h4 class="title_contact">{{ trans('base.ukraine_office') }}</h4>

                    <i class="fa fa-phone fa-3x" aria-hidden="true"></i>

                    <ul class="phone">
                        <li>{{  $texts->get('header.tel1') }}</li>
                        <li>{{  $texts->get('header.tel2') }}</li>
                    </ul>

                    <br>

                    <i class="fa fa-envelope fa-3x" aria-hidden="true"></i>

                    <ul class="phone mail">
                        <li>{{  $texts->get('contact.email_ukraine_1') }}</li>
                        <li>{{  $texts->get('contact.email_ukraine_2') }}</li>
                    </ul>

                    <br>

                    <i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>

                    <ul class="phone address">
                        <li>{{  $texts->get('header.address') }}</li>
                    </ul>

                </div>

            </div>

        </div>

    </div>

@endsection