<?php

use Illuminate\Database\Seeder;

class SY01500Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('SY01500')->insert([
            'LSTUSRED'=>  'sa',
            'CREATDDT'=>  '2019-12-09 00:00:00.000',
            'MODIFDT'=>  '2019-12-09 00:00:00.000',
            'CMPANYID'=>  '1',
            'CMPNYNAM'=>  'HEYDUDE',
            'TAXEXMT1'=>  '',
            'TAXEXMT2'=>  '',
            'TAXREGTN'=>  '',
            'COPTXSCH'=>  '',
            'COSTXSCH'=>  '',
            'LOCATNNM'=>  '',
            'ADRCNTCT'=>  '',
            'ADDRESS1'=>  '',
            'ADDRESS2'=>  '',
            'ADDRESS3'=>  '',
            'CITY'=>  '',
            'COUNTY'=>  '',
            'STATE'=>  '',
            'ZIPCODE'=>  '',
            'PHONE1'=>  '',
            'PHONE2'=>  '',
            'PHONE3'=>  '',
            'FAXNUMBR'=>  '',
            'USESCRTY'=>  '1',
            'UDCOSTR1'=>  '',
            'UDCOSTR2'=>  '',
            'CMPCNTRY'=>  '',
            'NOTEINDX'=>  '116.00000',
            'PPSFRNUM'=>  '',
            'PPSTAXRT'=> '0',
            'PPSVNDID'=>  '',
            'VATMODE' =>  '0',
            'LOCATNID'=>  '',
            'INTERID'=>  'DUDE',
            'ACSEGSEP'=>  '-',
            'SECOPTS'=>  '0x00000000',
            'DisplayRegisteredPalette'=>  '0',
            'Company_Options' =>  '0x01400000',
            'Vets100CompanyNumber'=>  '',
            'TYPEOFBUSINESS'=>  '',
            'DUNS_Number'=>  '',
            'SICNUMBER'=>  '',
            'GOVCRPID'=>  '',
            'BRNCHNMBR'=>  '',
            'DFLTTXDTLID'=>  '',
            'PurchasesTaxDetailID'=>  '',
            'CCode'=>  '',
            'IVTRFDOCFMT'=> '0',
            'Offline_User'=>  '',
            'WORKFLOWENABLED'=>  '0',
            'CrmCredentialsMethod'=> '0',
            'CrmOrganizationName'=> '',
            'CrmServiceUrl'=> '',
            'EnableGLReporting'=>  '0',
            'EnableAAReporting'=>  '0',
            'UseDateEffectiveTax'=>  '0',
            'DateToUse'=> '0'
        ]);
    }
}
