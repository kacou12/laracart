@if($product->reviews->avg('rating'))
    @for($i = 1; $i <= 5; $i++)
        <i class="material-icons {{($product->reviews->avg('rating') >= $i) ? 'yellow-text text-darken-1' : 'grey-text'}}  star">star</i>
    @endfor
@else
<span>no reviews!</span>
@endif