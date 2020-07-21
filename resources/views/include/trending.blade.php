<!-- Trending Now -->
<div class="container">

    <div class="trending-now">
        <span class="trending-now__label">
          <i class="ui-flash"></i>
        Newsflash</span>
        <div class="newsticker">
            <ul class="newsticker__list">
                @foreach($flashposts as $flashpost)
                    <li class="newsticker__item"><a href="{{ route('postShow', ['slug'=>$flashpost->slug]) }}" class="newsticker__item-url">{{ $flashpost->title }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="newsticker-buttons">
            <button class="newsticker-button newsticker-button--prev" id="newsticker-button--prev" aria-label="next article"><i class="ui-arrow-left"></i></button>
            <button class="newsticker-button newsticker-button--next" id="newsticker-button--next" aria-label="previous article"><i class="ui-arrow-right"></i></button>
        </div>
    </div>
</div>