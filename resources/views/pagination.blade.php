@if ($paginator->hasPages())
    <ul class="list-inline list-unstyled"">
       

        @if ($paginator->onFirstPage())
            <li><span>←</span></li>
        @else
            <li class="prev"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">←</a></li>
        @endif
      

        @foreach ($elements as $element)
           
            @if (is_string($element))
                <li><span>{{ $element }}</span></li>
            @endif
           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        
        @if ($paginator->hasMorePages())
            <li class="next"><a href="{{ $paginator->nextPageUrl() }}" rel="next">→</a></li>
        @else
            <li><span>→</span></li>
        @endif
        
    </ul>
@endif 