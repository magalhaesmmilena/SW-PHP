    <?php
    
        $peso = $_post['Peso'];
        $altura = $_post['Altura'];
        
        $imc = $peso / ($altura * $altura);

        if ($imc <= 20)
        {
          echo "abaixo do peso"
        }
        if (imc > 20 && imc <= 25)
        {
            echo "peso normal";
        }
        if ($imc > 25)
        {
            echo "Acima do peso";
        }

        echo "<BR> <BR> O IMC = "  round($imc,2);
    ?>

    </body>
</html>