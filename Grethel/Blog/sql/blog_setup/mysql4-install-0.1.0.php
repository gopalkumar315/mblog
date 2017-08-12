<?php
$installer = $this;
$installer->startSetup();
$installer->run("
    CREATE TABLE `{$installer->getTable('blog/grethelblog')}` (
      `post_id` int(11) NOT NULL auto_increment,
      `title` text,
      `post` text,
      `updated_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
      `created_at` datetime default NULL,
      PRIMARY KEY  (`post_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
 
    INSERT INTO `{$installer->getTable('blog/grethelblog')}` VALUES (1,'My New Title','This is a blog post','2009-07-01 00:00:00','2009-07-02 23:12:30');
");
$installer->endSetup();