<section class="section section--first section--bg" data-bg="{{asset('frontend/img/section/section.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section__wrap">
                    <!-- section title -->
                    <h1 class="section__title">{{@$pageTitle}}</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb__item"><a href="{{route('landing')}}">Home</a></li>
                        <li class="breadcrumb__item breadcrumb__item--active">{{@$pageTitle}}</li>
                    </ul>
                    <!-- end breadcrumb -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
