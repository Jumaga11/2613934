@forelse ($users as $user)
<article class="record">
    <figure class="avatar">
        <img class="mask" src="{{ asset('images') . '/' . $user->photo }}" alt="Photo">
        <img class="border" src="{{ asset('images/border-mask-card.png') }}" alt="border">
    </figure>
    <aside>
        <h3>{{ $user->fullname }}</h3>
        <h4>{{ $user->role }}</h4>
    </aside>
    <figure class="actions">
        <a href="{{ url('users/' . $user->id) }}">
            <img src="../images/ico-view.svg" alt="viewUser">
        </a>
        <a href="{{ url('users/' . $user->id . '/edit') }}">
            <img src="../images/ico-edit.svg" alt="viewUser">
        </a>
        <a href="javascript:;" class="delete" data-fullname="{{ $user->fullname }}">
            <img src="../images/ico-delete.svg" alt="Delete">
        </a>
        <form action="{{ url('users/' . $user->id) }}" method="POST" style="display: none">
            @csrf
            @method('delete')
        </form>
    </figure>
</article>
    
@empty
    No found
@endforelse
