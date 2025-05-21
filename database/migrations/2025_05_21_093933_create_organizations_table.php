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
        Schema::create('organizations', function (Blueprint $table) {
            $table->unsignedBigInteger('id');

            $table->foreignId('type_id')
            ->constrained('sectors')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->string('website');

            $table->foreignId('employee_numbers_id')
            ->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->year('established_year');

            $table->foreignId('annual_budgets_id')
            ->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreignId('organization_sectors_id')
            ->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->string('work_type')->nullable();

            $table->foreign('id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizations');
    }
};
