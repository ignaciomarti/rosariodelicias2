@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <button class="main-btn mx-auto d-block mt-5" aria-hidden="true">Página anterior</button>
                </li>
            @else
                <li class="page-item">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev"><button class="main-btn mx-auto d-block mt-5">Página anterior</button></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li><button class="main-btn mx-auto d-block mt-5 disabled" aria-disabled="true">{{$element}}</button></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><button class="main-btn mx-auto d-block mt-5 active" aria-current="page">{{$page}}</button></li>
                        @else
                            <li><a href="{{ $url }}"><button class="main-btn mx-auto d-block mt-5">{{$page}}</button></a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next"><button class="main-btn mx-auto d-block mt-5">Siguiente página</button></a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <button class="main-btn mx-auto d-block mt-5" aria-hidden="true">Siguiente página</button>
                </li>
            @endif
        </ul>
    </nav>
@endif
