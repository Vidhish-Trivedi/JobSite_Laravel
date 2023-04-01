{{-- Blade avoids php tags for variables --}}
<h1>{{ $heading }}</h1>

{{-- Blade has directives,'@' for conditionals and loops, etc... --}}
@if(count($listings) === 0)
    <p>No Listings Found</p>
@endif

@foreach($listings as $el)
    <h2>{{ $el["title"] }}</h2>
    <p>{{ $el["description"] }}</p>
@endforeach
