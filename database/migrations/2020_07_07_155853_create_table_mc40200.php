<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMc40200 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MC40200', function (Blueprint $table) {
            $table->char('CURNCYID', 15);
            $table->smallInteger('CURRNIDX');
            $table->decimal('NOTEINDX',19,5);
            $table->char('CRNCYDSC',31);
            $table->char('CRNCYSYM',3);
            $table->smallInteger('CNYSYMAR_1');
            $table->smallInteger('CNYSYMAR_2');
            $table->smallInteger('CNYSYMAR_3');
            $table->smallInteger('CYSYMPLC');
            $table->tinyInteger('INCLSPAC');
            $table->smallInteger('NEGSYMBL');
            $table->smallInteger('NGSMAMPC');
            $table->smallInteger('NEGSMPLC');
            $table->smallInteger('DECSYMBL');
            $table->smallInteger('DECPLCUR');
            $table->smallInteger('THOUSSYM');
            $table->char('CURTEXT_1',25);
            $table->char('CURTEXT_2',25);
            $table->char('CURTEXT_3',25);
            $table->char('ISOCURRC',3);
            $table->smallInteger('CURLNGID');
            $table->dateTime('DEX_ROW_TS');
            $table->integer('DEX_ROW_ID')->autoIncrement();
        });
        //DB::connection($this->connection)->unprepared($sql);
        DB::unprepared(file_get_contents(storage_path('..\database\db\Mysql\Procedures\zDP_MC40200SI.sql')));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('MC40200');

        DB::unprepared('DROP PROCEDURE IF EXISTS zDP_MC40200SI');
    }
}
