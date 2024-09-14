{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')



@section('content')
    <div class="container my-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Offerta</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Prezzo↑</th>
                    <th scope="col">Data di partenza</th>
                    <th scope="col">Riepilogo Pacchetto</th>
                </tr>
            </thead>
            @forelse ($travels as $travel)
                <tbody>
                    <tr>
                        <th scope="row">{{ $travel->id }}</th>
                        <td>{{ $travel->title }}</td>
                        <td>{{ $travel->description }}</td>
                        <td>{{ number_format($travel->price, 0, ',', '.') }} €</td>
                        <td>{{ date('d/m/Y', strtotime($travel->date)) }}</td>
                        <td>{{ $travel->slug . ' ' . '€' }}</td>
                    </tr>


                </tbody>
            @empty
                <h4>Non ci sono pacchetti disponibili</h4>
            @endforelse

        </table>





        @dump($travels)

    </div>
@endsection


@section('titlePage')
    home
@endsection
