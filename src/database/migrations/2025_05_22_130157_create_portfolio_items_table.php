<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioItemsTable extends Migration
{
    public function up()
    {
        Schema::create('portfolio_items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image_path');
            $table->string('filter'); // e.g., filter-app, filter-web, filter-card
            $table->string('category')->nullable();
            $table->string('client')->nullable();
            $table->date('project_date')->nullable();
            $table->string('project_url')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('portfolio_items');
    }
}
