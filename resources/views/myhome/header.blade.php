<header class="header-container d-flex">
    <div class="header-items logo"><img src="/assets/images/logo.png" alt="logo"></div>
    <div class="header-items search-group">
        <form action="" method="post" class="form-group">
            <input type="search" placeholder="Rechercher..." class="form-control">
            <button type="submit">
                <img src="/assets/images/svg/search.svg" alt="" class="">
            </button>
        </form>
    </div>                        
    <div class="header-items icons d-flex">
        <a href=""> <img src="/assets/images/svg/bell.svg" alt="" class="text-white"></a>
        <a href="{{ route('login') }}">
            <img src="/assets/images/svg/person.svg" alt="" class="text-white">
        </a>
    </div>
    
</header>
