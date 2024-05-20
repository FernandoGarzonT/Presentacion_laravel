<x-base>
    @section('content')
        <div id="basic" class="">
            <label><strong>Personal Data</strong></label>
            <div id="card1">
                <p>
                    De Colombia, tierra rica en cultura y biodiversidad; pais donde he disfrutado de muchas cosas.
                </p>
                <picture><img id="img1" src="{{asset('storage/img/colombia.jpg')}}" alt="Colombia"></picture>
            </div>
            <div id="card2">
                <p>
                    Donde he trabajado y estudiado en lo que tengo de vida.
                </p>
                <picture><img id="img2" src="{{asset('storage/img/ibague.jpg')}}" alt="Ibague"></picture>
            </div>
        </div>
       {{--  @persist('laravel')@endpersist --}}
    @endsection
</x-base>


