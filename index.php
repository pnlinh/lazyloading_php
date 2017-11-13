<?php

/**
 * @param $model
 */
function __autoload($model)
{
    require "$model.php";
}

$model = new Model();
$model->run();