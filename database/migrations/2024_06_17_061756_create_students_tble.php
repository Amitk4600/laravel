<?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::create('students_tble', function (Blueprint $table) {
//             $table->integer('student_id');
//             $table->string('name',30);
//             $table->string('email')->unique();
//             $table->primary('student_id');
//             $table->float('percentage',3,2)->comment('student %age');
//             $table->string('cities',20)->default('hisar');
//             $table->integer('age')->unsigned();
           
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::dropIfExists('students_tble');
//     }
// };
