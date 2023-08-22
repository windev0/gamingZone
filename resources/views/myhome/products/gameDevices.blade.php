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
                            <th scope="col">Supprimer</th>
                            <th scope="col">Modifier</th>
                            <th scope="col">Voir</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>40</td>
                            <td>supp</td>
                            <td>mod</td>
                            <td>:::</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Mark</td>
                            <td>40</td>
                            <td>supp</td>
                            <td>mod</td>
                            <td>:::</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Mark</td>
                            <td>40</td>
                            <td>supp</td>
                            <td>mod</td>
                            <td>:::</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Mark</td>
                            <td>40</td>
                            <td>supp</td>
                            <td>mod</td>
                            <td>:::</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Mark</td>
                            <td>40</td>
                            <td>supp</td>
                            <td>mod</td>
                            <td>:::</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Mark</td>
                            <td>40</td>
                            <td>supp</td>
                            <td>mod</td>
                            <td>:::</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="card-footer"><a href="{{ route('createGameDevice') }}" class="btn btn-success">Ajouter</a></div>
        </div>
    </div>
@endsection
