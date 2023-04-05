<?php
    function create_user($login, $password)
    {
        file_put_contents("/var/www/html/users/".$login.$password);
    }

    function verif_login($login)
    {
        # USERNAME NOT EMPTY
        if($login=="")
        {
            echo "You did not enter a username.";
            return 1;
        }

        # USERNAME NOT TOO SHORT
        if(strlen($login)<4)
        {
            echo "Username is too short. It must contain at least 4 alphabetic caracters.";
            return 2;
        }

        # USERNAME NOT TOO LONG
        if(strlen($login)>12)
        {
            echo "Username is too long. Maximum 12 caracters.";
            return 3;
        }

        # DOES USERNAME HAS SPECIAL CARACTERS?
        $i=0;
        $spec=0;
        $array_spec_caracters=array('^','(',')','"','-','_','{','}','[',']',',','|','¨','£','$','¤','%','*','/','-','+','!','§','/',':',';','?','`','~','&','#',"'");
        while($i < strlen($login) && $spec == 0)
        {
            if((in_array($login[$i],$array_spec_caracters) == true))
            {
                $spec=1;
                echo "Special caracters not allowed in username.";
                return 4;
            }
            $i++;
        }
        if($i>=strlen($login))
        return true;
    }

    function verif_pwd($password)
    {
        # PASSWORD NOT EMPTY
        if($password=="")
        {
            echo "You did not enter a password.";
            return 5;
        }
            
        # PASSWORD NOT TOO SHORT
        if(strlen($password)<8)
        {
            echo "Password too short, it must contains at least 8 valid caracters.";
            return 6;
        }

        # PASSWORD NOT TOO LONG
        if(strlen($password)>28)
        {
            echo "Password too long, it must contains 28 caracters at most.";
            return 6;
        }

        # DOES PASSWORD HAS UNAUTHORIZED SPECIAL CARACTERS?
        $i=0;
        $unauthorizedSpecCaracter=0;
        $array_spec_caracters=array(^,'(',')','"',\,'{','}','[',']','|',¨,¤,%,/,?,'#');
        while($i < strlen($password) && $unauthorizedSpecC == 0)
        {
            if((in_array($password[$i],$array_spec_caracters) == true))
            {
                $unauthorizedSpecCaracter=$password[i];
                echo "Your password contains $unauthorizedSpecCaracter which is an unauthorized special caracter. Please try another password.";
                return 7;
            }
        }
    }
    create_user("krish", "brown");
?>
