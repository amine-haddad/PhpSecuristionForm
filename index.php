<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testFormulaire2</title>
</head>
<body>
    <form  action="thanks.php"  method="POST">
    <div class="php"><?php 
                    if (isset($errors['allField'])){
                        echo $errors['allField'];
                    }
                    ?></div>
        <div>
            <label  for="nom">Nom :</label>
            <input  type="text"  id="nom"  name="user_name" placeholder="John" >
        </div>
        <div class="php"><?php 
                    if (isset($errors['user_name'])){
                        echo $errors['user_name'];
                    }
                    ?></div>
        <div>
            <label  for="prenom">Prenom :</label>
            <input  type="text"  id="prenom"  name="user_prenom" placeholder="Doe">
        </div>

        <div>
            <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email" placeholder="exemple@exemple.com">
        </div>

        <div>
            <label  for="phone">Phone number :</label>
            <input  type="tel"  id="phone"  name="user_phone" placeholder="06.00.00.00.00">
        </div>
            <?php $sujets =['Problème de connexion', 'Problème de mot de passe', 'Problème d\' identifiant', 'Problème de boucle', 'Problème de place']; ?>
        <div>
            <label  for="sujet">Sujet :</label>
            <select  id="sujet"  name="user_sujet">
                <?php foreach($sujets as $sujet){ ?>
                    <option value="<?= strtolower($sujet); ?>">
                        <?= $sujet ?>
                    </option>
                    <?php } ?>
            </select>
        </div>

        <div>
            <label  for="message">Message :</label >
            <textarea  id="message"  name="user_message" placeholder="Your Message!" ></textarea>
        </div>

        <div  class="button">
            <button  type="submit">Envoyer votre message</button>
        </div>
    </form>
    
</body>
</html>
