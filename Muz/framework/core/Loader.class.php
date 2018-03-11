<?php

/**
 * Loader short summary.
 *
 * Loader description.
 *
 * @version 1.0
 * @author Costy
 */
class Loader
{
    // Load library classes

    public function library($lib){

        include LIB_PATH . "$lib.class.php";

    }


    // loader helper functions. Naming conversion is xxx_helper.php;

    public function helper($helper){

        include HELPER_PATH . "{$helper}_helper.php";

    }
}
?>