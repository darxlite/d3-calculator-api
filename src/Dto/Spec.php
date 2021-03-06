<?php
/**
 * Base spec (speciality, class) entity.
 *
 * PHP version 5
 *
 * @category  D3W
 * @package   D3W\Calculator
 * @author    Angel <angel.blizzard.mvp@gmail.com>
 * @copyright 2015 Diablo3-Web
 * @license   GNU GPLv3
 * @link      https://github.com/Diablo3-Web
 */

namespace D3W\Calculator\Dto;

/**
 * Base slot entity.
 *
 * PHP version 5
 *
 * @category  Domain
 * @package   D3W\Calculator\Dto
 * @author    Angel <angel.blizzard.mvp@gmail.com>
 * @copyright 2015 Diablo3-Web
 * @license   GNU GPLv3
 * @link      https://github.com/Diablo3-Web
 */

abstract class Spec
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var number
     */
    protected $number;

    /**
     * Constructor.
     *
     * @param string $name   Class name.
     * @param int    $number Class number.
     */
    public function __construct($name, $number)
    {
        $this->name   = $name;
        $this->number = $number;
    }
}