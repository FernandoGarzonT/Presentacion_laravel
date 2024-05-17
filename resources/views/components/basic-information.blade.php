<x-base>
    @section('content')
        <div id="basic" class="">
            <label><strong>Personal Data</strong></label>
            <div id="card">
                <p>
                    De Colombia, tierra rica en cultura y biodiversidad; pais donde he disfrutado de muchas cosas.
                </p>
                <picture><img src="{{asset('storage/img/colombia.jpg')}}" alt="Colombia"></picture>
            </div>
            <div id="card">
                <p>
                    Donde he trabajado y estudiado en lo que tengo de vida.
                </p>
                <picture><img src="{{asset('storage/img/ibague.jpg')}}" alt="Ibague"></picture>
            </div>
        </div>
    @endsection
</x-base>


