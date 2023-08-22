<form action="" method="post">
    @csrf
    <div class="control-form d-flex justify-content-spacebetween" style="padding-top: 40%; padding-left:35%;">
        <div>
            <label for="">Name</label>
            <input type="text" name="@yield ('name')" placeholder="@yield ('placeholder')" id="">
        </div>
        <div>
            <label for="">Name</label>
            <input type="text" name="" placeholder="" id="">
        </div>
    </div>
</form>
