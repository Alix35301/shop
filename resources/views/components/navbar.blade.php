<div>

@foreach ($categories as $category)
    {{$category->name}}
    @foreach ($category->subCategories as $subCategory)
        {{$subCategory->name}}
    @endforeach
@endforeach 

</div>