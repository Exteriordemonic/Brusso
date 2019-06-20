<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$page = new FieldsBuilder('product');

$page
    ->setLocation('post_type', '==', 'product');

$page
    ->addTab('Images',['placement' => 'left'])
        ->addImage('product-list', ['label'=>'Zdjęcie w asortymencie']);
return $page;
