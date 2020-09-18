2. Implemente uma biblioteca de conversão de unidades de comprimento através de classe com
métodos estáticos. Essa classe deve ter métodos para conversão de polegadas para
centímetros (1 pol = 2.54 cm ); de pés para centímetros (1 pé = 30.48 cm) e de milhas para
quilômetros (1 milha = 1.609 metros).

<?php

class Conversao
{
    public static function converterPolegadasCentimetros($polegadas) {        
        return $polegadas * 2.54;
    }

    public static function converterPesCentimetros($pes) {
        return $pes * 30.48;
    }

    public static function converterMilhasQuilometros($milhas) {
        return $milhas * 1.609;
    }
}

echo Conversao::converterPolegadasCentimetros(10) . ' Centimetros' . PHP_EOL;
echo Conversao::converterPesCentimetros(10) . ' Centimetros' . PHP_EOL;
echo Conversao::converterMilhasQuilometros(10) . ' Quilometros';