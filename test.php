<?php
    function create_user($login, $password)
    {
        $verif=verif_login($login);
        if($verif!=0)
        {
            return $verif;
        }
        $verif=verif_pwd($password);
        if($verif!=0)
        {
            return $verif;
        }
        file_put_contents("/var/www/html/users/".$login,$password);
        return 0;
    }

    function verif_login($login)
    {
        # USERNAME NOT EMPTY
        if($login=="")
        {
            return 1;
        }

        # USERNAME NOT TOO SHORT
        if(strlen($login)<4)
        {
            return 2;
        }

        # USERNAME NOT TOO LONG
        if(strlen($login)>12)
        {
            return 3;
        }

        # DOES USERNAME HAS SPECIAL CARACTERS?
        $i=0;
        $spec=0;
        $array_spec_caracters=array('^','(',')','"','-','_','{','}','[',']',',','|','¨','£','$','¤','%','*','/','-','+','!','§','/',':',';','?','`','~','&','#',"'",'@');
        while($i<strlen($login) && $spec == 0)
        {
            if((in_array($login[$i],$array_spec_caracters) == true))
            {
                $spec=1;
                return 4;
            }
            $i++;
        }
        
        # DOES USER EXIST?

        if(file_exists("/var/www/html/users/".$login))
        {
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
            return 1;
        }
            
        # PASSWORD NOT TOO SHORT
        if(strlen($password)<8)
        {
            return 2;
        }

        # PASSWORD NOT TOO LONG
        if(strlen($password)>26)
        {
            return 3;
        }

        # DOES PASSWORD HAS UNAUTHORIZED SPECIAL CARACTERS?
        $i=0;
        $unauthorizedSpecCaracter=0;
        $array_spec_caracters=array('^','(',')','"','\\','{','}','[',']','|','¨','¤','%','/','?','#');
        while($i<strlen($password) && $unauthorizedSpecCaracter == 0)
        {
            if((in_array($password[$i],$array_spec_caracters) == true))
            {
                $unauthorizedSpecCaracter=$password[$i];
                return 4;
            }
            $i++;
        }

        # PASSWORD NOT STRONG ENOUGH
        $number=0;
        $speC=0;
        $i=0;
        while($i<strlen($password) && $number==0 && $speC==0)
        {
            $number_array=array('1','2','3','4','5','6','7','8','9','0');
            if(in_array($password[$i],$number_array))
                $number=1;

            $specChar=array('@','$','%','*','.','-','+','_');
            if(in_array($password[$i],$specChar))
                $speC=1;
            $i++;
        }
        printf("i=$i\nspec=$speC\nnumber=$number\n");
        if($i>=strlen($password) && $speC==1 && $number==1)
            return 0;
        else
            return 5;
    }
    $r1=create_user("","p@ssword1");
    create_user("krish", "brown");
?>