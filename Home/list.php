<?php include 'Database/DB_functions.php';?>
<section class="alumini-list">
  <div class="container">
    <h4>Alumni list</h4>
    <div class="d-flex justify-content-end p-2 wb-5">
      <div id="filters" class="btn-group h-50 btn-group-toggle " data-toggle="buttons">
        <button class="btn btn-secondary active" data-filter="*">
          ALL
        </button>
        <button class="btn btn-secondary" data-filter=".teacher">
          TEACHERS </button>
        <button class="btn btn-secondary" data-filter=".student">
          STUDENTS
        </button>
      </div>
    </div>
  </div>
<?php 
  $msg="";
  $css_class="";
  $id=$_SESSION['id'];
  $sql = "SELECT * FROM `profile` WHERE aid=$id";
  $result = $conn->prepare($sql);
  $result->execute();
  $res=$result->get_result();
  $result->close();
  $row = $res->fetch_assoc();
?>
  <div class="container">
    <div class=" row mx-auto my-4">
      <div class="col col-lg-3 col-md-4 col-xs-6 grid-item teacher">
        <div class="card shadow mb-4 p-4">
          <img class="card-img-top mb-3" src="img/project1.png" alt="Card image cap">
          <div class="card-block">
            <h4 style="color: black; font-size: 1.5rem;">Card title</h4>
            <h5 class="ss-s">2006-07</h5>
            <button class="btn btn-outline-dark btn-md"><a href="profile/profile.php">CONNECT</a></button>
            <p class="card-text mt-3">
              This is a longer card with supporting
              text below as a natural lead-in to
              additional content. This content
              is a little bit longer.
            </p>

            <p class="card-text">
              <small class="text-muted">
                #NCS- ALUMINI
              </small>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- <div class="col col-lg-3 col-md-4 col-xs-6 grid-item teacher">
          <div class="card p-4">
            <img class="card-img-top mb-3" src="img/project1.png" alt="Card image cap">
            <div class="card-block">
              <h4 style="color: black; font-size: 1.5rem;">Card title</h4>
              <h5 class="ss-s">2006-07</h5>
              <button class="btn btn-outline-dark btn-md"><a href="profile/profile.php">CONNECT</a></button>
              <p class="card-text mt-3">
                This is a longer card with supporting
                text below as a natural lead-in to
                additional content. This content
                is a little bit longer.
              </p>

              <p class="card-text">
                <small class="text-muted">
                  #NCS- ALUMINI
                </small>
              </p>
            </div>
          </div>
        </div>
        <div class="col col-lg-3 col-md-4 col-xs-6 grid-item student">
          <div class="card p-4">
            <img class="card-img-top mb-3" src="img/project2.png" alt="Card image cap">
            <div class="card-block">
              <h4 style="color: black; font-size: 1.5rem;">Card title</h4>
              <h5 class="ss-s">2006-07</h5>
              <button class="btn btn-outline-dark btn-md"><a href="profile/profile.php">CONNECT</a></button>
              <p class="card-text mt-3">
                This is a longer card with supporting
                text below as a natural lead-in to
                additional content. This content
                is a little bit longer.
              </p>

              <p class="card-text">
                <small class="text-muted">
                  #NCS- ALUMINI
                </small>
              </p>
            </div>
          </div>
        </div>
        <div class="col col-lg-3 col-md-4 col-xs-6 grid-item teacher">
          <div class="card p-4">
            <img class="card-img-top mb-3" src="img/project1.png" alt="Card image cap">
            <div class="card-block">
              <h4 style="color: black; font-size: 1.5rem;">Card title</h4>
              <h5 class="ss-s">2006-07</h5>
              <button class="btn btn-outline-dark btn-md"><a href="profile/profile.php">CONNECT</a></button>
              <p class="card-text mt-3">
                This is a longer card with supporting
                text below as a natural lead-in to
                additional content. This content
                is a little bit longer.
              </p>

              <p class="card-text">
                <small class="text-muted">
                  #NCS- ALUMINI
                </small>
              </p>
            </div>
          </div>
        </div>
        <div class="col col-lg-3 col-md-4 col-xs-6 grid-item teacher">
          <div class="card p-4">
            <img class="card-img-top mb-3" src="img/project1.png" alt="Card image cap">
            <div class="card-block">
              <h4 style="color: black; font-size: 1.5rem;">Card title</h4>
              <h5 class="ss-s">2006-07</h5>
              <button class="btn btn-outline-dark btn-md"><a href="profile/profile.php">CONNECT</a></button>
              <p class="card-text mt-3">
                This is a longer card with supporting
                text below as a natural lead-in to
                additional content. This content
                is a little bit longer.
              </p>

              <p class="card-text">
                <small class="text-muted">
                  #NCS- ALUMINI
                </small>
              </p>
            </div>
          </div>
        </div>
        <div class="col col-lg-3 col-md-4 col-xs-6 grid-item student">
          <div class="card p-4">
            <img class="card-img-top mb-3" src="img/project2.png" alt="Card image cap">
            <div class="card-block">
              <h4 style="color: black; font-size: 1.5rem;">Card title</h4>
              <h5 class="ss-s">2006-07</h5>
              <button class="btn btn-outline-dark btn-md"><a href="profile/profile.php">CONNECT</a></button>
              <p class="card-text mt-3">
                This is a longer card with supporting
                text below as a natural lead-in to
                additional content. This content
                is a little bit longer.
              </p>

              <p class="card-text">
                <small class="text-muted">
                  #NCS- ALUMINI
                </small>
              </p>
            </div>
          </div>
        </div>
        <div class="col col-lg-3 col-md-4 col-xs-6 grid-item student">
          <div class="card p-4">
            <img class="card-img-top mb-3" src="img/project2.png" alt="Card image cap">
            <div class="card-block">
              <h4 style="color: black; font-size: 1.5rem;">Card title</h4>
              <h5 class="ss-s">2006-07</h5>
              <button class="btn btn-outline-dark btn-md"><a href="profile/profile.php">CONNECT</a></button>
              <p class="card-text mt-3">
                This is a longer card with supporting
                text below as a natural lead-in to
                additional content. This content
                is a little bit longer.
              </p>

              <p class="card-text">
                <small class="text-muted">
                  #NCS- ALUMINI
                </small>
              </p>
            </div>
          </div>
        </div> -->