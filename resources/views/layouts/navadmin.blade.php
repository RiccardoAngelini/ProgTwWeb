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
                  <li class="item"><a href="#">Lista Aziende</a></li>
                  <li class="item"><a href="#">1212</a></li>
                  <li class="item"><a href="#">1222</a></li>
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
                <li class="item"><a href="#">Lista Utenti</a></li>
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
              <li class="item"><a href="#">Lista Offerte</a></li>
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
            <li class="item"><a href="#">Lista Membri Staff</a></li>
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
                  <li class="item"><a href="{{route('index')}}">Lista FAQ</a></li>
              </ul>
            </li>
            <li class="item">
              <div class="submenu-item">
                <span>Tatistiche</span>
                <i class="fa-solid fa-chevron-right"></i>
              </div>

            <ul class="menu-items submenu">
                <div class="menu-title">
                    <i class="fa-solid fa-chevron-left"></i>
                  Visualizza Statistiche
                </div>
                <li class="item"><a href="#">Numero coupon emessi</a></li>
                <li class="item"><a href="#">Statistiche Utente</a></li>
                <li class="item"><a href="#">Statistiche Coupon</a></li>
                <li class="item"><a href="#">Statistiche Promozione</a></li>
            </ul>
          </li>
            <li class="item">
                <div class="submenu-item">
                  <span> <a href="#">Log Out</a></span>
                </div>
            </li>
            <div class="submenu-item">
                <li><span> <a href="{{route('chisiamo')}}">Chi siamo</a></span></li>
            </div>
            <div class="submenu-item">
                <li><span> <a href="{{route('dovesiamo')}}">Dove siamo</a></span></li>
            </div>
            <div class="submenu-item">
                <li><span> <a href="{{route('contatti')}}">Contatti</a></span></li>
            </div>
            
            
      </div>
    
  </nav>

<nav class="navbara">
  <i class="fa-solid fa-bars" id="sidebar-close"></i>
</nav>