<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Client</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet" media="screen">
  <?php include 'menu.php'; ?>
</head>

<body>



<div class="col-md-5 col-md-offset-3">
<div class="panel panel-default">
<div class="panel-heading">Inscription Client</div>
 <form role="form" method="post" action="register.php">
  <form class="form-inline" role="form">
  <div class="form-group">
    <label for="email">Genre:</label>
    <input type="radio" name="genre" id="homme" value="homme" /> <label for="homme">Monsieur</label>
    <input type="radio" name="genre" id="femme" value="femme" /> <label for="femme">Madame</label>
  <div class="form-group">
    <label for="email">Nom:</label>
    <input type="text" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="email">Prenom:</label>
    <input type="text" class="form-control" id="prenom" name="prenom">
  </div>
  <div class="form-group">
    <label for="email">Date de naissance:</label>
    <input type="text" class="form-control" id="date_naissance" name="date_naissance">
  </div>
  <div class="form-group">
    <label for="email">Adresse email:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="email">Chambre:</label>
    <input type="number" class="form-control" id="number" name="chambre">
  </div>
  <div class="form-group">
    <label for="email">Mutuelle:</label>
    <input type="text" class="form-control" id="prenom" name="mutuelle">
  </div>
  <div class="form-group">
    <label for="email">Nationnalité:</label>
    <input type="text" class="form-control" id="prenom" name="mutuelle">
  </div>
  <div class="form-group">
    <label for="email">Ville:</label>
    <input type="text" class="form-control" id="prenom" name="mutuelle">
  </div>
  <div class="form-group">
    <label for="email">adresse:</label>
    <input type="text" class="form-control" id="prenom" name="mutuelle">
  </div>
  <div class="form-group">
    <label for="email">Code Postal:</label>
    <input type="number" class="form-control" id="prenom" name="code_postal">
  </div>
  <div class="form-group">
    <label for="email">Nom proche:</label>
    <input type="text" class="form-control" id="prenom" name="mutuelle">
  </div>
  <div class="form-group">
    <label for="email">prenom proche:</label>
    <input type="text" class="form-control" id="prenom" name="mutuelle">
  </div>
  <div class="form-group">
    <label for="email">Telephone proche:</label>
    <input type="number" class="form-control" id="prenom" name="tel_prochee">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</form>
</div>
</div>





</body>
</html>