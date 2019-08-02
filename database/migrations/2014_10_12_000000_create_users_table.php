<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('is_admin')->default(false);
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->integer('nisn')->nullable();
            $table->string('alamat')->nullable();
            $table->string('no_tlp')->nullable();
            $table->integer('jurusan_id')->nullable()->unsigned();
            $table->string('status_nikah')->nullable();
            $table->string('status_kerja')->default('Belum Bekerja');
            $table->string('avatar')->nullable();
            $table->string('tahun_masuk')->nullable();
            $table->string('tahun_keluar')->nullable();
            $table->boolean('status_akun')->default(false);
            $table->string('password');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
