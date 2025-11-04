<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            // BẮT BUỘC: Đặt độ dài mặc định 191
            Schema::defaultStringLength(191);
            
            $table->id();
            $table->string('name');
            $table->string('email', 191)->unique(); // ← 191, không phải 255
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
