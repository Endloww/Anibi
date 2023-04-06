
<hr>
<br />

<?php /*
for ($i = 0; $i < count($uneExpo); $i++) {

    $lesPhotos = getPhotosByIdE($uneExpo[$i]['idE']);
    */
    ?>

    

<div class="row mx-auto">
  <div class="col-md-3 mb-3">
    <div class="card">
      <img src="./image/pompoko.jpg" class="card-img-top img-fluid" alt="..." style="width: 500px; height: 500px;">

      <!--
        ???
        <img src="photos/ < ?= // $lesPhotos[1]["cheminP"] ?>" class="card-img-top img-fluid" alt="..." style="width: 500px; height: 500px;"> 
      -->
        <div class="card-body">
          <h5 class="card-title"><?= $uneExpo[0]["nomExpo"] ?></h5>
            <p class="card-text"><?= $uneExpo[0]["descrE"] ?></p><center><a class="btn btn-success" href="#" role="button">Plus d'infos</a></center>
      </div>
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <div class="card">
      <img src="./image/james.jpg" class="card-img-top img-fluid" alt="..." style="width: 500px; height: 500px;">
      <div class="card-body">
        <h5 class="card-title"><?= $uneExpo[1]["nomExpo"] ?></h5>
        <p class="card-text"><?= $uneExpo[1]["descrE"] ?></p> <center><a class="btn btn-success" href="#" role="button">Plus d'infos</a></center>
      </div>
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <div class="card">
      <img src="./image/manchair.jpg" class="card-img-top img-fluid" alt="..." style="width: 500px; height: 500px;">
      <div class="card-body">
      <h5 class="card-title"><?= $uneExpo[2]["nomExpo"] ?></h5>
      <p class="card-text"><?= $uneExpo[2]["descrE"] ?></p> <center><a class="btn btn-success" href="#" role="button">Plus d'infos</a></center>
      </div>
    </div>
  </div>
  <div class="col-md-3 mb-">
    <div class="card">
      <img src="./image/perdumoncorps.jpg" class="card-img-top img-fluid" alt="..." style="width: 500px; height: 500px;">
      <div class="card-body">
      <h5 class="card-title"><?= $uneExpo[3]["nomExpo"] ?></h5>
      <p class="card-text"><?= $uneExpo[3]["descrE"] ?></p> <center><a class="btn btn-success" href="#" role="button">Plus d'infos</a></center>
      </div>
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <div class="card">
      <img src="./image/lullaby.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title"><?= $uneExpo[4]["nomExpo"] ?></h5>
      <p class="card-text"><?= $uneExpo[4]["descrE"] ?></p> <center><a class="btn btn-success" href="#" role="button">Plus d'infos</a></center>
      </div>
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <div class="card">
      <img src="./image/demonargile.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title"><?= $uneExpo[5]["nomExpo"] ?></h5>
      <p class="card-text"><?= $uneExpo[5]["descrE"] ?></p> <center><a class="btn btn-success" href="#" role="button">Plus d'infos</a></center>
      </div>
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <div class="card">
      <img src="./image/maisondesegarees.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title"><?= $uneExpo[6]["nomExpo"] ?></h5>
        <p class="card-text"><?= $uneExpo[6]["descrE"] ?></p> <center><a class="btn btn-success" href="#" role="button">Plus d'infos</a></center>
      </div>
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <div class="card">
      <img src="./image/plethore.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title"><?= $uneExpo[7]["nomExpo"] ?></h5>
        <p class="card-text"><?= $uneExpo[7]["descrE"] ?></p> <center><a class="btn btn-success" href="#" role="button">Plus d'infos</a></center>
      </div>
    </div>
  </div>
</div>

