<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Capsule\Manager as Capsule;

class P5StatsInit extends Migration
{
    public function up()
    {
        $capsule = new Capsule();
        $capsule::schema()->create('p5_stats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serial_number');
            $table->string('host_id')->nullable();
            $table->string('port')->nullable();
            $table->string('platform')->nullable();
            $table->string('version')->nullable();
            $table->string('uptime')->nullable();
            $table->string('licenses')->nullable();

            $table->unique('serial_number');
            $table->index('host_id');
            $table->index('port');
            $table->index('platform');
            $table->index('version');
            $table->index('uptime');
            $table->index('licenses');

        });
    }
    
    public function down()
    {
        $capsule = new Capsule();
        $capsule::schema()->dropIfExists('p5_stats');
    }
}
