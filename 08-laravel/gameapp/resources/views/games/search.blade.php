@forelse ($games as $game)
<article class="record">
    <figure class="avatar">
        <img class="mask" src="{{ asset('images') . '/' . $game->image }}" alt="Photo">
        <img class="border" src="{{ asset('images/border-mask-card.png') }}" alt="border">
    </figure>
    <aside>
        <h3>{{ $game->tittle }}</h3>
        <h4>{{ $game->category->name }}</h4>
    </aside>
    <figure class="actions">
        <a href="{{ url('games/' . $game->id) }}">
            <img src="../images/ico-view.svg" alt="viewUser">
        </a>
        <a href="{{ url('games/' . $game->id . '/edit') }}">
            <img src="../images/ico-edit.svg" alt="viewUser">
        </a>
        <a href="javascript:;" class="delete" data-title="{{ $game->tittle }}">
            <img src="../images/ico-delete.svg" alt="Delete">
        </a>
        <form action="{{ url('games/' . $game->id) }}" method="POST" style="display: none">
            @csrf
            @method('delete')
        </form>
    </figure>
</article>

@empty
    No found
@endforelse
