<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1464521736_createPersons
    extends Migration
{

    public function up()
    {
        $this->createTable('persons', [
            'firstName' => ['type' => 'string'],
            'lastName' => ['type' => 'string'],
            'age' => ['type' => 'int'],
        ]);

    }

    public function down()
    {
        $this->dropTable('persons');
    }

}