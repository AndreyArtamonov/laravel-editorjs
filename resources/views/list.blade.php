@if($style === 'ordered')<ol>@else<ul>@endif@foreach($items as $item)<li>{!! $item !!}</li>@endforeach@if($style === 'ordered')</ol>@else</ul>@endif
