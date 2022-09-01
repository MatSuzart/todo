<?php

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_done');
            $table->string('title');
            $table->string('description');
            $table->dateTime('due_date');
            $table->foreingIdFor(User::class)->references('id')->on('users')->onDelete('CASCADE');
            $table->foreingIdFor(Category::class)->references('id')->on('categories')->onDelete('CASCADE');
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
        Schema::table('tasks',function(Blueprint $table){
            $table->dropForeingIdFor(User::class);
            $table->dropFeringIdFor(Category::class);
        });
        Schema::dropIfExists('tasks');
    }
}
