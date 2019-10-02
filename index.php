<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form  action="./form.php"  method="post">
    <div>
        <label  for="firstname">Firstname :</label>
        <input  type="text"  id="firstname"  name="firstname" required>
    </div>
    <div>
        <label  for="lastname">Lastname :</label>
        <input  type="text"  id="lastname"  name="lastname" required>
    </div>
    <div>
        <label for="courriel">Email : </label>
        <input type="tel" id="email" name="email" required>
    </div>
    <div>
        <label for="tel">Tel : </label>
        <input type="tel" id="phone" name="tel" required>
    </div>
    <div>
        <label for="sujet">Sujet :</label>
        <select id="sujet" size="1" required>
            <option value="horaires">Les horaires
            <option value="accés">L'accés
            <option value="démarches">Les démarches
            <option value="contacter">Nous contacter
            <option value="Divers">Divers
        </select>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message" required></textarea>
    </div>
    <div  class="button">
        <button  type="submit">Envoyer votre message</button>
    </div>
</form> 
</body>
</html>



 
