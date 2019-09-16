<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('book', function (Blueprint $table) {


            $table->bigIncrements('id');
            $table->string("name")->unique('name');
            $table->integer("no_of_book");
            $table->double("price")->comment("Its will handle price value");
            $table->timestamps();

            $table->boolean('is_exist');

            $table->char('address', 100)->nullable();

            $table->decimal('amount', 8, 2);
            $table->enum('level', ['good', 'very good', "excellent"]);


            $table->text('description');

            $table->date("now_date")->useCurrent();

            $table->index(['amount', 'created_at']);
           // $table->engine = 'MyISAM';



            $table->unsignedBigInteger("user_id");
        
            $table->foreign('user_id')->references('id')->on('users');
                  //->onDelete('cascade')
                  //->onUpdate('cascade');
        });


        if (Schema::hasTable('book')) {
            echo "book exist";
        }

        if (Schema::hasColumn('book', 'price')) {
            echo "price column exist";
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
}
