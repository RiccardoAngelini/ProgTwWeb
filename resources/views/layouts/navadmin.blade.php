<nav class="sidebar">
    <a href="{{ route('admin') }}" class="logo">ADMIN PAGE</a>

    <div class="menu-content">
        <ul class="menu-items">
          <div class="menu-title" style="font-size: 40px;">MENU</div>

          <li class="item"><a href="{{route('Home')}}">Home</a></li>
          <li class="item">
                <div class="submenu-item">
                  <span>Aziende</span>
                  <i class="fa-solid fa-chevron-right"></i>
                </div>
            <ul class="menu-items submenu">
                  <div class="menu-title">
                    <i class="fa-solid fa-chevron-left"></i>
                    Visualizza Aziende
                  </div>
                  <li class="item"><a href="{{route('admin.listaziende')}}">Lista Aziende</a></li>
            </ul>
          </li>
          <li class="item">
              <div class="submenu-item">
                <span>Utenti</span>
                <i class="fa-solid fa-chevron-right"></i>
              </div>

            <ul class="menu-items submenu">
                <div class="menu-title">
                    <i class="fa-solid fa-chevron-left"></i>
                  Visualizza Utenti
                </div>
                <li class="item"><a href="{{route('admin.listautenti')}}">Lista Utenti</a></li>
            </ul>
          </li>
          <li class="item">
            <div class="submenu-item">
              <span>Catalogo</span>
              <i class="fa-solid fa-chevron-right"></i>
            </div>

          <ul class="menu-items submenu">
              <div class="menu-title">
                  <i class="fa-solid fa-chevron-left"></i>
                Visualizza Catalogo
              </div>
              <li class="item"><a href="{{route('catalogo')}}">Lista Offerte</a></li>
          </ul>
        </li>
        <li class="item">
          <div class="submenu-item">
            <span>Membri Staff</span>
            <i class="fa-solid fa-chevron-right"></i>
          </div>

        <ul class="menu-items submenu">
            <div class="menu-title">
                <i class="fa-solid fa-chevron-left"></i>
              Visualizza Membri Staff
            </div>
            <li class="item"><a href="{{route('admin.listastaff')}}">Lista Membri Staff</a></li>
        </ul>
              </li>
              <li class="item">
                <div class="submenu-item">
                  <span>FAQ</span>
                  <i class="fa-solid fa-chevron-right"></i>
                </div>

              <ul class="menu-items submenu">
                  <div class="menu-title">
                      <i class="fa-solid fa-chevron-left"></i>
                    Visualizza Tutti i FAQ
                  </div>
                  <li class="item"><a href="{{route('faq.index')}}">Lista FAQ</a></li>
              </ul>
            </li>
            <li class="item">
              <div class="submenu-item">
                <span>Statistiche</span>
                <i class="fa-solid fa-chevron-right"></i>
              </div>

            <ul class="menu-items submenu">
                <div class="menu-title">
                    <i class="fa-solid fa-chevron-left"></i>
                  Visualizza Statistiche
                </div>
                <li class="item"><a href="{{route('admin.numcouponemessi')}}">Numero coupon emessi</a></li>
                <li class="item"><a href="{{route('admin.listautentistats')}}">Statistiche Utente</a></li>
                <li class="item"><a href="#">Statistiche Coupon</a></li>
                <li class="item"><a href="#">Statistiche Promozione</a></li>
            </ul>
          </li>
            <li class="item">
                
                @auth
        <li><a href="" class="item" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endauth 
                </div>
            </li>
            
            
            
      </div>
    
  </nav>

<nav class="navbara">
  <i class="fa-solid fa-bars" id="sidebar-close"></i>
</nav>