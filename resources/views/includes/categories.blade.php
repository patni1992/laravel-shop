@foreach ($categories as $category)
<li>
    <div>
    <a href="/categories/{{$category->slug}}">{{ $category->name }}</a>
    <div>
        <input type="checkbox" class="toggle">
        <ul>
            @foreach ($category->childrenCategories as $childCategory)
            @include('includes.child_category', ['child_category' => $childCategory])
            @endforeach
        </ul>
    </div>
</div>
</li>


@endforeach