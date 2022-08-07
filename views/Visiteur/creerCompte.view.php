<h1>Création de compte</h1>
<!--page de canal de valodation methode et action-->
<form method="POST" action="validation_creerCompte">
  <div class="mb-3">
    <label for="login" class="form-label">login</label>
    <input type="text" class="form-control" id="login" name="login" required>
  <div class="mb-3">

    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password"  required>
  </div>

    <label for="mail" class="form-label">mail</label>
    <input type="mail" class="form-control" id="mail" name="mail"  required>
  </div>

    
  <button type="submit" class="btn btn-primary">Créer ! </button>
</form>