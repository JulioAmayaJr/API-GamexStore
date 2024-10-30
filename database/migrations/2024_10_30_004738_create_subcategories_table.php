<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategories', function (Blueprint $table) {
            $table->id('id_subcategory');
            $table->foreignId('category_id')->constrained('categories', 'id_categorie')->onDelete('cascade');
            $table->string('name');
            $table->string('controller');
            $table->string('action_page')->nullable();
            $table->foreignId('parent_id')->nullable()->constrained('subcategories', 'id_subcategory')->onDelete('cascade'); // Auto-relación para subcategorías
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
        Schema::dropIfExists('subcategories');
    }
}
