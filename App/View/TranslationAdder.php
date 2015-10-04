<div class="row">
    <form class="col s12" action="" method="post">
      <div class="row">
        <div class="input-field col l2">
          <textarea id="pseudoCode" class="materialize-textarea" name="pseudoCode" required></textarea>
          <label for="pseudoCode">PseudoCode</label>
        </div>
        <div class="input-field col l2">
          <textarea id="c" class="materialize-textarea" name="c" required></textarea>
          <label for="C">C</label>
        </div>
        <div class="input-field col l2">
          <textarea id="php" class="materialize-textarea" name="php" required></textarea>
          <label for="php">Php</label>
        </div>
        <div class="input-field col l2">
          <textarea id="javascript" class="materialize-textarea" name="javascript" required></textarea>
          <label for="javascript">Javascript</label>
        </div>
        <div class="input-field col l2">
          <textarea id="java" class="materialize-textarea" name="java" required></textarea>
          <label for="java">Java</label>
        </div>
        <div class="input-field col l2">
          <textarea id="python" class="materialize-textarea" name="python" required></textarea>
          <label for="python">Python</label>
        </div>
      </div>
        
    
  <button class="btn waves-effect waves-light" type="submit" name="action">Enregistrer
    <i class="material-icons right">save</i>
  </button>
        
    </form>
  </div>


<?php
    if(isset($_POST['action'])) {
        echo 'Envoi !';
        
       $ownerId = 1;
       $pseudoCode = htmlentities($_POST['pseudoCode']);
       
       \Ptut\App\Model\LayoutCollection::add($ownerId, $pseudoCode);
       $layoutId = Ptut\App\Model\Connection::getConnection()->lastInsertId();
        
       $c = $_POST['c'];
       $php = $_POST['php'];
       $javascript = $_POST['javascript'];
       $java = $_POST['java'];
       $python = $_POST['python'];
       
       \Ptut\App\Model\TranslationCollection::add($layoutId, 'c', $c);
       \Ptut\App\Model\TranslationCollection::add($layoutId, 'php', $php);
       \Ptut\App\Model\TranslationCollection::add($layoutId, 'javascript', $javascript);
       \Ptut\App\Model\TranslationCollection::add($layoutId, 'java', $java);
       \Ptut\App\Model\TranslationCollection::add($layoutId, 'python', $python);
        
        
        
    }
?>