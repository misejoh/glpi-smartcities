ALTER TABLE `glpi_plugin_environment_profiles` ADD `backups` char(1) default NULL , ADD `parametre` char(1) default NULL , ADD `badges` char(1) default NULL , ADD `droits` char(1) default NULL , DROP COLUMN `interface` , DROP COLUMN `is_default`;