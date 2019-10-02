  <?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") 
    
{
    echo 'Erreur : la methode est incorrect';
    exit();
}
$fieldsNames = ['firstname', 'lastname', 'email','tel'];
$hasEmptyField = false;
foreach ($fieldsNames as $fieldName) 
{
    if (empty($_POST[$fieldName]) === true) 
    {
        echo 'Erreur : ' . $fieldName . ' is required. <br> ';
        $hasEmptyField = true;
    }
     
}

if ($hasEmptyField === true) {
exit();
}
if (empty(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#i", $_POST['email']))!== false)
{
echo 'Erreur : invalidate format email.';
exit();
}
header ( 'Location: succes.php');    
?>
