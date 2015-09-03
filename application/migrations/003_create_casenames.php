<?php

class Migration_Create_casenames extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'casetype_id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
			),
			'casename' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			)
		));

		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('casenames');
	}

	public function down()
	{
		$this->dbforge->drop_table('casenames');
	}
}