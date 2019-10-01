<form  action="./form.php"  method="pos">
    <div>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="nom"  name="user_name" required>
    </div>
    <div>
        <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email" required>
    </div>
    <div>
        <label for="phone">Tel : </label>
        <input type="tel" id="phone" name="phone" required>
    </div>
    <div>
        <label for="subjet">Sujet</label>
        <select name="nom" size="1">
            <option>Les horaires
            <option>L'accés
            <option>Les démarches
            <option>Nous contacter
            <option>Divers
        </select>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message" required></textarea>
    </div>
    <div  class="button">
        <button  type="submit">Envoyer votre message</button>
    </div>
</form>
