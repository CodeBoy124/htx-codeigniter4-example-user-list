<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type" => "INT",
                "auto_increment" => TRUE,
                "unsigned" => TRUE
            ],
            "name" => [
                "type" => "VARCHAR",
                "constraint" => "255",
                "null" => FALSE,
            ],
            "email" => [
                "type" => "VARCHAR",
                "constraint" => "320",
                "unique" => TRUE,
                "null" => FALSE
            ]
        ];
        $this->forge->addField($fields);
        $this->forge->addKey("id", true);
        $this->forge->createTable("users", TRUE);
    }

    public function down()
    {
        $this->forge->dropTable("users");
    }
}
