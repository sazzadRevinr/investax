<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_info_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->tinyInteger('indicate_period')->default(0);
            $table->string('given_name');
            $table->string('middle_name')->nullable();
            $table->string('surname');
            $table->date('date_of_birth')->default('2000-01-01');
            $table->string('tax_file_number')->nullable();
            $table->string('occupation')->nullable();
            $table->string('address')->nullable();
            $table->string('home_phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email_address')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bsb_number')->nullable();
            $table->string('account_number')->nullable();
            $table->string('parent_and_dob')->nullable();
            $table->boolean('employed')->default(false);
            $table->string('other_income')->nullable();
            $table->string('annual_tax_statements')->nullable();
            $table->string('superannuation_details')->nullable();
            $table->string('superannuation_spouse')->nullable();
            $table->string('superannuation_other')->nullable();
            $table->boolean('capital_gain')->default(false);
            $table->string('annual_tax_doc')->nullable();
            $table->boolean('employee_schema')->default(false);
            $table->boolean('outside_assets')->default(false);
            $table->boolean('motor_vehicle')->default(false);
            $table->string('car_regi_num')->nullable();
            $table->string('km')->default('0');
            $table->boolean('uniform')->default(false);
            $table->string('deductions_notes')->nullable();
            $table->boolean('private_insurance')->default(false);
            $table->boolean('all_member_insurance')->default(false);
            $table->boolean('financiable')->default(false);
            $table->boolean('benefitable')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_forms');
    }
};
