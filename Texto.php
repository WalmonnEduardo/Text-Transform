<?php
class Texto
{
    public static function alinhar(array $lista)
    {
        $listaNova = array();
        $listaSemAcentos = array();
        foreach($lista as $l)
        {
            $listaSemAcentos[] = self::removerAcentos($l);
        }
        $maior = self::maiorTexto($listaSemAcentos);
        $maior += 1;
        foreach($lista as $l)
        {
            $add = self::verificarAcentos($l);
            $n = $maior+$add;
            for($i = 0;strlen($l) < $n;$i++)
            {
                $l .= " "; 
            }
            $listaNova[] = $l;
        }
        return $listaNova;
    }
    public static function maiorTexto(array $lista)
    {
        $maior = 0;
        foreach($lista as $l)
        {
            if(strlen($l) > $maior)
            {
                $maior = strlen($l);
            }
        }
        return $maior;
    }
    public static  function verificarAcentos($texto)
    {
        $add = 0;
        $acentos = array(
            'Á','À','Â','Ã','Ä','Å',
            'É','È','Ê','Ë',
            'Í','Ì','Î','Ï',
            'Ó','Ò','Ô','Õ','Ö',
            'Ú','Ù','Û','Ü',
            'Ç','Ñ',
            'á','à','â','ã','ä','å',
            'é','è','ê','ë',
            'í','ì','î','ï',
            'ó','ò','ô','õ','ö',
            'ú','ù','û','ü',
            'ç','ñ'
        );
        for($i = 0;$i < strlen($texto) - 1;$i++)
        {
            foreach($acentos as $a)
            {
                if(substr($texto,$i,2) == $a)
                {
                    $add++;
                }
            }
        }
        return $add;

    }
    public static function removerAcentos($texto)
    {
        $acentos = array(
            'Á' => 'A', 'À' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A',
            'É' => 'E', 'È' => 'E', 'Ê' => 'E', 'Ë' => 'E',
            'Í' => 'I', 'Ì' => 'I', 'Î' => 'I', 'Ï' => 'I',
            'Ó' => 'O', 'Ò' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O',
            'Ú' => 'U', 'Ù' => 'U', 'Û' => 'U', 'Ü' => 'U',
            'Ç' => 'C', 'Ñ' => 'N',
            'á' => 'a', 'à' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a',
            'é' => 'e', 'è' => 'e', 'ê' => 'e', 'ë' => 'e',
            'í' => 'i', 'ì' => 'i', 'î' => 'i', 'ï' => 'i',
            'ó' => 'o', 'ò' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o',
            'ú' => 'u', 'ù' => 'u', 'û' => 'u', 'ü' => 'u',
            'ç' => 'c', 'ñ' => 'n'
        );
        return strtr($texto, $acentos);
    }
}
?>
