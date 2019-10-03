<?php
$firstNameError = '';
$firstName = '';
$lastNameError = '';
$lastName = '';
$emailError = '';
$email = '';
$telError = '';
$tel = '';
$textAreaError = '';
$textArea = '';

if (isset($_POST['isFormSubmitted'])) {
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $textArea = $_POST['textArea'];
    if (empty($_POST['firstname']) === true)
    {
        $firstNameError = '<br/>Erreur: le champ ne peut être vide';
    }
    if (empty($_POST['lastname']) === true)
    {
        $lastNameError = '<br/>Erreur: le champ ne peut être vide';
    }
    if (empty($_POST['email']) === true)
    {
        $emailError = '<br/>Erreur: le champ ne peut être vide';
    }
    if (empty($_POST['tel']) === true)
    {
        $telError = '<br/>Erreur: le champ ne peut être vide et doit contenir 10 caractères';
    }
    if (empty($_POST['textArea']) === true)
    {
        $textAreaError = '<br/>Erreur: le champ ne peut être vide';
    }
    if (empty($firstName) === false && empty($lastName) === false && empty($email) === false && empty($tel) === false && empty($textArea) === false)
    {
        header('Location:succes.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="index.php">
        <p>
            <label for="firstname">Prénom*</label>
            <input
                type="text"
                id="firstname"
                name="firstname"
                value = "<?php echo $firstName; ?>"
                placeholder="Jean"
            />
            <?php echo $firstNameError; ?>
        </p>
        <p>
            <label for="lastname">Nom de famille*</label>
            <input
                type="text"
                id="lastname"
                name="lastname"
                value = "<?php echo $lastName; ?>"
                placeholder="Dupond"
            />
            <?php echo $lastNameError; ?>
        </p>
        <p>
            <label for="email">Adresse de messagerie*</label>
            <input
                type="email"
                id="email"
                name="email"
                value="<?php echo $email; ?>"
                pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}"
                placeholder="exemple@domaine.com"

            />
            <?php echo $emailError; ?>
        </p>
        <p>
            <label for="tel">Téléphone*</label>
            <input
                type="tel"
                id="tel"
                name="tel"
                value="<?php echo $tel; ?>"
                minlength="10"
                maxlength="10"
                pattern="[0-9]{10}"
                placeholder="0123456789"
            />
            <?php echo $telError; ?>
        </p>
        <p>
            <label for="object"></label>
            <select

                    name="object"
                    size="1"
                    id="Sujet"
                    required >
                        <option>Manger des anes</option>
                        <option>j'aime le boeuf</option>
                        <option>il y a quelqun ?</option>
                        <option>rira bien qui rira</option>
            </select>
        </p>

        <p>
            <label  for="textArea">Message : *</label>
            <textarea id="textArea" name="textArea" value = '<?php echo $textArea; ?>' placeholder="Ecrivez votre message ici"></textarea>
            <?php echo $textAreaError; ?>
        </p>
        <button type="submit" name="isFormSubmitted">
            Valider
        </button>
    </form>

</body>
</html>
