<?php
include_once("IMigration.php");

abstract class Migration implements IMigration
{
    public function up()   { }
 
    public function down() { }
}
?>