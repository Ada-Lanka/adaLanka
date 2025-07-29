<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('admin', function (Blueprint $table) {
            $table->unsignedInteger('post_count')->default(0)->after('user_id'); // or after any other existing field
        });
    }

    public function down(): void
    {
        Schema::table('admin', function (Blueprint $table) {
            $table->dropColumn('post_count');
        });
    }
};
