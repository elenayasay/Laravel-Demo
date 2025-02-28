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
        Schema::create('students', function (Blueprint $table) {
            $table->id('student_id');
            $table->string('email', 45)->unique();
            $table->string('password', 45);
            $table->string('f_name', 45);
            $table->string('l_name', 45);
            $table->string('job', 45); // Changed from date to string for job title
            $table->string('phone', 15)->nullable();
            $table->string('mobile', 15)->nullable();
            $table->boolean('status')->default(1); // Removed unnecessary length argument
            $table->date('date_of_join');
            $table->date('last_login_date')->nullable(); // Fixed typo: last_logn_date to last_login_date
            $table->string('last_login_ip', 45)->nullable();
            $table->timestamps(); // Removed duplicate $table->timestamps()
        });
    }
};