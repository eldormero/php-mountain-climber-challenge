<?php

namespace Hackathon\LevelI;

/**
 * Class Difference
 */
class Difference
{
    private $a;     // Chaine A
    private $b;     // Chaine A
    public $cost;   // Coût de changement

    /**
     * @param $a    // Chaine A
     * @param $b    // Chaine B
     */
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
        $this->cost = $this->whatIsTheCostPlease($a, $b);
    }

    /**
     * @param $this->a
     * @param $this->b
     *
     * @return mixed
     */
    public function whatIsTheCostPlease()
    {
        
        $lenA = strlen($this->a);
        $lenB = strlen($this->b);

        $cost = 0;

        $cost = levenshtein($this->a, $this->b);
        return $cost;

        if ($lenA > $lenB) {
            for ($i = 0; $i < $lenB; $i++) {
                if ($this->b[$i] != $this->a[$i]) {
                    $cost++;
                }
            }
            $cost = $cost + ($lenA - $lenB);
            return $cost;
        } elseif ($lenA < $lenB) {
            $cost = $lenB - $lenA;
            for ($i = 0; $i < $lenA; $i++) {
                if ($this->a[$i] != $this->b[$i]) {
                    $cost++;
                }
            }
            return $cost;
        }
        else {
            for ($i = 0; $i < $lenA; $i++) {
                if ($this->a[$i] != $this->b[$i]) {
                    $cost++;
                }
            }
            return $cost;
        }
    }
}
