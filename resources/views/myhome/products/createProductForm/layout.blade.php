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
        <form action="" method="post">
            @csrf
            <div>
                <div class="form-group form-line">
                    <input type="text" name="name" placeholder="Nom du produit" id="" class="form-control">
                    <input type="number" name="price" placeholder="Prix du produit" id=""
                        class="form-control">
                    <input type="number" name="quantity" placeholder="Quantité" id="" class="form-control">
                </div>
                <br>
                <div class="text-area">
                    <textarea name="description" id="" cols="95" rows="3" class="form-control"
                        placeholder="Description du produit"></textarea>
                </div>
                <br>
                <fieldset class="type ">
                    <span><b>Type de produit</b></span>
                    <span><b>Date d'ajout</b></span>
            </div>
            <div class="type">
                <input type="text" name="type" placeholder="Type du produit" id="" class="form-control"
                    value="@yield('type')" width="4" disabled>
                <input type="date" name="createdAt" id="" class="form-control" style="margin-left: 8px;">
            </div>
            <br>
            <div class="form-group form-line">
                <b>Image</b>
                <input type="file" name="image" id="" class="form-control">
            </div>
    </div>
    <div class="card-footer"><button class="btn btn-success" type="submit">Enregistrer</button></div>
    </form>

</div>
</div>
