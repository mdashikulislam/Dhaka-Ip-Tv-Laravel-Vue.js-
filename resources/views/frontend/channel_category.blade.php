@extends('frontend.layouts.app')
@section('content')
    <div class="filter mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="filter__content">
                        <div class="filter__items">
                            <!-- filter item -->
                            <div class="filter__item" id="filter__genre">
                                <span class="filter__item-label">GENRE:</span>

                                <div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-genre" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <input type="button" value="Action/Adventure">
                                    <span></span>
                                </div>

                                <ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-genre">
                                    <li>Action/Adventure</li>
                                    <li>Animals</li>
                                    <li>Animation</li>
                                    <li>Biography</li>
                                    <li>Comedy</li>
                                    <li>Cooking</li>
                                    <li>Dance</li>
                                    <li>Documentary</li>
                                    <li>Drama</li>
                                    <li>Education</li>
                                    <li>Entertainment</li>
                                    <li>Family</li>
                                    <li>Fantasy</li>
                                    <li>History</li>
                                    <li>Horror</li>
                                    <li>Independent</li>
                                    <li>International</li>
                                    <li>Kids</li>
                                    <li>Kids & Family</li>
                                    <li>Medical</li>
                                    <li>Military/War</li>
                                    <li>Music</li>
                                    <li>Musical</li>
                                    <li>Mystery/Crime</li>
                                    <li>Nature</li>
                                    <li>Paranormal</li>
                                    <li>Politics</li>
                                    <li>Racing</li>
                                    <li>Romance</li>
                                    <li>Sci-Fi/Horror</li>
                                    <li>Science</li>
                                    <li>Science Fiction</li>
                                    <li>Science/Nature</li>
                                    <li>Spanish</li>
                                    <li>Travel</li>
                                    <li>Western</li>
                                </ul>
                            </div>
                            <!-- end filter item -->

                            <!-- filter item -->
                            <div class="filter__item" id="filter__quality">
                                <span class="filter__item-label">QUALITY:</span>

                                <div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-quality" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <input type="button" value="HD 1080">
                                    <span></span>
                                </div>

                                <ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-quality">
                                    <li>HD 1080</li>
                                    <li>HD 720</li>
                                    <li>DVD</li>
                                    <li>TS</li>
                                </ul>
                            </div>
                            <!-- end filter item -->

                            <!-- filter item -->
                            <div class="filter__item" id="filter__rate">
                                <span class="filter__item-label">RATING:</span>

                                <div class="filter__item-btn dropdown-toggle" role="button" id="filter-rate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="filter__range">
                                        <div id="filter__imbd-start"></div>
                                        <div id="filter__imbd-end"></div>
                                    </div>
                                    <span></span>
                                </div>

                                <div class="filter__item-menu filter__item-menu--range dropdown-menu" aria-labelledby="filter-rate">
                                    <div id="filter__imbd"></div>
                                </div>
                            </div>
                            <!-- end filter item -->

                            <!-- filter item -->
                            <div class="filter__item" id="filter__year">
                                <span class="filter__item-label">RELEASE YEAR:</span>

                                <div class="filter__item-btn dropdown-toggle" role="button" id="filter-year" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="filter__range">
                                        <div id="filter__years-start"></div>
                                        <div id="filter__years-end"></div>
                                    </div>
                                    <span></span>
                                </div>

                                <div class="filter__item-menu filter__item-menu--range dropdown-menu" aria-labelledby="filter-year">
                                    <div id="filter__years"></div>
                                </div>
                            </div>
                            <!-- end filter item -->
                        </div>

                        <!-- filter btn -->
                        <button class="filter__btn" type="button">apply filter</button>
                        <!-- end filter btn -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="catalog">
        <div class="container">
            <div class="row row--grid">
                @forelse($channels as $channel)
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    {!! getChannelCard($channel) !!}
                </div>
                @empty
                @endforelse
                {{$channels->links('vendor.pagination.custom')}}
            </div>
        </div>
    </div>

@endsection
