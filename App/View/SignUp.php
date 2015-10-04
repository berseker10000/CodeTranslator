

<div class="container">
<h3>Inscription</h3>
  <div class="row">
    <form class="col s12">
        <div class="row">
            <div class="input-field col s12 l3">
              <input id="name" type="text" class="validate">
              <label for="name" data-error="Adresse mail incorrect" data-success="Adresse mail correcte" class="active">Identifiant</label>
            </div>
            <div class="input-field col s12 l3">
              <input id="email" type="email" class="validate">
              <label for="email" data-error="Adresse mail incorrect" data-success="Adresse mail correcte" class="active">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 l3">
              <input id="password" type="password" class="validate">
              <label for="password" data-error="Adresse mail incorrect" data-success="Adresse mail correcte" class="active">Mot de passe</label>  
            </div>
            <div class="input-field col s12 l3">
                  <input id="password" type="password" class="validate">
                  <label for="password" data-error="Adresse mail incorrect" data-success="Adresse mail correcte" class="active">Confirmation mot de passe</label>  
            </div>
        </div>     
        <div class="row">
            <div class="file-field input-field">
                <div class="btn">
                    <span>Avatar</span>
                    <input type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
        </div>
        
        <button class="btn waves-effect waves-light" type="submit" name="action">Envoyer
            <i class="material-icons right">send</i>
        </button>
        
    </form>
  </div>
        
</div>