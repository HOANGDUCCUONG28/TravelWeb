<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatreProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',100)->nullable(false);
            $table->integer('price')->nullable(false);
            $table->text('detail')->nullable(false);
            $table->string('taxtbn',1)->nullable();
            $table->string('shourui',1)->nullable();
            $table->string('cater1',50)->nullable();
            $table->string('cater2',50)->nullable();
            $table->string('cater3',50)->nullable();
            $table->string('size',20)->nullable();
            $table->string('status',20)->nullable();
            $table->string('haisou',50)->nullable();
            $table->string('tiki',20)->nullable();
            $table->string('nissu',20)->nullable();
            $table->string('shuooin',50)->nullable();
            $table->string('imgfile1',100)->nullable();
            $table->string('imgfile2',100)->nullable();
            $table->string('imgfile3',100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
