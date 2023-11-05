<?php
    function recupera()  {
        $xnumero1 = $_REQUEST['xnumero1'];
        $xnumero2 = $_REQUEST['xnumero2'];
        if ($xnumero2 > ($xnumero1 + 19)) {
            echo "numero entre 1 a 20";
            exit(1);
        }
        return[$xnumero1, $xnumero2];
    }
    $valores = recupera();
    $xnumero1 = $valores[0];
    $xnumero2 = $valores[1];
?>