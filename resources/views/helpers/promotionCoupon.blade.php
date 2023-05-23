@can('show-coupon')


<div class="ottieni-coup">
        
        <a href="{{route('coupon',[$sel_promId->promo_Id,$scelta_coupon])}}" target="_blank"><button class="button-ottieni" >
                        Acquista Cupon
                </button></a></div>


@endauth