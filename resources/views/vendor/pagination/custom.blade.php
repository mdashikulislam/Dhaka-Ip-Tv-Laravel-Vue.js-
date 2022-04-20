@if ($paginator->hasPages())
    <div class="col-12">
        <ul class="paginator">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="paginator__item paginator__item--prev" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a href="javascript:void(0)"><i class="icon ion-ios-arrow-back"></i></a>
                </li>
            @else
                <li class="paginator__item paginator__item--prev">
                    <a rel="prev" aria-label="@lang('pagination.previous')" href="{{ $paginator->previousPageUrl() }}"><i class="icon ion-ios-arrow-back"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="paginator__item paginator__item--active" aria-current="page"><a href="javascript:void(0)">{{ $page }}</a></li>
                        @else
                            <li class="paginator__item"><a  href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="paginator__item paginator__item--next">
                    <a  href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="icon ion-ios-arrow-forward"></i></a>
                </li>
            @else
                <li class="paginator__item" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <a href="javascript:void(0)" aria-hidden="true"><i class="icon ion-ios-arrow-forward"></i></a>
                </li>
            @endif
        </ul>
    </div>
@endif
