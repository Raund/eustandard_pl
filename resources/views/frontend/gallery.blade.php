@extends('ws-app')

@section('content')


    <div class="row">

        <div class="col-md-8">

            <div class="panel panel-default wow fadeInDown">
                <div class="panel-heading">Альбом 1</div>

                <div class="panel-body">

                    <div class="row">
                        <div class="col-md-12">

                            <div id="flex-gallery" class="flex-gallery" style="display:none;">

                                <img alt="Будь-який заголовок"
                                     src="https://powergen.gepower.com/content/dam/gepower-pgdp/global/en_US/images/product/power%20plants/digital-powerplant-2.jpg"
                                     data-image="https://powergen.gepower.com/content/dam/gepower-pgdp/global/en_US/images/product/power%20plants/digital-powerplant-2.jpg"
                                     data-description="Будь-який опис під ним. Це все можна міняти з адмін панелі">

                                <img alt="Будь-який заголовок"
                                     src="http://i.huffpost.com/gen/2167470/images/o-WOMEN-CONSTRUCTION-WORKER-facebook.jpg"
                                     data-image="http://i.huffpost.com/gen/2167470/images/o-WOMEN-CONSTRUCTION-WORKER-facebook.jpg"
                                     data-description="Будь-який опис під ним. Це все можна міняти з адмін панелі">

                                <img alt="Будь-який заголовок"
                                     src="http://latinosmag.com/wp-content/uploads/2015/05/canada-skilled-workers.jpg"
                                     data-image="http://latinosmag.com/wp-content/uploads/2015/05/canada-skilled-workers.jpg"
                                     data-description="Будь-який опис під ним. Це все можна міняти з адмін панелі">

                                <img alt="Будь-який заголовок"
                                     src="http://i.huffpost.com/gen/2167470/images/o-WOMEN-CONSTRUCTION-WORKER-facebook.jpg"
                                     data-image="http://i.huffpost.com/gen/2167470/images/o-WOMEN-CONSTRUCTION-WORKER-facebook.jpg"
                                     data-description="Будь-який опис під ним. Це все можна міняти з адмін панелі">

                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-sm-4 col-md-4">

            <div class="panel panel-default wow fadeInDown">
                <div class="panel-heading">Останні вакансії</div>

                <div class="panel-body">

                    <div class="row">
                        <div class="r-block-item">
                            <div class="col-md-12">
                                <h4 class="col-sm-6 col-md-6 text-left r-prof">Зварювальник </h4>
                                <h4 class="col-sm-6 col-md-6 text-right r-price">з/п від 10000грн</h4>
                                <p>Потрібні зварювальники з досвідом роботи для зварювання труб для водопостачання та пожежогасіння.
                                    Роботи по місту Києву. Повне завантаження. Офіційне працевлаштування. Можливе розселення.
                                </p>
                                <a href="#" class="pull-right">Детальніше<i class="fa fa-angle-right fa-lg"></i></a>
                            </div>
                            <hr>
                        </div>

                    </div>

                    <div class="row">
                        <div class="r-block-item">
                            <div class="col-md-12">
                                <h4 class="col-sm-6 col-md-6 text-left r-prof">Архітектор</h4>
                                <h4 class="col-sm-6 col-md-6 text-right r-price">з/п від 15000грн</h4>
                                <p>Будівельна компанія шукає архітектора для співпраці над новим великим та сучасним проектом
                                    житлового комплексу «Scandia». Вимоги: вік від 25−40 років; володіння програмами: ARCHICAD,
                                    AUTOCAD, 3DMAX (Corona, V-Ray)...
                                </p>
                                <a href="#" class="pull-right">Детальніше<i class="fa fa-angle-right fa-lg"></i></a>
                            </div>
                        </div>
                    </div>

                    <p><a class="btn btn-primary btn-lg" style="width: 100%;" href="#" role="button">Всі вакансії</a></p>

                </div>
            </div>


            <div class="panel panel-default wow fadeInUp">
                <div class="panel-heading">Останні новини</div>

                <div class="panel-body">

                    <div class="row">
                        <div class="r-block-item">
                            <div class="col-md-12"><h4>Міжнародний Економічний Форум</h4></div>
                            <div class="col-md-4">
                                <a href="#" class="thumbnail">
                                    <img src="http://www.economtermin.ru/uploads/fotos/2/3/1.jpg" alt="...">
                                </a>
                            </div>

                            <div class="col-md-8">
                                <p>У Форумі взяли участь близько 300 учасників, 50 доповідачів з 12 країн світу,
                                    серед яких інвестори, вчені, експерти, бізнесмени, повноважні...
                                </p>
                                <a href="#" class="pull-right">Читати повну новину<i class="fa fa-angle-right fa-lg"></i></a>
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="row">
                        <div class="r-block-item">
                            <div class="col-md-12"><h4>Збільшення пенсійного віку</h4></div>
                            <div class="col-md-4">
                                <a href="#" class="thumbnail">
                                    <img src="http://www.volynpost.com/img/modules/news/6/78/64cdbd95dff5a702f82bee8dc6cf5786/top-photo.jpg" alt="...">
                                </a>
                            </div>

                            <div class="col-md-8">
                                <p>Пенсійний вік підвищуватимуть поступово, але список професій, які дають право
                                    дострокового виходу на пенсію, суттєво скоротять починаючи з...
                                </p>
                                <a href="#" class="pull-right">Читати повну новину<i class="fa fa-angle-right fa-lg"></i></a>
                            </div>
                        </div>
                    </div>

                    <p><a class="btn btn-primary btn-lg" style="width: 100%;" href="#" role="button">Всі новини</a></p>

                </div>
            </div>

        </div>


    </div>

@endsection