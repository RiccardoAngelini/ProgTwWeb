@include('helpers.remainingDays', ['expirationDate' => $sel_promId->date_end])



@php
    use Carbon\Carbon;

    $expiration = Carbon::createFromFormat('d/m/Y', $expirationDate);

    if ($expiration->isPast()) {
            $remainingDays = 'Offerta scaduta!';
        } else {
            $remainingTime = $expiration->diff(Carbon::now());
            $remainingDays = $remainingTime->format('%a giorni rimasti');
        }
    
@endphp
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
@if ($remainingDays !== 'Offerta scaduta!')


<form action="{{ route('coupon.acquista',$promo_Id) }}" method="POST">
    @csrf
    <div class="ottieni-coup">
    <button class="button-ottieni" type="submit">Acquista Coupon</button>
    </div>
</form> 
@endif

