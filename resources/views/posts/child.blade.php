<li style="margin-left: 20px;">
    {{$child->name}}
    <ul style="margin-left: 20px;">
        @foreach($child->subcategories as $subcategories)
            @include('posts.child',['child'=>$subcategories])
        @endforeach
    </ul>
</li>
