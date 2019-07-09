 <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('images/backend_images/sidebar-1.jpg')}}">
      <div class="logo">
        <a href="{{route('admin.dashboard')}}" class="simple-text logo-normal">
        <img src="{{asset('images/logo.png')}}" alt="">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
          <a class="nav-link" href="products">
              <i class="material-icons">add</i>
              <p>Raffles</p>
            </a>
          </li>
          <li class="nav-item ">
          <a class="nav-link" href="{{route('users-list')}}">
              <i class="material-icons">person</i>
              <p>Users List</p>
            </a>
          </li>
          <li class="nav-item ">
          <a class="nav-link" href="{{route('subscribers')}}">
              <i class="material-icons">content_paste</i>
              <p>Subscribers List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">
              <i class="material-icons">library_books</i>
              <p>Typography</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          
          
        </ul>
      </div>
    </div>