<?php
require __DIR__.'/vendor/autoload.php';

$table = new LucidFrame\Console\ConsoleTable();
$table
    ->addHeader('ID')
    ->addHeader('Name')
    ->addHeader('Email')
    ->addRow()
        ->addColumn('101')
        ->addColumn('Shivangi')
        ->addColumn('shivu@gmail.com')
    ->addRow()
        ->addColumn('102')
        ->addColumn('meenu')
        ->addColumn('meenu@gmail.com')
    ->addRow()
        ->addColumn('103')
        ->addColumn('juhi')
        ->addColumn('juhi@gmail.com')
    ->display()
;
?>