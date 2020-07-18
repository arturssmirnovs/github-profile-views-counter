<?php

use yii\db\Migration;

/**
 * Class m200718_104612_initial
 */
class m200718_104612_initial extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->db->createCommand("CREATE TABLE `views` (
  `id` int(10) UNSIGNED NOT NULL,
  `profile` varchar(250) NOT NULL,
  `views` bigint(20) UNSIGNED DEFAULT NULL,
  `create_time` int(10) UNSIGNED DEFAULT NULL,
  `update_time` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;")->execute();

        $this->db->createCommand("ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profile` (`profile`);")->execute();

        $this->db->createCommand("ALTER TABLE `views`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;")->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->db->createCommand("DROP TABLE views;")->execute();
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200718_104612_initial cannot be reverted.\n";

        return false;
    }
    */
}
