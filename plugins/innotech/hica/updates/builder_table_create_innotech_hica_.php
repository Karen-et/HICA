<?php namespace Innotech\Hica\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateInnotechHica extends Migration
{
    public function up()
    {
        Schema::create('innotech_hica_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('prueba');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('innotech_hica_');
    }
}
