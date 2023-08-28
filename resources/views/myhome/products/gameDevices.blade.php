@extends('myhome.admin.admin')
@section('product-actions')
    </div>
    <div style="margin-top: 13%; margin-left:15%;">
        <div class="card">
            <div class="card-header"><span style="font-size: 1.5rem">Liste des Accessoires de jeux</span></div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead class="thead thead-dark">
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Quantité</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Supprimer</th>
                            <th scope="col">Modifier</th>
                            <th scope="col">Voir</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($game_devices as $item)
                            <tr>
                                <th scope="row">{{ $item->id }} </th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->price }}</td>
                                <form action="{{ url('/admin/delete-game-device/' . $item->id) }}" method="POST">
                                    @method('GET')
                                    @csrf
                                    <td><button class="btn btn-outline-danger text-dark" type='submit'>supp</button></td>
                                </form>
                                <form action="{{ url('/admin/edit-game-device/' . $item->id) }}" method="POST">
                                    @method('GET')
                                    @csrf
                                    <td><button class="btn btn-outline-warning text-dark" type='submit'>mod</button></td>
                                </form>
                                <form action="{{ url('/admin/show-game-device/' . $item->id) }}" method="POST">
                                    @method('GET')
                                    @csrf
                                    <td><button class="btn btn-outline-primary text-dark" type='submit'><b>:::</b></button></td>
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer"><a href="{{ route('createGameDevice') }}" class="btn btn-success">Ajouter</a></div>
        </div>
    </div>
@endsection
