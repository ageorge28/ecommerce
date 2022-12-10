@php
    
    $tags_en = \App\Models\Product::groupBy('tags_en')->select('tags_en')->orderBy('tags_en')->get();
    $tags_hin = \App\Models\Product::groupBy('tags_hin')->select('tags_hin')->get();

    $tagsen = '';
    foreach($tags_en as $tag)
    {
        $t_unsorted = explode(',', Str::of($tag->tags_en));
        $t_sorted = Arr::sort($t_unsorted);
        $t = implode($t_sorted, ',') ;
        $tagsen .=  $t . ',';
    }

    $t_en = explode(',', $tagsen);
    $t_en_unique = array_unique($t_en);
    $tag_en = Arr::sort($t_en_unique);
    $tags_en = implode($tag_en, ',') ;
    if($tags_en[0] == ',')
    {
        $tags_en = substr($tags_en, 1, strlen($tags_en));
    }

    $tagshin = '';
    foreach($tags_hin as $tag)
    {
        $t_unsorted = explode(',', Str::of($tag->tags_hin));
        $t_sorted = Arr::sort($t_unsorted);
        $t = implode($t_sorted, ',') ;
        $tagshin .=  $t . ',';
    }

    $t_hin = explode(',', $tagshin);
    $t_hin_unique = array_unique($t_hin);
    $tag_hin = Arr::sort($t_hin_unique);
    $tags_hin = implode($tag_hin, ',') ;
    if($tags_hin[0] == ',')
    {
        $tags_hin = substr($tags_hin, 1, strlen($tags_hin));
    }

@endphp


<div class="sidebar-widget product-tag wow fadeInUp">
    <h3 class="section-title">
        @if(session()->get('language') == 'Hindi') उत्पाद टैग @else Product Tags @endif
    </h3>
    <div class="sidebar-widget-body outer-top-xs">
      <div class="tag-list">
        @if(session()->get('language') == 'Hindi')
            @foreach(Str::of($tags_hin)->explode(',') as $t)
                    <a class="item" title="{{ $t }}" href="{{ url('products/tag/'. $t) }}">{{ $t }}</a> 
            @endforeach
        @else
            @foreach(Str::of($tags_en)->explode(',') as $t)
                {{-- @foreach(Str::of($tag->tags_en)->explode(',') as $t) --}}
                    <a class="item" title="{{ $t }}" href="{{ url('products/tag/'. $t) }}">{{ $t }}</a> 
                {{-- @endforeach   --}}
            @endforeach
        @endif
      </div>
      <!-- /.tag-list --> 
    </div>
    <!-- /.sidebar-widget-body --> 
  </div>