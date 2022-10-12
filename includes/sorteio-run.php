<?php
    if (isset ($_POST["sorteio"]))
    {
        $nomePadrao = "Sua Sorte"; // Nome padrão caso o usuário não digite um nome.
        $qtdPadrao = 1;            // Quantidade padrão caso o usuário não digite uma Quantidade.
        $minPadrao = 1;            // Valor minimo padrão caso o usuário não digite um valor minimo.
        $maxPadrao = 100;          // Valor minimo padrão caso o usuário não digite um valor minimo.

        if (isset ( $_POST["name"]) && !empty ( $_POST["name"]))
        {
            // Se o usuário digitou o nome do sorteio
            $Sortear = new Sorteio($_POST["name"]);

        } else
        {
            // Se o usuário não digitou o nome do sorteio o nome padrão será aplicado
            $Sortear = new Sorteio($nomePadrao);

        }
        
        if (isset ( $_POST["roll"]) && !empty ( $_POST["roll"]))
        {
            // Se o usuário digitou a quantidades de numeros escolhidos neste sorteio
            $Sortear->setRoll($_POST["roll"]);
            
        } else
        {
            // Se o usuário não digitou a quantidades de numeros escolhidos neste sorteio o valor padrão será aplicado
            $Sortear->setRoll($qtdPadrao);
        }

        
        if ( isset ( $_POST["nMin"]) && !empty ( $_POST["nMin"]))
        {
            // Se o usuário digitou a valor minimo escolhido neste sorteio 
            $Sortear->setNMin($_POST["nMin"]);
        }else
        {
            // Se o usuário não digitou a valor minimo escolhido neste sorteio o valor padrão será aplicado
            $Sortear->setNMin($minPadrao);
            
        }
        
        if ( isset ( $_POST["nMax"]) && !empty ( $_POST["nMax"]))
        {
            // Se o usuário digitou a valor maximo escolhido neste sorteio 
            $Sortear->setNMin($_POST["nMax"]);
        }else
        {
            // Se o usuário não digitou a valor maximo escolhido neste sorteio o valor padrão será aplicado
            $Sortear->setNMin($maxPadrao);
            
        }

        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');


        $Sortear->setDate(date('d / m / Y H:i:s '));

        $result = [];
        $check = [];
        $i = 0; // contador início
        while ($i < $Sortear->getRoll()) {

            
            
            $n1 = false;
            while (!$n1)
            {
                $numero = rand($Sortear->getNMin(), $Sortear->getNMax());
                

                if (in_array($numero, $check))
                {
                    //
                    
                    
                } else 
                {
                    $i++;
                    $sort = "<span class='col-sm-2 mx-auto bg-sorteios bg-white h4'>" . $numero . "</span>";
                    array_push($result, $sort);
                    array_push($check, $numero);
                    $n1 = true;

                }
            }
            
            if ( $i < $Sortear->getRoll() )
            {
                $n2 = false;
                while (!$n2)
                {
                    $numero = rand($Sortear->getNMin(), $Sortear->getNMax());
                    if (in_array($numero, $check, true))
                    {
                        //
                        
                        
                    } else 
                    {
                        $i++;
                        $sort = "<span class='col-sm-2 mx-auto bg-sorteios bg-warning h4'>" . $numero . "</span>";
                        array_push($result, $sort);
                        array_push($check, $numero);

                        $n2 = true;

                    }
                }

            }

            
        }
        

        

        


    }