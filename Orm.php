<?php


class Orm{

    /**
     * @ignore
     */
    public function __construct(){
        $this->init();

    }

    /**
     * initializes the orm
     * @internal
     */
    private function init(){

        // load the CI model class
        include_once(BASEPATH."core/Model.php");

        // load queryset
        include_once("Queryset.php");

        // load base model into the class scope
        include_once("Base_model.php");

        // load exceptions
        include_once("OrmExceptions.php");
    }
}



