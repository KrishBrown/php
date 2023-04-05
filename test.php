Ecrire une fonction d'enregistrement d'utilisateur en PHP
La fonction prend en paramètre un nom d'utilisateur et un mot de passe
La fonction créé un fichier portant le nom de l'utilisateur avec le mot de passe dans le fichier
Lister les cas possibles d'entrées utilisateur
Ecrire une fonction de test pour chaque entrée possible à la fonction
Chaque fonction de test fait simplement appel à la fonction d'enregistrement avec une entrée différente
La fonction return true si la fonction réagit comme souhaité et false si la fonctio ne réagit pas comme souhaité
Ecrire un script capable de lancer toutes les fonctions de test et faire un rapport listant les fonctions et leur résultat tel que :  fonction_test_xx => true ou function_test_xx => false
<?php
 	function create_user($login, $password)
    {
 		file_put_contents("/var/www/html/users/".$login.$password);
 	}

	function verif_login($login)
	{
        #Blank ?
        if(strlen($login)!=0)
        {
            #Login exists ?
            $users= ls "/var/www/html/users/"
            if((preg_match($login,"/var/www/html/users/") != 0)
            {	
                #Login long enough ?
                if( strlen($login) > 6)
                {
                    #No special caracters ?
                    $i=0;
                    $test=1;
                    $spec=0;
                    $array_spec_caracters=array(^,'(',')','"',-,_,\,'{','}','[',']',',','|',¨,£,$,¤,%,*,/,-,+,!,§,/,:,;,?,'#',~,&);    
                    while($i < strlen($login) && $spec == 0)
                    {
                        
                        if((in_array($login[$i],$array_spec_caracters) == true))
                        {
                            $spec++;
                        }
                        else
                        {
                            $i++;
                        }
                        
                    }
                    if($i >=strlen($login))
                    {
                        return true;
                    }
                    else
                    {
                        return false
                    }
                }
                else
                {
                    echo "Username is too short. 6 letters required.";
                    return false;
                }
            }
            else
            {
                echo "Username already exists. Choose another one";
                return false;
            }
        }
        else
        {
            echo "Username is blank. Please enter a username";
        }
    }

    function verif_pwd($password)
    {
        #Password long enough ?
        if(strlen($password)>11)
        {
            $i=0;
            $array_spec_caracters=array(^,'(',')','"',\,'{','}','[',']','|',¨,¤,%,/,?,'#')
            while($i < strlen($password) && $spec == 0)
            {
                        
                if((in_array($password[$i],$array_spec_caracters) == true))
                {
                    
                }
            }
        }
        else
        {
            return false;
        }
    }

	create_user("krish", "brown");
?>

login 
Non vide
6 letters minimum
Inexistant
Pas de caractères spéciaux