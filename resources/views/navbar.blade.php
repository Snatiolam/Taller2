<nav role="navigation" class="navbar">
    <div class="nav-header">
      <div class="nav-brand">
        <!-- Logo -->
        <a href="#"><img src="{{ asset('images/logo.jpg') }}" alt="Logo"></a>

        <!-- Title -->
        <!-- <div class="nav-title"></div> -->
      </div>
    </div>

    <input type="checkbox" id="toggler">
    <label for="toggler" class="toggle-menu-show"><i class="fas fa-bars"></i></label>

    <div class="navigation">
      <ul class="nav-links">
        <li class="nav-item"><a href=" {{ url('/home')}}" class="nav-link">Home</a></li>
        <li class="nav-item"><a href=" {{ url('/login') }}" class="nav-link">Login</a></li>
        <li class="nav-item"><a href=" {{ url('/register')}}" class="nav-link">Register</a></li>
        <li class="nav-item"><a href=" {{ url('/shop')}}" class="nav-link">Shop</a></li>
        <label for="toggler" class="toggle-menu-hide"><i class="fas fa-times"></i></label>
      </ul>
    </div>
  </nav>
