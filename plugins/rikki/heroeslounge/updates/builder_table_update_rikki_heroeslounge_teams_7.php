<?php namespace Rikki\Heroeslounge\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRikkiHeroesloungeTeams7 extends Migration
{
    public function up()
    {
        Schema::table('rikki_heroeslounge_teams', function($table)
        {
            $table->smallInteger('type')->unsigned()->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('rikki_heroeslounge_teams', function($table)
        {
            $table->dropColumn('type');
        });
    }
}
