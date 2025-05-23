<?php
/**
 * Script de Funciones Matemáticas y de Texto
 *
 * @author María Ángeles Pérez González
 * @version 1.0.0
 * @package MathUtils
 * @internal Este script forma parte del módulo de utilidades internas del sistema
 */

/**
 * Multiplica dos números y devuelve el resultado
 *
 * @param float|int $a El primer número a multiplicar
 * @param float|int $b El segundo número a multiplicar
 * @return float|int El producto de la multiplicación
 * @internal Esta función multiplica los parámetros a y b
 */
function multiplicar($a, $b) {    
    return $a * $b;
}

/**
 * Compara dos palabras y determina si ambas son palíndromos
 *
 * @param string $palabra1 La primera palabra a verificar
 * @param string $palabra2 La segunda palabra a verificar
 * @return bool True si ambas palabras son palíndromos, false en caso contrario
 * @internal Esta función comprueba si dos palabras son palíndromos
 */
function compararPalindromos($palabra1, $palabra2) {
    $palabra1EsPalindromo = ($palabra1 === strrev($palabra1));
    $palabra2EsPalindromo = ($palabra2 === strrev($palabra2));
    
    return $palabra1EsPalindromo && $palabra2EsPalindromo;
}
