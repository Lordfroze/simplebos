<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SimpleBOS</title>
    <link rel="stylesheet" href="{{asset('simplebos/style.css') }}" />

    <!-- Linking Google Fonts for Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  </head>
  <body>
    <!-- Mobile Sidebar Menu Button -->
    <button class="sidebar-menu-button">
      <span class="material-symbols-rounded">menu</span>
    </button>
    <aside class="sidebar">
      <!-- Sidebar Header -->
      <header class="sidebar-header">
        <a href="#" class="header-logo">
          <img src="{{asset('simplebos/logo.png')}}" alt="logo" />
        </a>
        <button class="sidebar-toggler">
          <span class="material-symbols-rounded">chevron_left</span>
        </button>
      </header>
      <nav class="sidebar-nav">
        <!-- Primary Top Nav -->
        <ul class="nav-list primary-nav">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <span class="material-symbols-rounded">dashboard</span>
              <span class="nav-label">Dashboard</span>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Dashboard</a></li>
            </ul>
           
        <li class="nav-item">
            <a href="#" class="nav-link">
			<span class="material-symbols-rounded">history_edu</span>
              <span class="nav-label">Profil Sekolah</span>
			  </a>
            <ul class="dropdown-menu">
			<li class="nav-item"><a class="nav-link dropdown-title">Profil Sekolah</a></li>
   </ul>
   
   <li class="nav-item">
            <a href="#" class="nav-link">
			<span class="material-symbols-rounded">text_compare</span>
              <span class="nav-label">Input BKU</span>
			  </a>
            <ul class="dropdown-menu">
			<li class="nav-item"><a class="nav-link dropdown-title">Input BKU</a></li>
  
            </ul>
          </li>
          <!-- Dropdown -->
          <li class="nav-item dropdown-container">
            <a href="#" class="nav-link dropdown-toggle">
              <span class="material-symbols-rounded">receipt</span>
              <span class="nav-label">Kwitansi</span>
              <span class="dropdown-icon material-symbols-rounded">keyboard_arrow_down</span>
            </a>
            <!-- Dropdown Menu -->
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Pilih Kwitansi</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">Honorer</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">Indomaret</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">Listrik</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">Pulsa</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">Transportasi</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">Lainnya</a></li>
            </ul>
          </li>
		  <!-- Dropdown -->
          <li class="nav-item dropdown-container">
            <a href="#" class="nav-link dropdown-toggle">
              <span class="material-symbols-rounded">two_wheeler</span>
              <span class="nav-label">S.P.P.D</span>
              <span class="dropdown-icon material-symbols-rounded">keyboard_arrow_down</span>
            </a>
		  <!-- Dropdown Menu -->
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Pilih S.P.P.D</a></li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-link">BKU ARKAS</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">Lapor SPJ</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">Administrasi</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">4 Bulan ARKAS</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">Kecamatan 1</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">Kecamatan 2</a></li>
            </ul>
          </li>
		  
          <li class="nav-item">
            <a href="#" class="nav-link">
              <span class="material-symbols-rounded">checklist_rtl</span>
              <span class="nav-label">Daftar Hadir</span>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Notifications</a></li>
            </ul>
          </li>
		  <!-- Dropdown -->
          <li class="nav-item dropdown-container">
            <a href="#" class="nav-link dropdown-toggle">
              <span class="material-symbols-rounded">manage_history</span>
              <span class="nav-label">Lembur</span>
              <span class="dropdown-icon material-symbols-rounded">keyboard_arrow_down</span>
            </a>
		  <!-- Dropdown Menu -->
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Pilih Lembur</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">1 Orang</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">2 Orang</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">3 Orang</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">4 Orang</a></li>
            </ul>
          </li>
		  <!-- Dropdown -->
          <li class="nav-item dropdown-container">
            <a href="#" class="nav-link dropdown-toggle">
              <span class="material-symbols-rounded">sprint</span>
              <span class="nav-label">Ekstrakurikuler</span>
              <span class="dropdown-icon material-symbols-rounded">keyboard_arrow_down</span>
            </a>
		  <!-- Dropdown Menu -->
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Pilih Eskul</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">Pramuka</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">Drumband</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">T.U.B</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">Olahraga</a></li>
			  <li class="nav-item"><a href="#" class="nav-link dropdown-link">Qosidah</a></li>
            </ul>
          </li>
        </ul>
     <!-- Secondary Bottom Nav -->
        <ul class="nav-list secondary-nav">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <span class="material-symbols-rounded">two_pager</span>
              <span class="nav-label">Batas</span>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Batas</a></li>
            </ul>
          </li>
		  
		  <li class="nav-item">
            <a href="#" class="nav-link">
              <span class="material-symbols-rounded">photo_album</span>
              <span class="nav-label">Cover</span>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Cover</a></li>
            </ul>
          </li>
		  
		  
          <li class="nav-item">
            <a href="#" class="nav-link">
              <span class="material-symbols-rounded">mark_email_unread</span>
              <span class="nav-label">Surat Pengantar</span>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Surat Pengantar</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </aside>
    <!-- Script -->
    <script src="{{asset('simplebos/script.js')}}"></script>
  </body>
</html>