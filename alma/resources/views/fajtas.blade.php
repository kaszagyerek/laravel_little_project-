@foreach($fajtas as $fajt)
    <ul> {{$fajt->id}}
        <li>{{$fajt->faneve}}</li>
        <li>{{$fajt->hanyeves}}</li>
    </ul>
@endforeach
