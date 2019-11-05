<?php
namespace App\Model;

use Nette\SmartObject;

/**
 * Model operací kalkulačky.
 * @package App\Model
 */

class CalculatorManager
{
    use SmartObject;

     /**
     * Sečte daná čísla a vrátí výsledek.
     * @param int $x první číslo
     * @param int $y druhé číslo
     * @return int výsledek po sčítání
     */
    public function add($x, $y)
    {
        return $x + $y;
    }

    /**
     * Odečte druhé číslo od prvního a vrátí výsledek.
     * @param int $x první číslo
     * @param int $y druhé číslo
     * @return int výsledek po odčítání
     */
    public function subtract($x, $y)
    {
        return $x - $y;
    }

    /**
     * Vynásobí daná čísla a vrátí výsledek.
     * @param int $x první číslo
     * @param int $y druhé číslo
     * @return int výsledek po násobení
     */
    public function multiply($x, $y)
    {
        return $x * $y;
    }

    /**
     * Vydělí první číslo druhým bezezbytku a vrátí výsledek.
     * @param int $x první číslo
     * @param int $y druhé číslo; nesmí být 0
     * @return int výsledek po dělení bezezbytku
     */
    public function divide($x, $y)
    {
        return round($x / $y);
    }

/** Definice konstant pro operace. */
    const 
        ADD = 1,
        Substract = 2,
        Multiply = 3,
        Divide = 4;


/**
 * Getter pro existující operace.
 * @return array asociativní pole konstant pro operace a jejich slovního pojmenování
 */       

 public function getOperations()
    {
        return array(
            self::ADD => 'plus',
            self::Substract => 'minus',
            self::Multiply => 'nasobeni',
            self::Dvide => 'deleni'
        );
    }   


/**
 * Zavolá zadanou operaci a vrátí její výsledek.
 * @param int $operation zadaná operace
 * @param int $x         první číslo pro operaci
 * @param int $y         druhé číslo pro operaci
 * @return int|null výsledek operace nebo null, pokud zadaná operace neexistuje
 */    

 public function calculate($operation, $x, $y)
 {
     switch($operation){
         case self::ADD:
            return $this->add($x,$y);
        case self::SUBTRACT:
            return $this->subtract($x, $y);
        case self::MULTIPLY:
            return $this->multiply($x, $y);
        case self::DIVIDE:
            return $this->divide($x, $y);
        default:
            return null;    
     }
 }
}
?>