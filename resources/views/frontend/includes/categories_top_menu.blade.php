@foreach($category->children as $items)
    <li class="has-child">
        <a class="text-capitalize" href="{{ route('category', ['slug' => $items->slug]) }}">{{ $items->name }}</a>
    </li>
@endforeach
