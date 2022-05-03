
<style>
a h2{
    color:#d500aa ;
    background-color: #a38e9f;
    font-size: 1.6rem;
    margin: 10px auto;
    width:fit-content;
    padding: 15px;
    border-radius: 200px;
    font-family: monospace;  
    box-shadow: 0px 5px 15px 0px rgba(0, 0, 0, 0.6);
    font-weight: bold;
}

a span:hover{
    color: #e1ff00;
}



.nav-link{
    font-weight: bold;
}
span{
    font-family: monospace;
   font-size:1.5rem ;
    opacity: 0.9;
    color: #a38e9f;
    -webkit-text-stroke-color: rgb(229, 19, 19);
    border: 1px;
    font-weight: bold;
}
    </style>

<nav class="navbar navbar-expand-lg navbar-light bg-dark ">
    <a class="navbar-brand" href="/ams/home.php">
      <h2>AMS</h2>
    </a>&nbsp;
    <a class="navbar-brand stt" href="https://chat.whatsapp.com/LGdqqVW4gb24bjC29cmalr" target="_blank">
    <span style="-webkit-text-stroke-width: 1.0px;
    -webkit-text-stroke-color: rgb(37 ,211 ,102);color: #25D366;">
    <i class="fa-brands fa-whatsapp"></i>
              </span><span >Join WhatsApp</span>
    </a>
    <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <div class="d-flex ">
        <ul class="navbar-nav  ">

          <li class="nav-item navbar-brand active mr-4">
            <a class="nav-link" href="/ams/home.php"><span style=" color: red;">
                <i class="fa-solid fa-school fa-l "> </i>
              </span>
              <span>Home</span> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item navbar-brand active mr-4">
            <a class="nav-link" href="/ams/nav/gallery.php"><span style=" color: green;">
                <i class="fa-solid fa-photo-film fa-l"></i>
              </span><span>Gallery</span></a>
          </li>
          <li class="nav-item navbar-brand active mr-4">
            <a class="nav-link" href="/ams/nav/about.php"><span style=" color: white;">
                <i class="fa-solid fa-circle-info"></i>
              </span><span>About</span></a>
          </li>
          <?php if(!isset($_SESSION['id'])): ?>
          <li class="nav-item navbar-brand active mr-4"><a class="nav-link js-scroll-trigger" href="/ams/index.php"
              id="login"><span style=" color: cyan;">
                <i class="fa-solid fa-user fa-l"></i>
              </span><span>Login</span></a></li>
          <?php else: ?>
          <li>
            <div class="nav-item navbar-brand  active dropdown" style="margin-right: 120px;">
              <a class="nav-link dropdown-toggle " style="display:inline-block; " href="/ams/profile/profile.php" id="navbarDropdown"
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span style=" color: cyan;">
                  <i class="fa-solid fa-user fa-l"></i>
                </span> <?php echo  "<span>" . $_SESSION['name'] ." </span>"  ?>
              </a>


              <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/ams/profile/profile.php"><span class="dp">Profile</span></a>
                <a class="dropdown-item" href="/ams/profile/settings.php"><span class="dp">Settings</span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/ams/Database/logout.php"><span class="dp">Logout</span></a>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <?php endif; ?>
    </div>

    <div><a class="navbar-brand enn" style="display: none;" href="https://chat.whatsapp.com/LGdqqVW4gb24bjC29cmalr" target="_blank">
    <span style="-webkit-text-stroke-width: 1.0px;
    -webkit-text-stroke-color: rgb(37 ,211 ,102);color: #25D366;">
    <i class="fa-brands fa-whatsapp"></i>
              </span><span >Join WhatsApp</span>
      
    </a>
    </div>
  </nav>