<li>
    <div>
        <a href="/categories/{{$child_category->slug}}"> {{ $child_category->name }}</a>
        <div>
            @if ($child_category->categories)
            <input type="checkbox" class="toggle">
            <ul>
                @foreach ($child_category->categories as $childCategory)
                @include('child_category', ['child_category' => $childCategory])
                @endforeach
            </ul>
            @endif
        </div>
    </div>
</li>