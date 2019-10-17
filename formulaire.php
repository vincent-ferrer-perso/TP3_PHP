<?php
    echo '<form method="POST" action="data-processing.php">
                <label for="Id">Identifiant : </label><br>
                <input type="text" id="Id" required placeholder="Ex: foufou32" name="id" ><br>
                
                <label>Civilité : </label><br>
                <label for="man">Homme<input id="man" type="radio" value="Homme" name="civilite"></label>
                <label  for="woman">Femme<input id="woman" type="radio" value="Femme" name="civilite"></label><br>
                
    
                <label for="mail">Mail : </label><br>
                <input type="text" id="mail" name="e-mail" required placeholder="Ex: toutou@mail.fr"><br>


               
                <label for="mdp">Mot de passe :</label><br>
                <input  type="password" id="mdp" name="mdp"><br>

                <label for="mdpV">Vérification de mot de passe :</label><br>
                <input  type="password" id="mdpV" name="mdpV"><br>
                
                
                <label for="country">Country</label>     
        
                    <select id="country" name="pays" class="form-control">
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Åland Islands">Åland Islands</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antarctica">Antarctica</option>
                        <option value="France">France</option>
                     </select>
                
                
                
                

                    
                <label for=soumettre><input id="soumettre" type="submit" name="action" value="mailer"></label>
            </form>';