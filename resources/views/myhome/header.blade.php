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
        <a href="{{ route('logout') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-up-left-circle-fill text-dark" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-5.904 2.803a.5.5 0 1 0 .707-.707L6.707 6h2.768a.5.5 0 1 0 0-1H5.5a.5.5 0 0 0-.5.5v3.975a.5.5 0 0 0 1 0V6.707l4.096 4.096z"/>
              </svg>
        </a>
    </div>
    
</header>
