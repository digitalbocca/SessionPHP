<?php

/**
 * Arquivo base.php
 * 
 * O arquivo enviado a comunidade.
 *
 * @author Gabriel Bertola Bocca <gabriel at estudiodigitalbocca.com.br>
 */

?>

    <html>
            <head>
        <script type="text/javascript" src="js/vendor/jquery-1.11.2.min.js"></script>
        <?
            @ob_start();
            @session_start();
     
            if (!isset($_SESSION['teste'])){
        ?>
                            <script>
                                    $(document).ready(function() {
                                var resultado = "funcionou";
                           $.ajax({
                                                        type: "GET",
                                                        url: "teste.php",
                                                        data: "teste=" + resultado,
                                                        success: function (data) {
                                                    alert("ok");
                                                        }
                                                    });
     
                                return false;
                                    });
                            </script>
        <?
            }
            echo "</head>";
            echo "<body>";
           
            echo "O resultado do teste é: ".$_SESSION['teste'];
            echo "</body>";
            echo "</html>";
        ?>
     
     
     
     
     
     
     
     
    Conteudo de teste.php
     
     
    <?
            $_SESSION['teste'] = $_GET[teste];
    ?>
