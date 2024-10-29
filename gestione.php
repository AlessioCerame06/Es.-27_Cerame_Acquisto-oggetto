<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ACQUISTI</title>
    </head>
    <body>
        <?php

            function stampaTabella ($nome, $costo, $quantita, $stato, $metodoDiPagamento) {
                echo "<ul>";
                if ($stato) {
                    $strStato = "<li>Stato: usato</li>";
                    $costoFinale = $costo - ($costo/100) * 20;
                } else {
                    $strStato = "<li>Stato: non usato</li>";
                }
                if ($metodoDiPagamento == "contanti") {
                    $strMetodoDiPagamento = "<li>Metodo di pagamento: contanti</li>";
                } else if ($metodoDiPagamento == "buonoDigitale") {
                    $strMetodoDiPagamento = "<li>Metodo di pagamento: buono digitale</li>";
                } else {
                    $strMetodoDiPagamento = "<li>Metodo di pagamento: carta</li>";
                    $costoFinale += 2;
                }
                echo "<li>Nome: $nome</li> <li>Costo iniziale: $costo €</li>";
                echo "<li>Costo finale: $costoFinale</li>";
                echo "<li>Quantità: $quantita</li>";
                echo $strStato;
                echo $strMetodoDiPagamento;
                echo "</ul>";
            }

            $nome = $_POST["nome"];
            $costo = $_POST["costo"];
            $quantita = $_POST["quantita"];
            if (isset($_POST["stato"])) { 
                $stato = true; //true = usato
            } else { 
                $stato = false; //false = non usato
            }
            $metodoDiPagamento = $_POST["metodoDiPagamento"];

            stampaTabella ($nome, $costo, $quantita, $stato, $metodoDiPagamento);
        ?>
    </body>
</html>