<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendshipsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('friendships', function (Blueprint $table) {

            $table->id();
            $table->boolean('accepted')->default('0');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            //Foreign Keys
            $table->unsignedBigInteger('userId1');
            $table->foreign('userId1', 'fk_friendships1_users')
                ->on('users')
                ->references('id')
                ->onDelete('cascade');

            $table->unsignedBigInteger('userId2');
            $table->foreign('userId2', 'fk_friendships2_users')
                ->on('users')
                ->references('id')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('friendsships');
    }
}
