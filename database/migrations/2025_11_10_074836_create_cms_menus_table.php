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
        Schema::create('cms_menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')
                ->nullable()
                ->constrained('cms_menus')
                ->nullOnDelete();

            $table->string('title', 191);
            $table->string('slug', 191)->unique()->comment('URL path');
            $table->string('icon', 100)->nullable();
            $table->string('target', 50)->nullable()->comment('misal: _blank, _self');
            $table->unsignedInteger('order')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
            $table->softDeletes();

            $table->index(['parent_id', 'is_active']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cms_menus');
    }
};
