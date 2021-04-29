@foreach($categories as $category)
    @foreach($category->children as $items)
        <option value="{{ $items->id }}">{{ $dash . '--| ' . $items->name }}</option>
    @endforeach
    
@endforeach
