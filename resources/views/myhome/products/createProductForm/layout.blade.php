<style>
    .form-line {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .form-line input {
        margin-left: 10px;
    }

    .text-area {
        margin-left: 8px;
    }

    .type {
        display: flex;
        justify-content: space-between;
    }
</style>

<div class="card " style="margin-top: 13%; margin-left:15%;">
    <div class="card-header ">
        <h5>Nouvel enregistrement</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <div class="form-group form-line">
                    <input type="text" name="name" placeholder="Nom du produit" id="" class="form-control"
                        required>
                    <input type="number" name="price" placeholder="Prix du produit" id=""
                        class="form-control" @required(true)>
                    <input type="number" name="quantity" placeholder="Quantité" id="" class="form-control"
                        required>
                </div>
                <br>
                <div class="text-area">
                    <textarea name="description" id="" cols="95" rows="3" class="form-control"
                        placeholder="Description du produit" required></textarea>
                </div>
                <br>
                <div class="type ">
                    <span><b>Type de produit</b></span>
                    <span><b>Date d'ajout</b></span>
                </div>
                <div class="type">
                    <select name="type" id="" class="form-control">
                        <option value="@yield('type')">Choisir</option>
                        <option value="@yield('type')">@yield('type')</option>
                    </select>
                    {{-- <input type="text" name="type" placeholder="Type du produit" id="" class="form-control"
                    value="@yield('type')" width="4" disabled required> --}}
                    <input type="date" name="date" id="" class="form-control" style="margin-left: 8px;"
                        required>
                </div>
                <br>
                <div class="type ">
                    <span><b>Image</b></span>
                    <span><b>Popularité</b></span>
                </div>
                <div class="form-group form-line">
                    <input type="file" name="image" id="" class="form-control" required>
                    <select name="popular" id="" class="form-control" style="margin-left: 8px;" required>
                        <option value="0">0</option>
                    </select>
                </div>
            </div>
            <div class="card-footer mt-3"><button class="btn btn-success" type="submit">Enregistrer</button></div>
        </form>

    </div>
</div>
