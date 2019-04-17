<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->string('full_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone_2_select')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('phone_3_select')->nullable();
            $table->string('phone_3')->nullable();

            //contact detail tabs
            $table->string('tab1_address')->nullable();
            $table->string('tab1_additional_address')->nullable();
            $table->string('tab1_suburb')->nullable();
            $table->string('tab1_city')->nullable();
            $table->string('tab1_state_select')->nullable();
            $table->string('tab1_postal_code')->nullable();
            $table->string('tab1_address_type_select')->nullable();
            $table->text('tab1_note')->nullable();

            //tab2
            $table->string('tab2_address')->nullable();
            $table->string('tab2_additional_address')->nullable();
            $table->string('tab2_suburb')->nullable();
            $table->string('tab2_city')->nullable();
            $table->string('tab2_state_select')->nullable();
            $table->string('tab2_postal_code')->nullable();
            $table->string('tab2_address_type_select')->nullable();
            $table->text('tab2_note')->nullable();

            //tab3
            $table->string('tab3_address')->nullable();
            $table->string('tab3_additional_address')->nullable();
            $table->string('tab3_suburb')->nullable();
            $table->string('tab3_city')->nullable();
            $table->string('tab3_state_select')->nullable();
            $table->string('tab3_postal_code')->nullable();
            $table->string('tab3_address_type_select')->nullable();
            $table->text('tab3_note')->nullable();

            //tab4
            $table->string('tab4_address')->nullable();
            $table->string('tab4_additional_address')->nullable();
            $table->string('tab4_suburb')->nullable();
            $table->string('tab4_city')->nullable();
            $table->string('tab4_state_select')->nullable();
            $table->string('tab4_postal_code')->nullable();
            $table->string('tab4_address_type_select')->nullable();
            $table->text('tab4_note')->nullable();

            //Profile and Occupation
            $table->string('po_address_type')->nullable();
            $table->date('po_dob')->nullable();
            $table->string('po_political_party_ml')->nullable();
            $table->string('po_gender')->nullable();
            $table->string('po_occupation_ml')->nullable();
            $table->integer('po_marital_status')->nullable();
            $table->string('religion_ml')->nullable();
            $table->string('po_goi_ml')->nullable();

            //Voter Profile
            $table->integer('voter_title')->nullable();
            $table->integer('voter_zone')->nullable();
            $table->integer('voter_section')->nullable();
            $table->string('voter_doi')->nullable();
            $table->string('vote_city_select')->nullable();
            $table->string('voter_city_select')->nullable();

            //User Account/Access Login
            $table->string('user_email')->nullable();
            $table->string('user_password')->nullable();
            $table->string('user_pp')->nullable();
            $table->string('user_pp1')->nullable();

            
            
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
        Schema::dropIfExists('contacts');
    }
}
