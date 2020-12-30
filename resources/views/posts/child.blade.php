<li style="margin-left: 20px;">
    {{$child->name}}
    <ul style="margin-left: 20px;">
        @if($child->relationLoaded('subcategories'))
            @foreach($child->subcategories as $subcategories)              
                @include('posts.child', ['child'=> $subcategories])
            @endforeach
        @endif
    </ul>
</li>
