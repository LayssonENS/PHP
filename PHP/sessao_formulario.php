<?php
session_start();
?>
<html>

<head>
    <title> Formulario - Sessao </title>
</head>

<body>
    <hr>
    <form method="POST">
        <table border="0">
            <tr>
                <td> Nome </td>
                <td> <input type="text" name="nome"> </td>
            </tr>
            <tr>
                <td> Idade </td>
                <td> <input type="text" name="idade"> </td>
            </tr>
            <tr>
                <td> telefone </td>
                <td> <input type="text" name="telefone"></td>
            </tr>
            <tr>
                <td> Endereco </td>
                <td> <textarea name="endereco" rows="4"></textarea></td>
            </tr>
            <tr>
                <td> <input type="submit" value="Enviar"></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST["nome"])) {
        $_SESSION["cadastro"][] = $_POST;
    }
    if (count($_SESSION["cadastro"])) {

        echo "<table border=\"0\">";

        foreach ($_SESSION["cadastro"] as $pessoa) {
            echo "<tr>";
            foreach ($pessoa as $atr => $val) {
                echo "<td> $atr:  </td>";
                echo "<td> $val </td>";
                echo "<td>   </td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    }
    // print_r($_SESSION["cadastro"]);
    ?>


    <hr>
</body>

</html> 