<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>

<div class="container">
  <h2>Create a new profil</h2>
  <p>To make the tabs toggleable, add the data-toggle="tab" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Source</a></li>
    <li><a data-toggle="tab" href="#menu1">Dossiers</a></li>
    <li><a data-toggle="tab" href="#menu2">Traitement de l'image</a></li>
    <li><a data-toggle="tab" href="#menu3">Séparation des Lots</a></li>
    <li><a data-toggle="tab" href="#menu4">Nommage du Lot</a></li>
    <li><a data-toggle="tab" href="#menu5">Séparation des Documents</a></li>
    <li><a data-toggle="tab" href="#menu6">Nommage du Document</a></li>
    <li><a data-toggle="tab" href="#menu7">Destination</a></li>
    <li><a data-toggle="tab" href="#menu8">Résumé</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
          <h3>Spécifiez un nom unique et une source</h3>
          <div class="mb-3 mt-3">
            <label for="email">Nom :</label>
            <input type="text" class="form-control" id="text" placeholder="Projet" name="text">
          </div>
          <div class="mb-3 mt-3">
            <label for="comment">Description :</label>
            <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
          </div>
          <div class="mb-3 mt-3">
            <label for="email">Source :</label>
            <select class="form-select">
              <option>Folders</option>
              <option>Scanners</option>
              <option>Mail</option>
            </select>
          </div>
          <div class="mb-3 mt-3">
            <label for="email">Language :</label>
            <select class="form-select">
              <option>Arabic</option>
              <option>Frensh</option>
              <option>English</option>
            </select>
          </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Spécifiez les paramètres Dossiers</h3>
      <div class="mb-3 mt-3">
        <label for="email">Nom :</label>
        <input type="text" class="form-control" id="text" placeholder="Projet" name="text">
      </div>
      <div class="mb-3 mt-3">
        <label for="comment">Description :</label>
        <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
      </div>
      <div class="mb-3 mt-3">
        <label for="email">Source :</label>
        <select class="form-select">
          <option>Folders</option>
          <option>Scanners</option>
          <option>Mail</option>
        </select>
      </div>
      <div class="mb-3 mt-3">
        <label for="email">Language :</label>
        <select class="form-select">
          <option>Arabic</option>
          <option>Frensh</option>
          <option>English</option>
        </select>
      </div>
    </div>

    <div id="menu2" class="tab-pane fade">
      <h3>Spécifiez les paramètres Dossiers 2</h3>
      <div class="mb-3 mt-3">
        <label for="email">Nom :</label>
        <input type="text" class="form-control" id="text" placeholder="Projet" name="text">
      </div>
      <div class="mb-3 mt-3">
        <label for="comment">Description :</label>
        <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
      </div>
      <div class="mb-3 mt-3">
        <label for="email">Source :</label>
        <select class="form-select">
          <option>Folders</option>
          <option>Scanners</option>
          <option>Mail</option>
        </select>
      </div>
      <div class="mb-3 mt-3">
        <label for="email">Language :</label>
        <select class="form-select">
          <option>Arabic</option>
          <option>Frensh</option>
          <option>English</option>
        </select>
      </div>
    </div>

    <div id="menu3" class="tab-pane fade">
      <h3>Spécifiez les paramètres Dossiers 3</h3>
      <div class="mb-3 mt-3">
        <label for="email">Nom :</label>
        <input type="text" class="form-control" id="text" placeholder="Projet" name="text">
      </div>
      <div class="mb-3 mt-3">
        <label for="comment">Description :</label>
        <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
      </div>
      <div class="mb-3 mt-3">
        <label for="email">Source :</label>
        <select class="form-select">
          <option>Folders</option>
          <option>Scanners</option>
          <option>Mail</option>
        </select>
      </div>
      <div class="mb-3 mt-3">
        <label for="email">Language :</label>
        <select class="form-select">
          <option>Arabic</option>
          <option>Frensh</option>
          <option>English</option>
        </select>
      </div>
    </div>
    
    <div id="menu4" class="tab-pane fade">
      <h3>Spécifiez les paramètres Dossiers 4</h3>
      <div class="mb-3 mt-3">
        <label for="email">Nom :</label>
        <input type="text" class="form-control" id="text" placeholder="Projet" name="text">
      </div>
      <div class="mb-3 mt-3">
        <label for="comment">Description :</label>
        <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
      </div>
      <div class="mb-3 mt-3">
        <label for="email">Source :</label>
        <select class="form-select">
          <option>Folders</option>
          <option>Scanners</option>
          <option>Mail</option>
        </select>
      </div>
      <div class="mb-3 mt-3">
        <label for="email">Language :</label>
        <select class="form-select">
          <option>Arabic</option>
          <option>Frensh</option>
          <option>English</option>
        </select>
      </div>
    </div>
    
    <div id="menu5" class="tab-pane fade">
      <h3>Spécifiez les paramètres Dossiers 5</h3>
      <div class="mb-3 mt-3">
        <label for="email">Nom :</label>
        <input type="text" class="form-control" id="text" placeholder="Projet" name="text">
      </div>
      <div class="mb-3 mt-3">
        <label for="comment">Description :</label>
        <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
      </div>
      <div class="mb-3 mt-3">
        <label for="email">Source :</label>
        <select class="form-select">
          <option>Folders</option>
          <option>Scanners</option>
          <option>Mail</option>
        </select>
      </div>
      <div class="mb-3 mt-3">
        <label for="email">Language :</label>
        <select class="form-select">
          <option>Arabic</option>
          <option>Frensh</option>
          <option>English</option>
        </select>
      </div>
    </div>

    
    <div id="menu6" class="tab-pane fade">
      <h3>Spécifiez les paramètres Dossiers 6</h3>
      <div class="mb-3 mt-3">
        <label for="email">Nom :</label>
        <input type="text" class="form-control" id="text" placeholder="Projet" name="text">
      </div>
      <div class="mb-3 mt-3">
        <label for="comment">Description :</label>
        <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
      </div>
      <div class="mb-3 mt-3">
        <label for="email">Source :</label>
        <select class="form-select">
          <option>Folders</option>
          <option>Scanners</option>
          <option>Mail</option>
        </select>
      </div>
      <div class="mb-3 mt-3">
        <label for="email">Language :</label>
        <select class="form-select">
          <option>Arabic</option>
          <option>Frensh</option>
          <option>English</option>
        </select>
      </div>
    </div>
    
    
    <div id="menu7" class="tab-pane fade">
      <h3>Spécifiez les paramètres Dossiers 7</h3>
      <div class="mb-3 mt-3">
        <label for="email">Nom :</label>
        <input type="text" class="form-control" id="text" placeholder="Projet" name="text">
      </div>
      <div class="mb-3 mt-3">
        <label for="comment">Description :</label>
        <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
      </div>
      <div class="mb-3 mt-3">
        <label for="email">Source :</label>
        <select class="form-select">
          <option>Folders</option>
          <option>Scanners</option>
          <option>Mail</option>
        </select>
      </div>
      <div class="mb-3 mt-3">
        <label for="email">Language :</label>
        <select class="form-select">
          <option>Arabic</option>
          <option>Frensh</option>
          <option>English</option>
        </select>
      </div>
    </div>

    
    <div id="menu8" class="tab-pane fade">
      <h3>Spécifiez les paramètres Dossiers 8</h3>
      <div class="mb-3 mt-3">
        <label for="email">Nom :</label>
        <input type="text" class="form-control" id="text" placeholder="Projet" name="text">
      </div>
      <div class="mb-3 mt-3">
        <label for="comment">Description :</label>
        <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
      </div>
      <div class="mb-3 mt-3">
        <label for="email">Source :</label>
        <select class="form-select">
          <option>Folders</option>
          <option>Scanners</option>
          <option>Mail</option>
        </select>
      </div>
      <div class="mb-3 mt-3">
        <label for="email">Language :</label>
        <select class="form-select">
          <option>Arabic</option>
          <option>Frensh</option>
          <option>English</option>
        </select>
      </div>
    </div>

  </div>
</div>

</body>
</html>