Ecrire une fonction d'enregistrement d'utilisateur en PHP
La fonction prend en paramètre un nom d'utilisateur et un mot de passe
La fonction créé un fichier portant le nom de l'utilisateur avec le mot de passe dans le fichier
Lister les cas possibles d'entrées utilisateur
Ecrire une fonction de test pour chaque entrée possible à la fonction
Chaque fonction de test fait simplement appel à la fonction d'enregistrement avec une entrée différente
La fonction return true si la fonction réagit comme souhaité et false si la fonction ne réagit pas comme souhaité
Ecrire un script capable de lancer toutes les fonctions de test et faire un rapport listant les fonctions et leur résultat tel que :  fonction_test_xx => true ou function_test_xx => false
<?php
    function create_user($login, $password)
    {
        if(verif_login($login)&& verif($password))
        file_put_contents("/var/www/html/users/".$login,$password);
    }

    function verif_login($login)
    {
        # USERNAME NOT EMPTY
        if($login=="")
        {
            printf("You did not enter a username.");
            return 1;
        }

        # USERNAME NOT TOO SHORT
        if(strlen($login)<4)
        {
            printf("Username is too short. It must contain at least 4 alphabetic caracters.");
            return 2;
        }

        # USERNAME NOT TOO LONG
        if(strlen($login)>12)
        {
            printf("Username is too long. Maximum 12 caracters.");
            return 3;
        }

        # DOES USERNAME HAS SPECIAL CARACTERS?
        $i=0;
        $spec=0;
        $array_spec_caracters=array('^','(',')','"','-','_','{','}','[',']',',','|','¨','£','$','¤','%','*','/','-','+','!','§','/',':',';','?','`','~','&','#',"'",'@');
        while($i < strlen($login) && $spec == 0)
        {
            if((in_array($login[$i],$array_spec_caracters) == true))
            {
                $spec=1;
                printf("Special caracters not allowed in username.");
                return 4;
            }
            $i++;
        }
        
        # DOES USER EXIST?

        if(file_exist("/var/www/html/users/".$login))
        {
            printf("Username already used");
            return 6;
        }
        else
            return 0;
        
    }

    function verif_pwd($password)
    {
        # PASSWORD NOT EMPTY
        if($password=="")
        {
            printf("You did not enter a password.");
            return 1;
        }
            
        # PASSWORD NOT TOO SHORT
        if(strlen($password)<8)
        {
            printf("Password too short, it must contains at least 8 valid caracters.");
            return 2;
        }

        # PASSWORD NOT TOO LONG
        if(strlen($password)>26)
        {
            printf("Password too long, it must contains 26 caracters at most.");
            return 3;
        }

        # DOES PASSWORD HAS UNAUTHORIZED SPECIAL CARACTERS?
        $i=0;
        $unauthorizedSpecCaracter=0;
        $array_spec_caracters=array('^','(',')','"','\\','{','}','[',']','|','¨','¤','%','/','?','#');
        while($i < strlen($password) && $unauthorizedSpecC == 0)
        {
            if((in_array($password[$i],$array_spec_caracters) == true))
            {
                $unauthorizedSpecCaracter=$password[i];
                printf("Your password contains $unauthorizedSpecCaracter which is an unauthorized special caracter. Please try another password.");
                return 4;
            }
        }

        # PASSWORD NOT STRONG ENOUGH
        $number=0;
        $speC=0;
        $i;
        while($i < strlen($password) && ($number==0 && $speC=0))
        {
            $i++;
            if(in_array($password[$i],array('1','2','3','4','5','6','7','8','9')))
                $number=1;
            if(in_array($password[$i],array('^','(',')','"','-','_','{','}','[',']',',','|','¨','£','$','¤','%','*','-','+','!','§','/',':',';','?','`','~','&','#',"'")));
                $speC=1;
        }
        if($i>=strlen($password))
            return 0;
        else
            return 5;
    }
    create_user("krish", "brown");
?>