<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSy01500 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SY01500', function (Blueprint $table) {
            $table->char('LSTUSRED', 15);
            $table->datetime('CREATDDT');
            $table->datetime('MODIFDT');
            $table->smallInteger('CMPANYID')->length(15);
            $table->char('CMPNYNAM', 65);
            $table->char('TAXEXMT1', 25);
            $table->char('TAXEXMT2', 25);
            $table->char('TAXREGTN', 25);
            $table->char('COPTXSCH', 15);
            $table->char('COSTXSCH', 15);
            $table->char('LOCATNNM', 31);
            $table->char('ADRCNTCT', 61);
            $table->char('ADDRESS1', 61);
            $table->char('ADDRESS2', 61);
            $table->char('ADDRESS3', 61);
            $table->char('CITY', 35);
            $table->char('COUNTY', 61);
            $table->char('STATE', 29);
            $table->char('ZIPCODE', 11);
            $table->char('PHONE1', 21);
            $table->char('PHONE2', 21);
            $table->char('PHONE3', 21);
            $table->char('FAXNUMBR', 21);
            $table->char('USESCRTY', 3);
            $table->char('UDCOSTR1', 31);
            $table->char('UDCOSTR2', 31);
            $table->char('CMPCNTRY', 61);
            $table->decimal('NOTEINDX', 19,5);
            $table->char('PPSFRNUM', 15);
            $table->smallInteger('PPSTAXRT')->length(6);
            $table->char('PPSVNDID', 15);
            $table->tinyInteger('VATMODE')->length(3);
            $table->char('LOCATNID', 15);
            $table->char('INTERID', 5);
            $table->char('ACSEGSEP', 1);
            $table->binary('SECOPTS', 4);
            $table->tinyInteger('DisplayRegisteredPalette')->length(3);
            $table->binary('Company_Options', 4);
            $table->char('Vets100CompanyNumber', 21);
            $table->char('TYPEOFBUSINESS', 31);
            $table->char('DUNS_Number', 21);
            $table->char('SICNUMBER', 15);
            $table->char('GOVCRPID', 31);
            $table->char('BRNCHNMBR', 21);
            $table->char('DFLTTXDTLID', 15);
            $table->char('PurchasesTaxDetailID', 15);
            $table->char('CCode', 7);
            $table->smallInteger('IVTRFDOCFMT')->length(6);
            $table->char('Offline_User', 15);
            $table->tinyInteger('WORKFLOWENABLED');
            $table->smallInteger('CrmCredentialsMethod')->length(6);
            $table->char('CrmOrganizationName', 255);
            $table->char('CrmServiceUrl', 255);
            $table->tinyInteger('EnableGLReporting');
            $table->tinyInteger('EnableAAReporting');
            $table->tinyInteger('UseDateEffectiveTax');
            $table->smallInteger('DateToUse')->length(6);
            $table->integer('DEX_ROW_ID')->autoIncrement(); 
        });
        //DB::unprepared(file_get_contents(storage_path('..\database\db\Mysql\Procedures\smGetNextNoteIndex.sql')));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SY01500');
        //DB::unprepared('DROP PROCEDURE IF EXISTS smGetNextNoteIndex');
    }
}
