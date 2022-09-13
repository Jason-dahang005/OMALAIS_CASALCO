<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership_app', function (Blueprint $table) {
            $table->id();
            $table->string('Fname');
            $table->string('Mname');
            $table->string('Lname');
            $table->string('suffix')->nullable();
            $table->string('gender');
            $table->date('dob');
            $table->string('Bplace');
            $table->string('address');
            $table->string('unit');
            $table->string('occupation');
            $table->string('educ');
            $table->integer('MI');
            $table->string('civilStatus');
            $table->string('religion');
            $table->integer('contactNum');
            $table->integer('TIN');
            $table->integer('SSSnum');
            $table->string('email')->unique();
            $table->string('NumDependents');
            $table->string('spouseFname');
            $table->string('spouseAge');
            $table->string('spouseOcc');
            $table->string('spouseMI');
            $table->string('spouseEmplrName');
            $table->integer('spouseConNum');
            $table->string('benName');
            $table->string('benRelation');
            $table->string('benAge');
            $table->string('benAddress');
            $table->string('benMothersLname');
            $table->string('benMothersFname');
            $table->string('benMothersMname');
            $table->string('selfiepic');
            $table->string('empIDpic');
            $table->boolean('is_approved')->default(false);        
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
        Schema::dropIfExists('membership_app');
    }
};
