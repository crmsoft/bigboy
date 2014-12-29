<?php
/**
 * Created by PhpStorm.
 * User: ahtem
 * Date: 12/24/14
 * Time: 6:50 PM
 */


class delete {

    private $var;

    /**
     * @param $src
     * @internal param $src_numeric
     */
    public function __construct( $src ){
        if( is_numeric($src) && $src > 0 ){
            return true;
        }

        return false;
    }

}