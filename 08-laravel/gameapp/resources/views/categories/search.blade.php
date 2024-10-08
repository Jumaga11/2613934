@forelse ($categories as $category)
<article class="record">
    <figure class="avatar">
        <img class="mask" src="{{ asset('images').'/categories/'.$category->image }}" alt="Photo">
        <img class="border" src="{{ asset('images/border-mask-card.png') }}" alt="border">
    </figure>
    <aside>
        <h3>{{ $category->name }}</h3>
        <h4>{{ $category->manufacturer }}</h4>
    </aside>
    <figure class="actions">
        <a href="{{ url('categories/'.$category->id) }}">
            <img src="{{ asset('images/ico-view.svg') }}" alt="viewUser">
        </a>
        <a href="{{ url('categories/edit') }}">
            <img src="{{ asset('images/ico-edit.svg') }}" alt="viewUser">
        </a>
        <a href="javascript:;" class="delete" data-fullname="{{ $category->name }}">
            <img src="{{ asset('images/ico-delete.svg') }}" alt="Delete">
        </a>
        <form action="{{ url('categories/' . $category->id) }}" method="POST" style="display: none">
            @csrf
            @method('delete')
        </form>
    </figure>
</article>

@empty
    No found
@endforelse