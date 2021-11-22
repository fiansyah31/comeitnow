<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Project extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_project'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'judul_project'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
			],
            'slug'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
			],
            'link_project'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
			],
            'picture_project'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			]
		]);
		$this->forge->addPrimaryKey('id_project');
		$this->forge->createTable('project');
    }

    public function down()
    {
        //
    }
}
