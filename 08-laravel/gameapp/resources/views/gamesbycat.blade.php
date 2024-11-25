@if (isset($category))
    <article>
        <h2>
            <img src="../images/ico-category.svg" alt="Category">
            {{ $category->name }}
        </h2>
        <div class="slider owl-carousel owl-theme">
            @foreach ($games as $game)
                @if ($category->id == $game->category_id)
                    <a href=" {{ url('catalogue/' . $game->id) }} ">
                        <figure>
                            <img src=" {{ asset('images/' . $game->image) }}" alt="" class="slide">
                            <figcaption> {{ Str::words($game->tittle, 2, '...') }} </figcaption>
                        </figure>
                    </a>
                @endif
            @endforeach
        </div>
    </article>
@else
    @foreach ($categories as $category)
        @if (count($category->games) > 0)
            <article>
                <h2>
                    <img src="../images/ico-category.svg" alt="Category">
                    {{ $category->name }}
                </h2>
                <div class="slider owl-carousel owl-theme">
                    @foreach ($games as $game)
                        @if ($category->id == $game->category_id)
                            <a href=" {{ url('catalogue/' . $game->id) }} ">
                                <figure>
                                    <img src=" {{ asset('images/' . $game->image) }}" alt="" class="slide">
                                    <figcaption> {{ Str::words($game->tittle, 2, '...') }} </figcaption>
                                </figure>
                            </a>
                        @endif
                    @endforeach
                </div>
            </article>
        @endif
    @endforeach
@endif
