<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Login</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap_accueil.css" rel="stylesheet" media="screen">
</head>


<body>
  <div class="col-md-3 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">Connexion</div>
      <form role="form" method="post" action="register.php">
        <form class="form-signin" role="form">
          <div class="form-group">
            <div class="form-group">
              <label for="email">Métier:</label>
              <select name="metier">
                <option value="Directeur">Directeur</option>
                <option value="Medecin">Medecin</option>
                <option value="Infirmier">Infirmier</option>
                <option value="Hote accueil">Hote accueil</option>
              </select>
            </div>
            <div class="form-group">
              <label for="email">Login:</label>
              <input type="login" class="form-control" id="login" name="login">
            </div>
            <div class="form-group">
              <label for="pwd">Mot de passe:</label>
              <input type="password" class="form-control" id="pwd">
            </div>
            <div class="checkbox">
              <label><input type="checkbox">Remember me</label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </form>
      </div>
    </div>
</body>
</html>