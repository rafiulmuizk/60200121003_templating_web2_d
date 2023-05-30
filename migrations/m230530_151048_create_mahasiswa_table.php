<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mahasiswa}}`.
 */
class m230530_151048_create_mahasiswa_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahasiswa}}', [
            'id_003' => $this->primaryKey(),
            'id_mhs_003' => $this->integer()->notNull(),
            'nim_003' => $this->string()->notNull(),
            'nama_003' => $this->string()->notNull(),
            'kelas_003' => $this->string()->notNull(),
            'status_003' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahasiswa}}');
    }
}
