<?php

/*
   ------------------------------------------------------------------------
   FusionInventory
   Copyright (C) 2010-2014 by the FusionInventory Development Team.

   http://www.fusioninventory.org/   http://forge.fusioninventory.org/
   ------------------------------------------------------------------------

   LICENSE

   This file is part of FusionInventory project.

   FusionInventory is free software: you can redistribute it and/or modify
   it under the terms of the GNU Affero General Public License as published by
   the Free Software Foundation, either version 3 of the License, or
   (at your option) any later version.

   FusionInventory is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
   GNU Affero General Public License for more details.

   You should have received a copy of the GNU Affero General Public License
   along with FusionInventory. If not, see <http://www.gnu.org/licenses/>.

   ------------------------------------------------------------------------

   @package   FusionInventory
   @author    David Durieux
   @co-author
   @copyright Copyright (c) 2010-2014 FusionInventory team
   @license   AGPL License 3.0 or (at your option) any later version
              http://www.gnu.org/licenses/agpl-3.0-standalone.html
   @link      http://www.fusioninventory.org/
   @link      http://forge.fusioninventory.org/projects/fusioninventory-for-glpi/
   @since     2010

   ------------------------------------------------------------------------
 */

function plugin_fusioninventory_getAddSearchOptions($itemtype) {

   $sopt = array();
   if ($itemtype == 'Computer' or $itemtype == 'PluginFusioninventoryComputer') {

         $sopt[5150]['table']     = 'glpi_plugin_fusioninventory_inventorycomputercomputers';
         $sopt[5150]['field']     = 'last_fusioninventory_update';
         $sopt[5150]['linkfield'] = 'id';
         $sopt[5150]['name']      = __('FusInv', 'fusioninventory')." - ".
            __('Last inventory', 'fusioninventory');
         $sopt[5150]['datatype']  = 'datetime';
         $sopt[5150]['itemlink_type'] = 'PluginFusioninventoryInventoryComputerLib';
         $sopt[5150]['massiveaction'] = FALSE;

         $sopt[5151]['table']     = 'glpi_plugin_fusioninventory_inventorycomputerantiviruses';
         $sopt[5151]['field']     = 'name';
         $sopt[5151]['name']      = __('Antivirus name', 'fusioninventory');
         $sopt[5151]['datatype']  = 'string';
         $sopt[5151]['joinparams']  = array('jointype' => 'child');
         $sopt[5151]['massiveaction'] = FALSE;
         $sopt[5151]['forcegroupby'] = TRUE;
         $sopt[5151]['searchtype'] = array('contains');

         $sopt[5152]['table']     = 'glpi_plugin_fusioninventory_inventorycomputerantiviruses';
         $sopt[5152]['field']     = 'version';
         $sopt[5152]['name']      = __('Antivirus version', 'fusioninventory');
         $sopt[5152]['datatype']  = 'string';
         $sopt[5152]['joinparams']  = array('jointype' => 'child');
         $sopt[5152]['massiveaction'] = FALSE;
         $sopt[5152]['forcegroupby'] = TRUE;
         $sopt[5151]['searchtype'] = array('contains');

         $sopt[5153]['table']     = 'glpi_plugin_fusioninventory_inventorycomputerantiviruses';
         $sopt[5153]['field']     = 'is_active';
         $sopt[5153]['linkfield'] = '';
         $sopt[5153]['name']      = __('Antivirus enabled', 'fusioninventory');
         $sopt[5153]['datatype']  = 'bool';
         $sopt[5153]['joinparams']  = array('jointype' => 'child');
         $sopt[5153]['massiveaction'] = FALSE;
         $sopt[5153]['forcegroupby'] = TRUE;
         $sopt[5153]['searchtype'] = array('equals');

         $sopt[5154]['table']     = 'glpi_plugin_fusioninventory_inventorycomputerantiviruses';
         $sopt[5154]['field']     = 'uptodate';
         $sopt[5154]['linkfield'] = '';
         $sopt[5154]['name']      = __('Antivirus up to date', 'fusioninventory');
         $sopt[5154]['datatype']  = 'bool';
         $sopt[5154]['joinparams']  = array('jointype' => 'child');
         $sopt[5154]['massiveaction'] = FALSE;
         $sopt[5154]['forcegroupby'] = TRUE;
         $sopt[5154]['searchtype'] = array('equals');

         $sopt[5155]['table']     = 'glpi_plugin_fusioninventory_inventorycomputercomputers';
         $sopt[5155]['field']     = 'bios_date';
         $sopt[5155]['name']      = __('BIOS', 'fusioninventory')."-".__('Date');
//         $sopt[5155]['forcegroupby'] = true;
//         $sopt[5155]['usehaving'] = true;
         $sopt[5155]['datatype']  = 'date';
         $sopt[5155]['joinparams']  = array('jointype' => 'child');
         $sopt[5155]['massiveaction'] = FALSE;

         $sopt[5156]['table']     = 'glpi_plugin_fusioninventory_inventorycomputercomputers';
         $sopt[5156]['field']     = 'bios_version';
         $sopt[5156]['name']      = __('BIOS', 'fusioninventory')."-".__('Version');
         $sopt[5156]['joinparams']  = array('jointype' => 'child');
         $sopt[5156]['massiveaction'] = FALSE;

         $sopt[5157]['table']     = 'glpi_plugin_fusioninventory_inventorycomputercomputers';
         $sopt[5157]['field']     = 'operatingsystem_installationdate';
         $sopt[5157]['name']      = __('Operating system')." - ".__('Installation')." (".
                                       strtolower(__('Date')).")";
         $sopt[5157]['joinparams']  = array('jointype' => 'child');
         $sopt[5157]['datatype']  = 'date';
         $sopt[5157]['massiveaction'] = FALSE;

         $sopt[5158]['table']     = 'glpi_plugin_fusioninventory_inventorycomputercomputers';
         $sopt[5158]['field']     = 'winowner';
         $sopt[5158]['joinparams']  = array('jointype' => 'child');
         $sopt[5158]['name']      = __('Owner', 'fusioninventory');
         $sopt[5158]['massiveaction'] = FALSE;

         $sopt[5159]['table']     = 'glpi_plugin_fusioninventory_inventorycomputercomputers';
         $sopt[5159]['field']     = 'wincompany';
         $sopt[5159]['name']      = __('Company', 'fusioninventory');
         $sopt[5159]['joinparams']  = array('jointype' => 'child');
         $sopt[5159]['massiveaction'] = FALSE;

         $sopt[5160]['table']     = 'glpi_plugin_fusioninventory_agents';
         $sopt[5160]['field']     = 'useragent';
         $sopt[5160]['name']      = __('Useragent', 'fusioninventory');
         $sopt[5160]['joinparams']  = array('jointype' => 'child');
         $sopt[5160]['massiveaction'] = FALSE;

         $sopt[5161]['table']     = 'glpi_plugin_fusioninventory_agents';
         $sopt[5161]['field']     = 'tag';
         $sopt[5161]['linkfield'] = '';
         $sopt[5161]['name']      = __('FusionInventory tag', 'fusioninventory');

         $sopt[5162]['table']     = 'glpi_plugin_fusioninventory_computerarchs';
         $sopt[5162]['field']     = 'name';
         $sopt[5162]['name']      = __('Architecture', 'fusioninventory');
         $sopt[5162]['datatype']  = 'dropdown';
         $sopt[5162]['massiveaction'] = FALSE;
         $sopt[5162]['joinparams']      = array('beforejoin'
                                            => array('table'      => 'glpi_plugin_fusioninventory_inventorycomputercomputers',
                                                     'joinparams' => array('jointype'          => 'child')));

//         $sopt[5163]['table']     = 'glpi_plugin_fusioninventory_configurationmanagements';
//         $sopt[5163]['field']     = 'conform';
//         $sopt[5163]['name']      = __('Conformité (configuration management)', 'fusioninventory');
//         $sopt[5163]['joinparams']  = array('jointype' => 'itemtype_item');
//         $sopt[5163]['massiveaction'] = FALSE;
//         $sopt[5163]['datatype']  = 'bool';
         $sopt[5163]['table']     = 'glpi_plugin_fusioninventory_inventorycomputercomputers';
         $sopt[5163]['field']     = 'oscomment';
         $sopt[5163]['name']      = __('Operating system').'/'.__('Comments');
         $sopt[5163]['joinparams']  = array('jointype' => 'child');
         $sopt[5163]['massiveaction'] = FALSE;

         $sopt[5164]['table']         = "glpi_plugin_fusioninventory_agentmodules";
         $sopt[5164]['field']         = "DEPLOY";
         $sopt[5164]['linkfield']     = "DEPLOY";
         $sopt[5164]['name']          = __('Module', 'fusioninventory')."-".__('Deploy', 'fusioninventory');
         $sopt[5164]['datatype']      = 'bool';
         $sopt[5164]['massiveaction'] = FALSE;

         $sopt[5165]['table']         = "glpi_plugin_fusioninventory_agentmodules";
         $sopt[5165]['field']         = "WAKEONLAN";
         $sopt[5165]['linkfield']     = "WAKEONLAN";
         $sopt[5165]['name']          = __('Module', 'fusioninventory')."-".__('WakeOnLan', 'fusioninventory');
         $sopt[5165]['datatype']      = 'bool';
         $sopt[5165]['massiveaction'] = FALSE;

         $sopt[5166]['table']         = "glpi_plugin_fusioninventory_agentmodules";
         $sopt[5166]['field']         = "INVENTORY";
         $sopt[5166]['linkfield']     = "INVENTORY";
         $sopt[5166]['name']          = __('Module', 'fusioninventory')."-".__('Local inventory', 'fusioninventory');
         $sopt[5166]['datatype']      = 'bool';
         $sopt[5166]['massiveaction'] = FALSE;

         $sopt[5167]['table']         = "glpi_plugin_fusioninventory_agentmodules";
         $sopt[5167]['field']         = "InventoryComputerESX";
         $sopt[5167]['linkfield']     = "InventoryComputerESX";
         $sopt[5167]['name']          = __('Module', 'fusioninventory')."-".__('ESX/VMWare', 'fusioninventory');
         $sopt[5167]['datatype']      = 'bool';
         $sopt[5167]['massiveaction'] = FALSE;

         $sopt[5168]['table']         = "glpi_plugin_fusioninventory_agentmodules";
         $sopt[5168]['field']         = "NETWORKINVENTORY";
         $sopt[5168]['linkfield']     = "NETWORKINVENTORY";
         $sopt[5168]['name']          = __('Module', 'fusioninventory')."-".__('Network inventory', 'fusioninventory');
         $sopt[5168]['datatype']      = 'bool';
         $sopt[5168]['massiveaction'] = FALSE;

         $sopt[5169]['table']         = "glpi_plugin_fusioninventory_agentmodules";
         $sopt[5169]['field']         = "NETWORKDISCOVERY";
         $sopt[5169]['linkfield']     = "NETWORKDISCOVERY";
         $sopt[5169]['name']          = __('Module', 'fusioninventory')."-".__('Network discovery', 'fusioninventory');
         $sopt[5169]['datatype']      = 'bool';
         $sopt[5169]['massiveaction'] = FALSE;

         $sopt[5170]['table']         = "glpi_plugin_fusioninventory_agentmodules";
         $sopt[5170]['field']         = "Collect";
         $sopt[5170]['linkfield']     = "Collect";
         $sopt[5170]['name']          = __('Module', 'fusioninventory')."-".__('Collect', 'fusioninventory');
         $sopt[5170]['datatype']      = 'bool';
         $sopt[5170]['massiveaction'] = FALSE;

         $sopt[5171]['name']          = __('Static group', 'fusioninventory');
         $sopt[5171]['table']         = getTableForItemType('PluginFusioninventoryDeployGroup');
         $sopt[5171]['massiveaction'] = FALSE;
         $sopt[5171]['field']         ='name';
         $sopt[5171]['forcegroupby']  = true;
         $sopt[5171]['usehaving']     = true;
         $sopt[5171]['datatype']      = 'dropdown';
         $sopt[5171]['joinparams']    = array('beforejoin'
                                          => array('table'      => 'glpi_plugin_fusioninventory_deploygroups_staticdatas',
                                                   'joinparams' => array('jointype'          => 'itemtype_item',
                                                                           'specific_itemtype' => 'Computer')));


   }

   if ($itemtype == 'Computer') {
      // Switch
      $sopt[5192]['table']='glpi_plugin_fusioninventory_networkequipments';
      $sopt[5192]['field']='name';
      $sopt[5192]['linkfield']='';
      $sopt[5192]['name']=__('FusInv', 'fusioninventory')." - ".__('Switch');
      $sopt[5192]['itemlink_type'] = 'NetworkEquipment';

      // Port of switch
      $sopt[5193]['table']='glpi_plugin_fusioninventory_networkports';
      $sopt[5193]['field']='id';
      $sopt[5193]['linkfield']='';
      $sopt[5193]['name']=__('FusInv', 'fusioninventory')." - ".__('Switch ports');
      $sopt[5193]['forcegroupby']='1';
   }

   if ($itemtype == 'Entity') {
      // Agent base URL
      $sopt[6192]['table']='glpi_plugin_fusioninventory_entities';
      $sopt[6192]['field']='agent_base_url';
      $sopt[6192]['linkfield']='';
      $sopt[6192]['name']=__('Agent base URL', 'fusioninventory');
      $sopt[6192]['joinparams']  = array('jointype' => 'child');
      $sopt[6192]['massiveaction'] = FALSE;
   }

   if ($itemtype == 'Printer') {
      // Switch
      $sopt[5192]['table']='glpi_plugin_fusioninventory_networkequipments';
      $sopt[5192]['field']='name';
      $sopt[5192]['linkfield']='';
      $sopt[5192]['name']=__('FusInv', 'fusioninventory')." - ".__('Switch');
      $sopt[5192]['itemlink_type'] = 'NetworkEquipment';

      // Port of switch
      $sopt[5193]['table']='glpi_plugin_fusioninventory_networkports';
      $sopt[5193]['field']='id';
      $sopt[5193]['linkfield']='';
      $sopt[5193]['name']=__('FusInv', 'fusioninventory')." - ".__('Hardware ports');
      $sopt[5193]['forcegroupby']='1';

      $pfConfig = new PluginFusioninventoryConfig();

      $plugins_id = PluginFusioninventoryModule::getModuleId('fusioninventory');

      if ($pfConfig->getValue("storagesnmpauth") == "file") {
         $sopt[5191]['table'] = 'glpi_plugin_fusioninventory_printers';
         $sopt[5191]['field'] = 'plugin_fusioninventory_configsecurities_id';
         $sopt[5191]['linkfield'] = 'id';
         $sopt[5191]['name'] = __('FusInv', 'fusioninventory')." - ".
            __('SNMP authentication', 'fusioninventory');

         $sopt[5191]['massiveaction'] = FALSE;
      } else {
         $sopt[5191]['table']='glpi_plugin_fusioninventory_configsecurities';
         $sopt[5191]['field']='name';
         $sopt[5191]['linkfield']='plugin_fusioninventory_configsecurities_id';
         $sopt[5191]['name']=__('FusInv', 'fusioninventory')." - ".
            __('SNMP authentication', 'fusioninventory');
         $sopt[5191]['datatype'] = 'itemlink';
         $sopt[5191]['itemlink_type'] = 'PluginFusioninventoryConfigSecurity';
         $sopt[5191]['massiveaction'] = FALSE;
      }

      $sopt[5194]['table']='glpi_plugin_fusioninventory_printers';
      $sopt[5194]['field']='last_fusioninventory_update';
      $sopt[5194]['linkfield']='';
      $sopt[5194]['name']=__('FusInv', 'fusioninventory')." - ".
         __('Last inventory', 'fusioninventory');
      $sopt[5194]['datatype'] = 'datetime';
      $sopt[5194]['massiveaction'] = FALSE;

      $sopt[5196]['table']         = 'glpi_plugin_fusioninventory_printers';
      $sopt[5196]['field']         = 'sysdescr';
      $sopt[5196]['linkfield']     = '';
      $sopt[5196]['name']          = __('Sysdescr', 'fusioninventory');
      $sopt[5196]['datatype']      = 'text';
   }

   if ($itemtype == 'NetworkEquipment') {

      $pfConfig = new PluginFusioninventoryConfig();

      $plugins_id = PluginFusioninventoryModule::getModuleId('fusioninventory');

      $sopt[5191]['table']='glpi_plugin_fusioninventory_configsecurities';
      $sopt[5191]['field']='name';
      $sopt[5191]['linkfield']='plugin_fusioninventory_configsecurities_id';
      $sopt[5191]['name']=__('FusInv', 'fusioninventory')." - ".
                             __('SNMP authentication', 'fusioninventory');
      $sopt[5191]['datatype'] = 'itemlink';
      $sopt[5191]['itemlink_type'] = 'PluginFusioninventoryConfigSecurity';
      $sopt[5191]['massiveaction'] = FALSE;

      $sopt[5194]['table']='glpi_plugin_fusioninventory_networkequipments';
      $sopt[5194]['field']='last_fusioninventory_update';
      $sopt[5194]['linkfield']='';
      $sopt[5194]['name']=__('FusInv', 'fusioninventory')." - ".
         __('Last inventory', 'fusioninventory');
      $sopt[5194]['datatype'] = 'datetime';
      $sopt[5194]['massiveaction'] = FALSE;

      $sopt[5195]['table']='glpi_plugin_fusioninventory_networkequipments';
      $sopt[5195]['field']='cpu';
      $sopt[5195]['linkfield']='';
      $sopt[5195]['name']=__('FusInv', 'fusioninventory')." - ".
         __('CPU usage (in %)', 'fusioninventory');

      $sopt[5195]['datatype'] = 'number';

      $sopt[5196]['table']         = 'glpi_plugin_fusioninventory_networkequipments';
      $sopt[5196]['field']         = 'sysdescr';
      $sopt[5196]['linkfield']     = '';
      $sopt[5196]['name']          = __('Sysdescr', 'fusioninventory');
      $sopt[5196]['datatype']      = 'text';

   }
   return $sopt;
}



function plugin_fusioninventory_giveItem($type, $id, $data, $num) {
   global $CFG_GLPI;

   $searchopt = &Search::getOptions($type);
   $table = $searchopt[$id]["table"];
   $field = $searchopt[$id]["field"];

   switch ($table.'.'.$field) {

      case "glpi_plugin_fusioninventory_taskjobs.status":
         $pfTaskjobstate = new PluginFusioninventoryTaskjobstate();
         return $pfTaskjobstate->stateTaskjob($data['raw']['id'], '200', 'htmlvar', 'simple');
         break;

      case "glpi_plugin_fusioninventory_agents.version":
         $array = importArrayFromDB($data['raw']['ITEM_'.$num]);
         $input = "";
         foreach ($array as $name=>$version){
            $input .= "<strong>".$name."</strong> : ".$version."<br/>";
         }
         $input .= "*";
         $input = str_replace("<br/>*", "", $input);
         return $input;
         break;

      case "glpi_plugin_fusioninventory_credentials.itemtype":
        if ($label = PluginFusioninventoryCredential::getLabelByItemtype($data['raw']['ITEM_'.$num])) {
           return $label;
        } else {
           return '';
        }
        break;

     case 'glpi_plugin_fusioninventory_taskjoblogs.state':
        $pfTaskjoblog = new PluginFusioninventoryTaskjoblog();
        return $pfTaskjoblog->getDivState($data['raw']['ITEM_'.$num]);
        break;

      case 'glpi_plugin_fusioninventory_taskjoblogs.comment':
         $comment = $data['raw']['ITEM_'.$num];
         return PluginFusioninventoryTaskjoblog::convertComment($comment);
         break;

      case 'glpi_plugin_fusioninventory_taskjobstates.plugin_fusioninventory_agents_id':
         $pfAgent = new PluginFusioninventoryAgent();
         $pfAgent->getFromDB($data['raw']['ITEM_'.$num]);
         if (!isset($pfAgent->fields['name'])) {
            return NOT_AVAILABLE;
         }
         $itemtype = PluginFusioninventoryTaskjoblog::getStateItemtype($data['raw']['ITEM_0']);
         if ($itemtype == 'PluginFusioninventoryDeployPackage') {
            $computer = new Computer();
            $computer->getFromDB($pfAgent->fields['computers_id']);
            return $computer->getLink(1);
         }
         return $pfAgent->getLink(1);
         break;

      case 'glpi_plugin_fusioninventory_ignoredimportdevices.ip':
      case 'glpi_plugin_fusioninventory_ignoredimportdevices.mac':
         $array = importArrayFromDB($data['raw']['ITEM_'.$num]);
         return implode("<br/>", $array);
         break;

      case 'glpi_plugin_fusioninventory_ignoredimportdevices.method':
         $a_methods = PluginFusioninventoryStaticmisc::getmethods();
         foreach ($a_methods as $mdata) {
            if ($mdata['method'] == $data['raw']['ITEM_'.$num]) {
               return $mdata['name'];
            }
         }
         break;
   }

   if ($table == "glpi_plugin_fusioninventory_agentmodules") {
      if ($type == 'Computer') {
         $pfAgentmodule = new PluginFusioninventoryAgentmodule();
         $a_modules = $pfAgentmodule->find("`modulename`='".$field."'");
         $data2 = current($a_modules);
         if ($table.".".$field ==
                 "glpi_plugin_fusioninventory_agentmodules.".$data2['modulename']) {
            if (strstr($data['raw']["ITEM_".$num."_0"], '"'.$data['raw']["ITEM_".$num."_1"].'"')) {
               if ($data['raw']['ITEM_'.$num] == '0') {
                  return Dropdown::getYesNo(TRUE);
               } else {
                  return Dropdown::getYesNo(FALSE);
               }

            }
            return Dropdown::getYesNo($data['raw']['ITEM_'.$num]);
         }
      } else {
         $pfAgentmodule = new PluginFusioninventoryAgentmodule();
         $a_modules = $pfAgentmodule->find("`modulename`='".$field."'");
         foreach ($a_modules as $data2) {
            if ($table.".".$field ==
                    "glpi_plugin_fusioninventory_agentmodules.".$data2['modulename']) {
               if (strstr($data['raw']["ITEM_".$num."_0"], '"'.$data['raw']['id'].'"')) {
                  if ($data['raw']['ITEM_'.$num] == 0) {
                     return Dropdown::getYesNo('1');
                  } else {
                     return Dropdown::getYesNo('0');
                  }
               }
               return Dropdown::getYesNo($data['raw']['ITEM_'.$num]);
            }
         }
      }
   }


   switch ($type) {

      case 'Computer':
         if ($table.'.'.$field == 'glpi_plugin_fusioninventory_networkports.id') {
            if (strstr($data['raw']["ITEM_$num"], "$")) {
               $split=explode("$$$$", $data['raw']["ITEM_$num"]);
               $ports = array();

               foreach ($split as $portconcat) {
                  $split2 = explode("....", $portconcat);
                  if (isset($split2[1])) {
                     $ports[] = $split2[1];
                  }
               }
               $out = implode("<br/>", $ports);
               return $out;
            }
         }
         break;


      // * Networking List (front/networking.php)
      case 'NetworkEquipment':
         switch ($table.'.'.$field) {


         }
         break;

      case 'Printer':
         if ($table.'.'.$field == 'glpi_plugin_fusioninventory_networkequipments.name') {
            if (strstr($data['raw']["ITEM_$num"], "$")) {
               $split=explode("$$$$", $data['raw']["ITEM_$num"]);
               $out = implode("<br/>", $split);
               return $out;
            }
         }
         break;

      // * Authentification List (plugins/fusinvsnmp/front/configsecurity.php)
      case 'PluginFusioninventoryConfigSecurity' :
         switch ($table.'.'.$field) {

            // ** Hidden auth passphrase (SNMP v3)
            case "glpi_plugin_fusioninventory_configsecurities.auth_passphrase" :
               $out = "";
               if (empty($data['raw']["ITEM_$num"])) {

               } else {
                  $out = "********";
               }
               return $out;
               break;

            // ** Hidden priv passphrase (SNMP v3)
            case "glpi_plugin_fusioninventory_configsecurities.priv_passphrase" :
               $out = "";
               if (empty($data['raw']["ITEM_$num"])) {

               } else {
                  $out = "********";
               }
               return $out;
               break;
         }
         break;

      // * Unknown mac addresses connectd on switch - report
      //   (plugins/fusinvsnmp/report/unknown_mac.php)
      case 'PluginFusioninventoryUnmanaged' :
         switch ($table.'.'.$field) {

            // ** FusionInventory - switch
            case "glpi_plugin_fusioninventory_networkequipments.id" :
               $out = '';
               $NetworkPort = new NetworkPort;
               $list = explode("$$$$", $data['raw']["ITEM_$num"]);
               foreach ($list as $numtmp=>$vartmp) {
                  $NetworkPort->getDeviceData($vartmp, 'PluginFusioninventoryUnmanaged');

                  $out .= "<a href=\"".$CFG_GLPI["root_doc"]."/";
                  $out .= "plugins/fusioninventory/front/unmanaged.form.php?id=".$vartmp.
                             "\">";
                  $out .=  $NetworkPort->device_name;
                  if ($CFG_GLPI["view_ID"]) {
                     $out .= " (".$vartmp.")";
                  }
                  $out .=  "</a><br/>";
               }
               return "<center>".$out."</center>";
               break;

            // ** FusionInventory - switch port
            case "glpi_plugin_fusioninventory_networkports.id" :
               $out = '';
               if (!empty($data['raw']["ITEM_$num"])) {
                  $list = explode("$$$$", $data['raw']["ITEM_$num"]);
                  $np = new NetworkPort;
                  foreach ($list as $numtmp=>$vartmp) {
                     $np->getFromDB($vartmp);
                     $out .= "<a href='".$CFG_GLPI['root_doc']."/front/networkport.form.php?id=".
                                $vartmp."'>";
                     $out .= $np->fields["name"]."</a><br/>";
                  }
               }
               return "<center>".$out."</center>";
               break;

            case "glpi_plugin_fusinvsnmp_unmanageds.type" :
               $out = '<center> ';
               switch ($data['raw']["ITEM_$num"]) {
                  case COMPUTER_TYPE:
                     $out .= __('Computers');

                     break;

                  case NETWORKING_TYPE:
                     $out .= __('Networks');

                     break;

                  case PRINTER_TYPE:
                     $out .= __('Printers');

                     break;

                  case PERIPHERAL_TYPE:
                     $out .= __('Devices');

                     break;

                  case PHONE_TYPE:
                     $out .= __('Phones');

                     break;
               }
               $out .= '</center>';
               return $out;
               break;


         }
         break;

      // * Ports date connection - report (plugins/fusinvsnmp/report/ports_date_connections.php)
      case 'PluginFusioninventoryNetworkPort' :
         switch ($table.'.'.$field) {

            // ** Name and link of networking device (switch)
            case "glpi_plugin_fusioninventory_networkports.id" :
               $query = "SELECT `glpi_networkequipments`.`name` AS `name`, `glpi_networkequipments`.`id` AS `id`
                         FROM `glpi_networkequipments`
                              LEFT JOIN `glpi_networkports`
                                        ON `items_id` = `glpi_networkequipments`.`id`
                              LEFT JOIN `glpi_plugin_fusioninventory_networkports`
                                        ON `glpi_networkports`.`id`=`networkports_id`
                         WHERE `glpi_plugin_fusioninventory_networkports`.`id`='".
                            $data['raw']["ITEM_$num"]."'
                         LIMIT 0, 1;";
               $result = $DB->query($query);
               $data2 = $DB->fetch_assoc($result);
               $out = "<a href='".$CFG_GLPI['root_doc']."/front/networking.form.php?id=".
                          $data2["id"]."'>";
               $out.= $data2["name"]."</a>";
            return "<center>".$out."</center>";
            break;

            // ** Name and link of port of networking device (port of switch)
            case "glpi_plugin_fusioninventory_networkports.networkports_id" :
               $NetworkPort=new NetworkPort;
               $NetworkPort->getFromDB($data['raw']["ITEM_$num"]);
               $name = "";
               if (isset($NetworkPort->fields["name"])) {
                  $name = $NetworkPort->fields["name"];
               }
               $out = "<a href='".$CFG_GLPI['root_doc']."/front/networkport.form.php?id=".
                          $data['raw']["ITEM_$num"];
               $out.= "'>".$name."</a>";
               return "<center>".$out."</center>";
               break;

            // ** Location of switch
            case "glpi_locations.id" :
               $out = Dropdown::getDropdownName("glpi_locations", $data['raw']["ITEM_$num"]);
               return "<center>".$out."</center>";
               break;

         }
         break;

      // * range IP list (plugins/fusinvsnmp/front/iprange.php)
      case 'PluginFusioninventoryIPRange' :
         switch ($table.'.'.$field) {


            // ** Display entity name
            case "glpi_entities.name" :
               if ($data['raw']["ITEM_$num"] == '') {
                  $out = Dropdown::getDropdownName("glpi_entities", $data['raw']["ITEM_$num"]);
                  return "<center>".$out."</center>";
               }
               break;

         }
         break;

      case 'PluginFusioninventoryNetworkPortLog' :
         switch ($table.'.'.$field) {

            // ** Display switch and Port
            case "glpi_networkports.id" :
               $Array_device =
                  PluginFusioninventoryNetworkPort::getUniqueObjectfieldsByportID(
                             $data['raw']["ITEM_$num"]
                          );
               $item = new $Array_device["itemtype"];
               $item->getFromDB($Array_device["items_id"]);
               $out = "<div align='center'>" . $item->getLink(1);

               $query = "SELECT *
                         FROM `glpi_networkports`
                         WHERE `id`='" . $data['raw']["ITEM_$num"] . "';";
               $result = $DB->query($query);

               if ($DB->numrows($result) != "0") {
                  $out .= "<br/><a href='".$CFG_GLPI['root_doc']."/front/networkport.form.php?id=";
                  $out .= $data['raw']["ITEM_$num"]."'>".$DB->result($result, 0, "name")."</a>";
               }
               $out .= "</td>";
               return $out;
               break;

            // ** Display GLPI field of device
            case "glpi_plugin_fusinvsnmp_networkportlogs.field" :
//               $out = $FUSIONINVENTORY_MAPPING[NETWORKING_TYPE][$data['raw']["ITEM_$num"]]['name'];
               $out = '';
               $map = new PluginFusioninventoryMapping;
               $mapfields = $map->get('NetworkEquipment', $data['raw']["ITEM_$num"]);
               if ($mapfields != FALSE) {
                  $out = _get('_LANG[\'plugin_fusinvsnmp\'][\'mapping\'][$mapfields["locale"]]');
               }
               return $out;
               break;

            // ** Display Old Value (before changement of value)
            case "glpi_plugin_fusinvsnmp_networkportlogs.old_value" :
               // TODO ADD LINK TO DEVICE
               if ((substr_count($data['raw']["ITEM_$num"], ":") == 5)
                       && (empty($data['raw']["ITEM_3"]))) {
                  return "<center><b>".$data['raw']["ITEM_$num"]."</b></center>";
               }
               break;

            // ** Display New Value (new value modified)
            case "glpi_plugin_fusinvsnmp_networkportlogs.new_value" :
               if ((substr_count($data['raw']["ITEM_$num"], ":") == 5)
                       && (empty($data['raw']["ITEM_3"]))) {
                  return "<center><b>".$data['raw']["ITEM_$num"]."</b></center>";
               }
               break;

         }
         break;

      case "PluginFusioninventoryPrinterLog":
         switch ($table.'.'.$field) {

            case 'glpi_printers.name':

               // Search pages in printer history to limit SQL queries
               if (isset($_SESSION['glpi_plugin_fusioninventory_history_start'])) {
                  unset($_SESSION['glpi_plugin_fusioninventory_history_start']);
               }
               if (isset($_SESSION['glpi_plugin_fusioninventory_history_end'])) {
                  unset($_SESSION['glpi_plugin_fusioninventory_history_end']);
               }
               if ((isset($_SESSION['glpi_plugin_fusioninventory_date_start']))
                       AND (isset($_SESSION['glpi_plugin_fusioninventory_date_end']))) {

                  $query = "SELECT * FROM `glpi_plugin_fusioninventory_printerlogs`
                     WHERE `printers_id`='".$data['raw']['ITEM_0_2']."'
                        AND `date`>= '".$_SESSION['glpi_plugin_fusioninventory_date_start']."'
                        AND `date`<= '".$_SESSION['glpi_plugin_fusioninventory_date_end'].
                           " 23:59:59'
                     ORDER BY date asc
                     LIMIT 1";
                  $result=$DB->query($query);
                  while ($data2=$DB->fetch_array($result)) {
                     $_SESSION['glpi_plugin_fusioninventory_history_start'] = $data2;
                  }
                  $query = "SELECT * FROM `glpi_plugin_fusioninventory_printerlogs`
                     WHERE `printers_id`='".$data['raw']['ITEM_0_2']."'
                        AND `date`>= '".$_SESSION['glpi_plugin_fusioninventory_date_start']."'
                        AND `date`<= '".$_SESSION['glpi_plugin_fusioninventory_date_end'].
                           " 23:59:59'
                     ORDER BY date desc
                     LIMIT 1";
                  $result=$DB->query($query);
                  while ($data2=$DB->fetch_array($result)) {
                     $_SESSION['glpi_plugin_fusioninventory_history_end'] = $data2;
                  }
               }
               return "";
               break;

            }

         switch($table) {

            case 'glpi_plugin_fusioninventory_printerlogs':
               if ((isset($_SESSION['glpi_plugin_fusioninventory_history_start'][$field]))
                      AND (isset($_SESSION['glpi_plugin_fusioninventory_history_end'][$field]))) {
                  $counter_start = $_SESSION['glpi_plugin_fusioninventory_history_start'][$field];
                  $counter_end = $_SESSION['glpi_plugin_fusioninventory_history_end'][$field];
                  if ($_SESSION['glpi_plugin_fusioninventory_date_start'] == "1970-01-01") {
                     $counter_start = 0;
                  }
                  $number = $counter_end - $counter_start;
                  if (($number == '0')) {
                      return '-';
                  } else {
                     return $number;
                  }

               } else {
                  return '-';
               }
               break;

            }
         break;

   }

   return "";
}



function plugin_fusioninventory_searchOptionsValues($item) {
   global $DB;

   if ($item['searchoption']['table'] == 'glpi_plugin_fusioninventory_taskjoblogs'
           AND $item['searchoption']['field'] == 'state') {
      $pfTaskjoblog = new PluginFusioninventoryTaskjoblog();
      $elements = $pfTaskjoblog->dropdownStateValues();
      Dropdown::showFromArray($item['name'], $elements, array('value'=>$item['value']));
      return TRUE;
   } else if ($item['searchoption']['table'] == 'glpi_plugin_fusioninventory_taskjobstates'
           AND $item['searchoption']['field'] == 'uniqid') {
      $elements = array();
      $query = "SELECT * FROM `".$item['searchoption']['table']."`
      GROUP BY `uniqid`
      ORDER BY `uniqid`";
      $result=$DB->query($query);
      while ($data=$DB->fetch_array($result)) {
         $elements[$data['uniqid']] = $data['uniqid'];
      }
      Dropdown::showFromArray($item['name'], $elements, array('value'=>$item['value']));
      return TRUE;
   }
}



// Define Dropdown tables to be manage in GLPI :
function plugin_fusioninventory_getDropdown() {
   return array ();
}

/* Cron */
function cron_plugin_fusioninventory() {
//   TODO :Disable for the moment (may be check if functions is good or not
//   $ptud = new PluginFusioninventoryUnmanaged;
//   $ptud->CleanOrphelinsConnections();
//   $ptud->FusionUnknownKnownDevice();
//   TODO : regarder les 2 lignes juste en dessous !!!!!
//   #Clean server script processes history
//   $pfisnmph = new PluginFusioninventoryNetworkPortLog;
//   $pfisnmph->cronCleanHistory();

   return 1;
}



function plugin_fusioninventory_install() {

   ini_set("max_execution_time", "0");

   if (basename($_SERVER['SCRIPT_NAME']) != "cli_install.php") {
      Html::header(__('Setup'), $_SERVER['PHP_SELF'], "config", "plugins");
      $migrationname = 'Migration';
   } else {
      $migrationname = 'CliMigration';
   }

   require_once (GLPI_ROOT . "/plugins/fusioninventory/install/update.php");
   $version_detected = pluginFusioninventoryGetCurrentVersion();

   if (
      isset($version_detected)
      AND (
         defined('FORCE_UPGRADE')
         OR (
            $version_detected != PLUGIN_FUSIONINVENTORY_VERSION
            AND $version_detected!='0'
         )
      )
   ) {
      pluginFusioninventoryUpdate($version_detected, $migrationname);
   } else if ((isset($version_detected))
           && ($version_detected == PLUGIN_FUSIONINVENTORY_VERSION)) {
         //Same version : Nothing to do
   } else {
      require_once (GLPI_ROOT . "/plugins/fusioninventory/install/install.php");
      pluginFusioninventoryInstall(PLUGIN_FUSIONINVENTORY_VERSION, $migrationname);
   }

   return TRUE;
}



// Uninstall process for plugin : need to return TRUE if succeeded
function plugin_fusioninventory_uninstall() {
   require_once(GLPI_ROOT . "/plugins/fusioninventory/inc/setup.class.php");
   require_once(GLPI_ROOT . "/plugins/fusioninventory/inc/profile.class.php");
   return PluginFusioninventorySetup::uninstall();
}



function plugin_fusioninventory_MassiveActions($type) {

   $sep = MassiveAction::CLASS_ACTION_SEPARATOR;
   $ma = array ();

   switch ($type) {

      case "Computer":
         if(Session::haveRight('plugin_fusioninventory_lock', UPDATE)) {
            $ma["PluginFusioninventoryLock".$sep."manage_locks"] 
               = _n('Lock', 'Locks', 2, 'fusioninventory')." (".strtolower(_n('Field', 'Fields', 2)).")";
         }
         if(Session::haveRight('plugin_fusioninventory_task', UPDATE)) {
            $ma["PluginFusioninventoryTask".$sep."target_task"] 
               = __('Target a task', 'fusioninventory');
         }
         if(Session::haveRight('plugin_fusioninventory_group', UPDATE)) {
            $ma["PluginFusioninventoryDeployGroup".$sep."add_to_static_group"]
               = __('Add to static group', 'fusioninventory');
         }
         break;

      case "NetworkEquipment":
      case "Printer":
         if(Session::haveRight('plugin_fusioninventory_lock', UPDATE)) {
            $ma["PluginFusioninventoryLock".$sep."manage_locks"] 
               = _n('Lock', 'Locks', 2, 'fusioninventory')." (".strtolower(_n('Field', 'Fields', 2)).")";
         }
         if(Session::haveRight('plugin_fusioninventory_configsecurity', UPDATE)) {
            $ma["PluginFusioninventoryConfigSecurity".$sep."assign_auth"] 
               = __('Assign SNMP authentication', 'fusioninventory');
         }

         break;
   }
   return $ma;
}

function plugin_fusioninventory_MassiveActionsFieldsDisplay($options=array()) {

   $table = $options['options']['table'];
   $field = $options['options']['field'];
   $linkfield = $options['options']['linkfield'];

   switch ($table.".".$field) {

      case "glpi_plugin_fusioninventory_unmanageds.item_type":
         $type_list = array();
         $type_list[] = 'Computer';
         $type_list[] = 'NetworkEquipment';
         $type_list[] = 'Printer';
         $type_list[] = 'Peripheral';
         $type_list[] = 'Phone';
         Dropdown::showItemTypes($linkfield, $type_list,
                                          array('value' => 0));
         return TRUE;
         break;

      case 'glpi_plugin_fusioninventory_configsecurities.name':
         Dropdown::show("PluginFusioninventoryConfigSecurity",
                        array('name' => $linkfield));
         return TRUE;
         break;

      case 'glpi_plugin_fusioninventory_agents.id' :
         Dropdown::show("PluginFusinvsnmpAgent",
                        array('name' => $linkfield,
                              'comment' => FALSE));
         return TRUE;
         break;

      case 'glpi_plugin_fusioninventory_agents.threads_networkdiscovery' :
         Dropdown::showNumber("threads_networkdiscovery", array(
             'value' => $linkfield,
             'min' => 1,
             'max' => 400)
         );
         return TRUE;
         break;

      case 'glpi_plugin_fusioninventory_agents.threads_networkinventory' :
         Dropdown::showNumber("threads_networkinventory", array(
             'value' => $linkfield,
             'min' => 1,
             'max' => 400)
         );
         return TRUE;
         break;

      case 'glpi_entities.name' :
         if (Session::isMultiEntitiesMode()) {
            Dropdown::show("Entities",
                           array('name' => "entities_id",
                           'value' => $_SESSION["glpiactive_entity"]));
         }
         return TRUE;
         break;

   }

   return FALSE;
}


function plugin_fusioninventory_addSelect($type, $id, $num) {

   $searchopt = &Search::getOptions($type);
   $table = $searchopt[$id]["table"];
   $field = $searchopt[$id]["field"];

   switch ($type) {

      case 'PluginFusioninventoryAgent':

         $pfAgentmodule = new PluginFusioninventoryAgentmodule();
         $a_modules = $pfAgentmodule->find();
         foreach ($a_modules as $data) {
            if ($table.".".$field ==
                    "glpi_plugin_fusioninventory_agentmodules.".$data['modulename']) {
               return " `FUSION_".$data['modulename']."`.`is_active` AS ITEM_$num, ".
                          "`FUSION_".$data['modulename']."`.`exceptions`  AS ITEM_".$num."_0, ";
            }
         }
         break;

      case 'Computer':

         switch ($table.".".$field) {

         // ** FusionInventory - switch
            case "glpi_plugin_fusioninventory_networkequipments.name" :
               return "GROUP_CONCAT(glpi_networkequipments.name SEPARATOR '$$$$') AS ITEM_$num, ";
               break;

            // ** FusionInventory - switch port
            case "glpi_plugin_fusioninventory_networkports.id" :
               return "GROUP_CONCAT( DISTINCT
                     CONCAT_WS('....', FUSIONINVENTORY_22.items_id, FUSIONINVENTORY_22.name)
                  SEPARATOR '$$$$') AS ITEM_$num, ";
               break;

         }
         $a_agent_modules = PluginFusioninventoryAgentmodule::getModules();
         foreach ($a_agent_modules as $module) {
            if ($table.".".$field ==
                    'glpi_plugin_fusioninventory_agentmodules.'.$module) {

               return " `FUSION_".$module."`.`is_active` AS ITEM_$num, ".
                          "`FUSION_".$module."`.`exceptions`  AS ITEM_".$num."_0, ".
                          "`agent".strtolower($module)."`.`id`  AS ITEM_".$num."_1, ";
            }
         }
         break;

      // * PRINTER List (front/printer.php)
      case 'Printer':
         switch ($table.".".$field) {

         // ** FusionInventory - switch
            case "glpi_plugin_fusioninventory_networkequipments.name" :
               return "GROUP_CONCAT(glpi_networkequipments.name SEPARATOR '$$$$') AS ITEM_$num, ";
               break;

            // ** FusionInventory - switch port
            case "glpi_plugin_fusioninventory_networkports.id" :
               return "GROUP_CONCAT( FUSIONINVENTORY_22.name SEPARATOR '$$$$') AS ITEM_$num, ";
               break;

            case "glpi_plugin_fusioninventory_configsecurities.name" :
               return "glpi_plugin_fusioninventory_configsecurities.name AS ITEM_$num, ";
               break;

         }
         break;

      case 'PluginFusioninventoryUnmanaged' :
         switch ($table.".".$field) {

            case "glpi_networkequipments.device" :
               return "GROUP_CONCAT( DISTINCT FUSIONINVENTORY_12.items_id SEPARATOR '$$$$') ".
                          "AS ITEM_$num, ";
               break;

            case "glpi_networkports.NetworkPort" :
               return "GROUP_CONCAT( DISTINCT FUSIONINVENTORY_22.".$field." SEPARATOR '$$$$') ".
                          "AS ITEM_$num, ";
               break;

           }
         break;

      case 'PluginFusioninventoryIPRange' :
         switch ($table.".".$searchopt[$id]["linkfield"]) {

            case "glpi_plugin_fusioninventory_agents.plugin_fusinvsnmp_agents_id_query" :
               return "GROUP_CONCAT( DISTINCT CONCAT(gpta.name, '$$', gpta.id) SEPARATOR '$$$$') ".
                          "AS ITEM_$num, ";
               break;

         }
         break;

      case "PluginFusioninventoryPrinterLog":
         if ($table.".".$field == "glpi_users.name") {
            return " `glpi_users`.`name` AS ITEM_$num, `glpi_users`.`realname` ".
                        "AS ITEM_".$num."_2, `glpi_users`.`id` AS ITEM_".$num."_3, ".
                        "`glpi_users`.`firstname` AS ITEM_".$num."_4, ";
         }
         break;

      case 'PluginFusioninventoryPrinterLogReport':

         if ($table == 'glpi_plugin_fusioninventory_printerlogs') {
            if (strstr($field, 'pages_') OR $field == 'scanned') {
               return " (
                  (SELECT ".$field." FROM glpi_plugin_fusioninventory_printerlogs
                     WHERE printers_id = glpi_printers.id
                        AND date <= '".$_SESSION['glpi_plugin_fusioninventory_date_end']." 23:59:59'
                     ORDER BY date DESC LIMIT 1)
                  -
                  (SELECT ".$field." FROM glpi_plugin_fusioninventory_printerlogs
                     WHERE printers_id = glpi_printers.id
                        AND date >= '".$_SESSION['glpi_plugin_fusioninventory_date_start'].
                           " 00:00:00'  ORDER BY date  LIMIT 1)
                  )  AS ITEM_$num, ";
            }
         }
         break;

   }
   return "";
}


function plugin_fusioninventory_forceGroupBy($type) {
    return FALSE;
}


function plugin_fusioninventory_addLeftJoin($itemtype, $ref_table, $new_table, $linkfield,
                                            &$already_link_tables) {

   switch ($itemtype) {

      case 'PluginFusioninventoryAgent':
         $pfAgentmodule = new PluginFusioninventoryAgentmodule();
         $a_modules = $pfAgentmodule->find();
         foreach ($a_modules as $data) {
            if ($new_table.".".$linkfield ==
                    "glpi_plugin_fusioninventory_agentmodules.".$data['modulename']) {
               return " LEFT JOIN `glpi_plugin_fusioninventory_agentmodules` AS FUSION_".
                       $data['modulename']."
                          ON FUSION_".$data['modulename'].".`modulename`=".
                             "'".$data['modulename']."' ";
            }
         }
         break;


      case 'PluginFusioninventoryTaskjoblog':
//         echo $new_table.".".$linkfield."<br/>";
         $taskjob = 0;
         $already_link_tables_tmp = $already_link_tables;
         array_pop($already_link_tables_tmp);
         foreach ($already_link_tables_tmp AS $tmp_table) {
            if ($tmp_table == "glpi_plugin_fusioninventory_tasks"
                    OR $tmp_table == "glpi_plugin_fusioninventory_taskjobs"
                    OR $tmp_table == "glpi_plugin_fusioninventory_taskjobstates") {
               $taskjob = 1;
            }
         }

         switch ($new_table.".".$linkfield) {

            case 'glpi_plugin_fusioninventory_tasks.plugin_fusioninventory_tasks_id':
               $ret = '';
               if ($taskjob == '0') {
                  $ret = ' LEFT JOIN `glpi_plugin_fusioninventory_taskjobstates` ON
                     (`plugin_fusioninventory_taskjobstates_id` = '.
                          '`glpi_plugin_fusioninventory_taskjobstates`.`id` )
                  LEFT JOIN `glpi_plugin_fusioninventory_taskjobs` ON
                     (`plugin_fusioninventory_taskjobs_id` = '.
                          '`glpi_plugin_fusioninventory_taskjobs`.`id` ) ';
               }
               $ret .= ' LEFT JOIN `glpi_plugin_fusioninventory_tasks` ON
                  (`plugin_fusioninventory_tasks_id` = `glpi_plugin_fusioninventory_tasks`.`id`) ';
               return $ret;
               break;

            case 'glpi_plugin_fusioninventory_taskjobs.plugin_fusioninventory_taskjobs_id':
            case 'glpi_plugin_fusioninventory_taskjobstates.'.
                    'plugin_fusioninventory_taskjobstates_id':
               if ($taskjob == '0') {
                  return ' LEFT JOIN `glpi_plugin_fusioninventory_taskjobstates` ON
                     (`plugin_fusioninventory_taskjobstates_id` = '.
                          '`glpi_plugin_fusioninventory_taskjobstates`.`id` )
                  LEFT JOIN `glpi_plugin_fusioninventory_taskjobs` ON
                     (`plugin_fusioninventory_taskjobs_id` = '.
                          '`glpi_plugin_fusioninventory_taskjobs`.`id` ) ';
               }
               return ' ';
               break;

         }
         break;

      case 'PluginFusioninventoryTask':
         if ($new_table.".".$linkfield == 'glpi_plugin_fusioninventory_taskjoblogs.'.
                 'plugin_fusioninventory_taskjoblogs_id') {
            return "LEFT JOIN `glpi_plugin_fusioninventory_taskjobs` AS taskjobs
                     ON `plugin_fusioninventory_tasks_id` = `glpi_plugin_fusioninventory_tasks`.`id`
               LEFT JOIN `glpi_plugin_fusioninventory_taskjobstates` AS taskjobstates
                     ON taskjobstates.`id` =
                  (SELECT MAX(`id`)
                     FROM glpi_plugin_fusioninventory_taskjobstates
                   WHERE plugin_fusioninventory_taskjobs_id = taskjobs.`id`
                   ORDER BY id DESC
                   LIMIT 1
                  )
               LEFT JOIN `glpi_plugin_fusioninventory_taskjoblogs`
                  ON `glpi_plugin_fusioninventory_taskjoblogs`.`id` =
                  (SELECT MAX(`id`)
                     FROM `glpi_plugin_fusioninventory_taskjoblogs`
                   WHERE `plugin_fusioninventory_taskjobstates_id`= taskjobstates.`id`
                   ORDER BY id DESC LIMIT 1
                  )";
         }

         break;

      case 'Computer':

          switch ($new_table.".".$linkfield) {

              case 'glpi_plugin_fusioninventory_agents.plugin_fusioninventory_agents_id':
                  return " LEFT JOIN `glpi_plugin_fusioninventory_agents`
                  ON (`glpi_computers`.`id`=`glpi_plugin_fusioninventory_agents`.`computers_id`) ";
                  break;

              case 'glpi_plugin_fusioninventory_inventorycomputercomputers.id':
                 return " LEFT JOIN `glpi_plugin_fusioninventory_inventorycomputercomputers`
                    AS glpi_plugin_fusioninventory_inventorycomputercomputers_id
                    ON (`glpi_computers`.`id` = ".
                      "`glpi_plugin_fusioninventory_inventorycomputercomputers_id`.".
                      "`computers_id` ) ";
                 break;

            // ** FusionInventory - switch
            case "glpi_plugin_fusioninventory_networkequipments.plugin_fusioninventory_networkequipments_id" :
               $table_networking_ports = 0;
               foreach ($already_link_tables AS $num=>$tmp_table) {
                  if ($tmp_table == "glpi_networkports.") {
                     $table_networking_ports = 1;
                  }
               }
               if ($table_networking_ports == "1") {
                  return " LEFT JOIN glpi_networkports_networkports AS FUSIONINVENTORY_11 ON glpi_networkports.id = FUSIONINVENTORY_11.networkports_id_1 OR glpi_networkports.id = FUSIONINVENTORY_11.networkports_id_2 ".
                     " LEFT JOIN glpi_networkports AS FUSIONINVENTORY_12 ON FUSIONINVENTORY_12.id = CASE WHEN FUSIONINVENTORY_11.networkports_id_1 = glpi_networkports.id THEN FUSIONINVENTORY_11.networkports_id_2 ELSE FUSIONINVENTORY_11.networkports_id_1 END
                     LEFT JOIN glpi_networkequipments ON FUSIONINVENTORY_12.items_id=glpi_networkequipments.id";

               } else {
                  return " LEFT JOIN glpi_networkports AS FUSIONINVENTORY_10 ON (FUSIONINVENTORY_10.items_id = glpi_computers.id AND FUSIONINVENTORY_10.itemtype='Computer') ".
                     " LEFT JOIN glpi_networkports_networkports AS FUSIONINVENTORY_11 ON FUSIONINVENTORY_10.id = FUSIONINVENTORY_11.networkports_id_1 OR FUSIONINVENTORY_10.id = FUSIONINVENTORY_11.networkports_id_2 ".
                     " LEFT JOIN glpi_networkports AS FUSIONINVENTORY_12 ON FUSIONINVENTORY_12.id = CASE WHEN FUSIONINVENTORY_11.networkports_id_1 = FUSIONINVENTORY_10.id THEN FUSIONINVENTORY_11.networkports_id_2 ELSE FUSIONINVENTORY_11.networkports_id_1 END
                     LEFT JOIN glpi_networkequipments ON FUSIONINVENTORY_12.items_id=glpi_networkequipments.id";
               }
               break;

            // ** FusionInventory - switch port
            case "glpi_plugin_fusioninventory_networkports.plugin_fusioninventory_networkports_id" :
               $table_networking_ports = 0;
               $table_fusinvsnmp_networking = 0;
               foreach ($already_link_tables AS $num=>$tmp_table) {
                  if ($tmp_table == "glpi_networkports.") {
                     $table_networking_ports = 1;
                  }
                  if ($tmp_table == "glpi_plugin_fusinvsnmp_networkequipments.id") {
                     $table_fusinvsnmp_networking = 1;
                  }
               }
               if ($table_fusinvsnmp_networking == "1") {
                  return " LEFT JOIN glpi_networkports AS FUSIONINVENTORY_22 ON FUSIONINVENTORY_22.id=FUSIONINVENTORY_12.id ";
               } else if ($table_networking_ports == "1") {
                  return " LEFT JOIN glpi_networkports_networkports AS FUSIONINVENTORY_21 ON glpi_networkports.id = FUSIONINVENTORY_21.networkports_id_1 OR glpi_networkports.id = FUSIONINVENTORY_21.networkports_id_2 ".
                     " LEFT JOIN glpi_networkports AS FUSIONINVENTORY_22 ON FUSIONINVENTORY_22.id = CASE WHEN FUSIONINVENTORY_21.networkports_id_1 = glpi_networkports.id THEN FUSIONINVENTORY_21.networkports_id_2 ELSE FUSIONINVENTORY_21.networkports_id_1 END ";
               } else {
                  return " LEFT JOIN glpi_networkports AS FUSIONINVENTORY_20 ON (FUSIONINVENTORY_20.items_id = glpi_computers.id AND FUSIONINVENTORY_20.itemtype='Computer') ".
                     " LEFT JOIN glpi_networkports_networkports AS FUSIONINVENTORY_21 ON FUSIONINVENTORY_20.id = FUSIONINVENTORY_21.networkports_id_1 OR FUSIONINVENTORY_20.id = FUSIONINVENTORY_21.networkports_id_2 ".
                     " LEFT JOIN glpi_networkports AS FUSIONINVENTORY_22 ON FUSIONINVENTORY_22.id = CASE WHEN FUSIONINVENTORY_21.networkports_id_1 = FUSIONINVENTORY_20.id THEN FUSIONINVENTORY_21.networkports_id_2 ELSE FUSIONINVENTORY_21.networkports_id_1 END ";

               }
               break;

         }
         $a_agent_modules = PluginFusioninventoryAgentmodule::getModules();
         foreach ($a_agent_modules as $module) {
            if ($new_table.".".$linkfield ==
                    'glpi_plugin_fusioninventory_agentmodules.'.$module) {
               return " LEFT JOIN `glpi_plugin_fusioninventory_agentmodules` AS FUSION_".$module."
                             ON FUSION_".$module.".`modulename`='".$module."'
                          LEFT JOIN `glpi_plugin_fusioninventory_agents` as agent".strtolower($module)."
                             ON (`glpi_computers`.`id`=`agent".strtolower($module)."`.`computers_id`)";
            }
         }
         break;

      case 'NetworkEquipment':
         $already_link_tables_tmp = $already_link_tables;
         array_pop($already_link_tables_tmp);

         $leftjoin_fusioninventory_networkequipments = 1;
         if ((in_array('glpi_plugin_fusioninventory_networkequipments', $already_link_tables_tmp))
            OR (in_array('glpi_plugin_fusioninventory_configsecurities',
                         $already_link_tables_tmp))
            ) {

            $leftjoin_fusioninventory_networkequipments = 0;
         }

         switch ($new_table.".".$linkfield) {

            // ** FusionInventory - last inventory
            case "glpi_plugin_fusioninventory_networkequipments." :
               if ($leftjoin_fusioninventory_networkequipments == "1") {
                  return " LEFT JOIN glpi_plugin_fusioninventory_networkequipments
                     ON (glpi_networkequipments.id = ".
                          "glpi_plugin_fusioninventory_networkequipments.networkequipments_id) ";
               }
               return " ";
               break;

            // ** FusionInventory - cpu
            case "glpi_plugin_fusioninventory_networkequipments.".
                    "plugin_fusioninventory_networkequipments_id" :
               if ($leftjoin_fusioninventory_networkequipments == "1") {
                     return " LEFT JOIN glpi_plugin_fusioninventory_networkequipments
                        ON (glpi_networkequipments.id = ".
                             "glpi_plugin_fusioninventory_networkequipments.networkequipments_id) ";
               }
               return " ";
               break;


            // ** FusionInventory - SNMP authentification
            case "glpi_plugin_fusioninventory_configsecurities.".
                    "plugin_fusioninventory_configsecurities_id":
               $return = "";
               if ($leftjoin_fusioninventory_networkequipments == "1") {
                  $return = " LEFT JOIN glpi_plugin_fusioninventory_networkequipments
                     ON glpi_networkequipments.id = ".
                          "glpi_plugin_fusioninventory_networkequipments.networkequipments_id ";
               }
               return $return." LEFT JOIN glpi_plugin_fusioninventory_configsecurities
                  ON glpi_plugin_fusioninventory_networkequipments.".
                       "plugin_fusioninventory_configsecurities_id = ".
                          "glpi_plugin_fusioninventory_configsecurities.id ";
               break;

            case "glpi_plugin_fusioninventory_networkequipments.sysdescr":
               $return = " ";
               if ($leftjoin_fusioninventory_networkequipments == "1") {
                  $return = " LEFT JOIN glpi_plugin_fusioninventory_networkequipments
                     ON glpi_networkequipments.id = ".
                          "glpi_plugin_fusioninventory_networkequipments.networkequipments_id ";
               }
               return $return;
               break;

         }
         break;

      case 'Printer':
         $leftjoin_fusioninventory_printers = 1;
         if ((in_array('glpi_plugin_fusioninventory_printers', $already_link_tables))) {

            $leftjoin_fusioninventory_printers = 0;
         }
         switch ($new_table.".".$linkfield) {

            // ** FusionInventory - last inventory
            case "glpi_plugin_fusioninventory_printers.plugin_fusioninventory_printers_id" :
               if ($leftjoin_fusioninventory_printers == "1") {
                  return " LEFT JOIN glpi_plugin_fusioninventory_printers
                     ON (glpi_printers.id = glpi_plugin_fusioninventory_printers.printers_id) ";
               }
               return " ";
               break;

            // ** FusionInventory - SNMP authentification
            case "glpi_plugin_fusioninventory_configsecurities.".
                    "plugin_fusioninventory_configsecurities_id":
               $return = "";
               if ($leftjoin_fusioninventory_printers == "1") {
                  $return = " LEFT JOIN glpi_plugin_fusioninventory_printers
                     ON glpi_printers.id = glpi_plugin_fusioninventory_printers.printers_id ";
               }
               return $return." LEFT JOIN glpi_plugin_fusioninventory_configsecurities
                  ON glpi_plugin_fusioninventory_printers.plugin_fusioninventory_configsecurities_id
                        = glpi_plugin_fusioninventory_configsecurities.id ";
               break;

            case "glpi_plugin_fusioninventory_printers.plugin_fusioninventory_printers_id":
               $return = " ";
               if ($leftjoin_fusioninventory_printers == "1") {
                  $return = " LEFT JOIN glpi_plugin_fusioninventory_printers
                     ON glpi_printers.id = glpi_plugin_fusioninventory_printers.printers_id ";
               }
               return $return;
               break;

            // ** FusionInventory - switch
            case "glpi_plugin_fusioninventory_networkequipments.plugin_fusioninventory_networkequipments_id" :
               $table_networking_ports = 0;
               foreach ($already_link_tables AS $num=>$tmp_table) {
                  if ($tmp_table == "glpi_networkports.") {
                     $table_networking_ports = 1;
                  }
               }
               if ($table_networking_ports == "1") {
                  return " LEFT JOIN glpi_networkports_networkports AS FUSIONINVENTORY_11 ON glpi_networkports.id = FUSIONINVENTORY_11.networkports_id_1 OR glpi_networkports.id = FUSIONINVENTORY_11.networkports_id_2 ".
                     " LEFT JOIN glpi_networkports AS FUSIONINVENTORY_12 ON FUSIONINVENTORY_12.id = CASE WHEN FUSIONINVENTORY_11.networkports_id_1 = glpi_networkports.id THEN FUSIONINVENTORY_11.networkports_id_2 ELSE FUSIONINVENTORY_11.networkports_id_1 END
                     LEFT JOIN glpi_networkequipments ON FUSIONINVENTORY_12.items_id=glpi_networkequipments.id";

               } else {
                  return " LEFT JOIN glpi_networkports AS FUSIONINVENTORY_10 ON (FUSIONINVENTORY_10.items_id = glpi_printers.id AND FUSIONINVENTORY_10.itemtype='Printer') ".
                     " LEFT JOIN glpi_networkports_networkports AS FUSIONINVENTORY_11 ON FUSIONINVENTORY_10.id = FUSIONINVENTORY_11.networkports_id_1 OR FUSIONINVENTORY_10.id = FUSIONINVENTORY_11.networkports_id_2 ".
                     " LEFT JOIN glpi_networkports AS FUSIONINVENTORY_12 ON FUSIONINVENTORY_12.id = CASE WHEN FUSIONINVENTORY_11.networkports_id_1 = FUSIONINVENTORY_10.id THEN FUSIONINVENTORY_11.networkports_id_2 ELSE FUSIONINVENTORY_11.networkports_id_1 END
                     LEFT JOIN glpi_networkequipments ON FUSIONINVENTORY_12.items_id=glpi_networkequipments.id";
               }
               break;

            // ** FusionInventory - switch port
            case "glpi_plugin_fusioninventory_networkports.plugin_fusioninventory_networkports_id" :
               $table_networking_ports = 0;
               $table_fusinvsnmp_networking = 0;
               foreach ($already_link_tables AS $num=>$tmp_table) {
                  if ($tmp_table == "glpi_networkports.") {
                     $table_networking_ports = 1;
                  }
                  if ($tmp_table == "glpi_plugin_fusinvsnmp_networkequipments.id") {
                     $table_fusinvsnmp_networking = 1;
                  }
               }
               if ($table_fusinvsnmp_networking == "1") {
                  return " LEFT JOIN glpi_networkports AS FUSIONINVENTORY_22 ON FUSIONINVENTORY_22.id=FUSIONINVENTORY_12.id ";
               } else if ($table_networking_ports == "1") {
                  return " LEFT JOIN glpi_networkports_networkports AS FUSIONINVENTORY_21 ON glpi_networkports.id = FUSIONINVENTORY_21.networkports_id_1 OR glpi_networkports.id = FUSIONINVENTORY_21.networkports_id_2 ".
                     " LEFT JOIN glpi_networkports AS FUSIONINVENTORY_22 ON FUSIONINVENTORY_22.id = CASE WHEN FUSIONINVENTORY_21.networkports_id_1 = glpi_networkports.id THEN FUSIONINVENTORY_21.networkports_id_2 ELSE FUSIONINVENTORY_21.networkports_id_1 END ";
               } else {
                  return " LEFT JOIN glpi_networkports AS FUSIONINVENTORY_20 ON (FUSIONINVENTORY_20.items_id = glpi_printers.id AND FUSIONINVENTORY_20.itemtype='Printer') ".
                     " LEFT JOIN glpi_networkports_networkports AS FUSIONINVENTORY_21 ON FUSIONINVENTORY_20.id = FUSIONINVENTORY_21.networkports_id_1 OR FUSIONINVENTORY_20.id = FUSIONINVENTORY_21.networkports_id_2 ".
                     " LEFT JOIN glpi_networkports AS FUSIONINVENTORY_22 ON FUSIONINVENTORY_22.id = CASE WHEN FUSIONINVENTORY_21.networkports_id_1 = FUSIONINVENTORY_20.id THEN FUSIONINVENTORY_21.networkports_id_2 ELSE FUSIONINVENTORY_21.networkports_id_1 END ";

               }
               break;


         }
         break;

      case 'PluginFusioninventoryPrinterLogReport':
//echo $new_table.".".$linkfield."<br/>";
         switch ($new_table.".".$linkfield) {

            case 'glpi_locations.locations_id':
               return " LEFT JOIN `glpi_locations`
                  ON (`glpi_printers`.`locations_id` = `glpi_locations`.`id`) ";
               break;

            case 'glpi_printertypes.printertypes_id':
               return " LEFT JOIN `glpi_printertypes`
                  ON (`glpi_printers`.`printertypes_id` = `glpi_printertypes`.`id`) ";
               break;

            case 'glpi_states.states_id':
               return " LEFT JOIN `glpi_states`
                  ON (`glpi_printers`.`states_id` = `glpi_states`.`id`) ";
               break;

            case 'glpi_users.users_id':
               return " LEFT JOIN `glpi_users` AS glpi_users
                  ON (`glpi_printers`.`users_id` = `glpi_users`.`id`) ";
               break;

            case 'glpi_manufacturers.manufacturers_id':
               return " LEFT JOIN `glpi_manufacturers`
                  ON (`glpi_printers`.`manufacturers_id` = `glpi_manufacturers`.`id`) ";
               break;

            case 'glpi_networkports.printers_id':
               return " LEFT JOIN `glpi_networkports`
                  ON (`glpi_printers`.`id` = `glpi_networkports`.`items_id` AND `glpi_networkports`.`itemtype` = 'Printer') ";
               break;

            case 'glpi_plugin_fusioninventory_printerlogs.plugin_fusioninventory_printerlogs_id':
               return " LEFT JOIN `glpi_plugin_fusioninventory_printerlogs`
                  ON (`glpi_plugin_fusioninventory_printerlogs`.`printers_id` = `glpi_printers`.`id`) ";
               break;

            case 'glpi_networkports.networkports_id':
               return " LEFT JOIN `glpi_networkports` ON (`glpi_printers`.`id` = `glpi_networkports`.`items_id` AND `glpi_networkports`.`itemtype` = 'Printer' ) ";
               break;

            case 'glpi_printers.printers_id':
               return " LEFT JOIN `glpi_printers` ON (`glpi_plugin_fusioninventory_printers`.`printers_id` = `glpi_printers`.`id` AND `glpi_printers`.`id` IS NOT NULL ) ";
               break;

         }
         break;

   }
   return "";
}



function plugin_fusioninventory_addOrderBy($type, $id, $order, $key=0) {
   return "";
}


function plugin_fusioninventory_addDefaultWhere($type) {
   if ($type == 'PluginFusioninventoryTaskjob') {
      return " ( select count(*) FROM `glpi_plugin_fusioninventory_taskjobstates`
         WHERE plugin_fusioninventory_taskjobs_id= `glpi_plugin_fusioninventory_taskjobs`.`id`
         AND `state`!='3' )";
   }
}


function plugin_fusioninventory_addWhere($link, $nott, $type, $id, $val) {

   $searchopt = &Search::getOptions($type);
   $table = $searchopt[$id]["table"];
   $field = $searchopt[$id]["field"];

   switch ($type) {

      case 'PluginFusioninventoryTaskjob' :
         /*
          * WARNING: The following is some minor hack in order to select a range of ids.
          *
          * More precisely, when using the ID filter, you can now put IDs separated by commas.
          * This is used by the DeployPackage class when it comes to check running tasks on some
          * packages.
          */
         if ($table == 'glpi_plugin_fusioninventory_tasks') {
            if ($field == 'id') {
               //check if this range is numeric
               $ids = explode(',', $val);
               foreach($ids as $k=>$i) {
                  if (!is_numeric($i)) {
                     unset($ids[$k]);
                  }
               }

               if (count($ids) >= 1) {
                  return $link." `$table`.`id` IN (".implode(',', $ids).")";
               } else {
                  return "";
               }
            } elseif ($field == 'name') {
               $val = stripslashes($val);
               //decode a json query to match task names in taskjobs list
               $names = json_decode($val);
               if ($names !== NULL && is_array($names)) {
                  $names = array_map(
                     create_function('$a', 'return "\"".$a."\"";'),
                     $names
                  );
                  return $link." `$table`.`name` IN (".implode(',', $names) . ")";
               } else {
                  return "";
               }
            }
         }
      break;

      case 'PluginFusioninventoryAgent':
         $pfAgentmodule = new PluginFusioninventoryAgentmodule();
         $a_modules = $pfAgentmodule->find();
         foreach ($a_modules as $data) {
            if ($table.".".$field == "glpi_plugin_fusioninventory_agentmodules.".
                    $data['modulename']
               ) {
               if (($data['exceptions'] != "[]") AND ($data['exceptions'] != "")) {
                  $a_exceptions = importArrayFromDB($data['exceptions']);
                  $current_id = current($a_exceptions);
                  $in = "(";
                  foreach($a_exceptions as $agent_id) {
                     $in .= $agent_id.", ";
                  }
                  $in .= ")";
                  $in = str_replace(", )", ")", $in);

                  if ($val != $data['is_active']) {
                     return $link." (FUSION_".$data['modulename'].".`exceptions` LIKE '%\"".
                             $current_id."\"%' ) AND `glpi_plugin_fusioninventory_agents`.`id` IN ".
                             $in." ";
                  } else {
                     return $link." `glpi_plugin_fusioninventory_agents`.`id` NOT IN ".$in." ";
                  }
               } else {
                  if ($val != $data['is_active']) {
                     return $link." (FUSION_".$data['modulename'].".`is_active`!='".
                              $data['is_active']."') ";
                  } else {
                     return $link." (FUSION_".$data['modulename'].".`is_active`='".
                              $data['is_active']."') ";
                  }
               }
            }
         }
         break;

      case 'PluginFusioninventoryTaskjoblog':
         if ($field == 'uniqid') {
            return $link." (`".$table."`.`uniqid`='".$val."') ";
         }
         break;

      // * Computer List (front/computer.php)
      case 'Computer':
         switch ($table.".".$field) {

            // ** FusionInventory - switch
            case "glpi_plugin_fusioninventory_networkequipments.name" :
               $ADD = "";
               if ($nott=="0"&&$val=="NULL") {
                  $ADD=" OR glpi_networkequipments.id IS NULL";
               } else if ($nott=="1"&&$val=="NULL") {
                  $ADD=" OR glpi_networkequipments.id IS NOT NULL";
               }
               return $link." (glpi_networkequipments.id  LIKE '%".$val."%' $ADD ) ";
               break;

            // ** FusionInventory - switch port
            case "glpi_plugin_fusioninventory_networkports.id" :
               $ADD = "";
               if ($nott=="0"&&$val=="NULL") {
                  $ADD=" OR FUSIONINVENTORY_22.name IS NULL";
               } else if ($nott=="1"&&$val=="NULL") {
                  $ADD=" OR FUSIONINVENTORY_22.name IS NOT NULL";
               }
               return $link." (FUSIONINVENTORY_22.name  LIKE '%".$val."%' $ADD ) ";
               break;

         }

         $a_agent_modules = PluginFusioninventoryAgentmodule::getModules();
         foreach ($a_agent_modules as $module) {
            if ($table.".".$field == 'glpi_plugin_fusioninventory_agentmodules.'.$module) {
               $pfAgentmodule = new PluginFusioninventoryAgentmodule();
               $a_modules = $pfAgentmodule->find("`modulename`='".$module."'");
               $data = current($a_modules);
               if (($data['exceptions'] != "[]") AND ($data['exceptions'] != "")) {
                  $a_exceptions = importArrayFromDB($data['exceptions']);
                  $current_id = current($a_exceptions);
                  $in = "(";
                  foreach($a_exceptions as $agent_id) {
                     $in .= $agent_id.", ";
                  }
                  $in .= ")";
                  $in = str_replace(", )", ")", $in);

                  if ($val != $data['is_active']) {
                     return $link." (FUSION_".$module.".`exceptions` LIKE '%\"".
                             $current_id."\"%' ) AND `agent".strtolower($module)."`.`id` IN ".
                             $in." ";
                  } else {
                     return $link." `agent".strtolower($module)."`.`id` NOT IN ".$in." ";
                  }
               } else {
                  if ($val != $data['is_active']) {
                     return $link." (FUSION_".$module.".`is_active`!='".
                              $data['is_active']."') ";
                  } else {
                     return $link." (FUSION_".$module.".`is_active`='".
                              $data['is_active']."') ";
                  }
               }
            }
         }
         break;

      // * Networking List (front/networking.php)
      case 'NetworkEquipment':
         switch ($table.".".$field) {

         // ** FusionInventory - last inventory
            case "glpi_plugin_fusioninventory_networkequipments.networkequipments_id" :
               $ADD = "";
               if ($nott=="0"&&$val=="NULL") {
                  $ADD=" OR $table.last_fusinvsnmp_update IS NULL";
               } else if ($nott=="1"&&$val=="NULL") {
                  $ADD=" OR $table.last_fusinvsnmp_update IS NOT NULL";
               }
               return $link." ($table.last_fusinvsnmp_update  LIKE '%".$val."%' $ADD ) ";
               break;

            // ** FusionInventory - SNMP authentification
            case "glpi_plugin_fusioninventory_networkequipments.plugin_fusinvsnmp_snmpauths_id" :
               $ADD = "";
               if ($nott=="0"&&$val=="NULL") {
                  $ADD=" OR glpi_plugin_fusioninventory_configsecurities.name IS NULL";
               } else if ($nott=="1"&&$val=="NULL") {
                  $ADD=" OR glpi_plugin_fusioninventory_configsecurities.name IS NOT NULL";
               }
               return $link." (glpi_plugin_fusioninventory_configsecurities.name  LIKE '%".$val.
                       "%' $ADD ) ";
               break;

            // ** FusionInventory - CPU
            case "glpi_plugin_fusioninventory_networkequipments.cpu":

               break;

         }
         break;

      // * Printer List (front/printer.php)
      case 'Printer':
         switch ($table.".".$field) {

            // ** FusionInventory - last inventory
            case "glpi_plugin_fusioninventory_printers.printers_id" :
               $ADD = "";
               if ($nott=="0"&&$val=="NULL") {
                  $ADD=" OR $table.last_fusinvsnmp_update IS NULL";
               } else if ($nott=="1"&&$val=="NULL") {
                  $ADD=" OR $table.last_fusinvsnmp_update IS NOT NULL";
               }
               return $link." ($table.last_fusinvsnmp_update  LIKE '%".$val."%' $ADD ) ";
               break;

            // ** FusionInventory - SNMP authentification
            case "glpi_plugin_fusioninventory_networkequipments.plugin_fusinvsnmp_snmpauths_id" :
               $ADD = "";
               if ($nott=="0"&&$val=="NULL") {
                  $ADD=" OR $table.name IS NULL";
               } else if ($nott=="1"&&$val=="NULL") {
                  $ADD=" OR $table.name IS NOT NULL";
               }
               return $link." ($table.name  LIKE '%".$val."%' $ADD ) ";
               break;

            // ** FusionInventory - switch
            case "glpi_plugin_fusioninventory_networkequipments.name" :
               $ADD = "";
               if ($nott=="0"&&$val=="NULL") {
                  $ADD=" OR glpi_networkequipments.id IS NULL";
               } else if ($nott=="1"&&$val=="NULL") {
                  $ADD=" OR glpi_networkequipments.id IS NOT NULL";
               }
               return $link." (glpi_networkequipments.id  LIKE '%".$val."%' $ADD ) ";
               break;

            // ** FusionInventory - switch port
            case "glpi_plugin_fusioninventory_networkports.id" :
               $ADD = "";
               if ($nott=="0"&&$val=="NULL") {
                  $ADD=" OR FUSIONINVENTORY_22.name IS NULL";
               } else if ($nott=="1"&&$val=="NULL") {
                  $ADD=" OR FUSIONINVENTORY_22.name IS NOT NULL";
               }
               return $link." (FUSIONINVENTORY_22.name  LIKE '%".$val."%' $ADD ) ";
               break;

         }
         break;

      // * Unknown mac addresses connectd on switch - report
      // (plugins/fusinvsnmp/report/unknown_mac.php)
      case 'PluginFusioninventoryUnmanaged' :
         switch ($table.".".$field) {

            // ** FusionInventory - switch
            case "glpi_plugin_fusioninventory_networkequipments.id" :
               $ADD = "";
               if ($nott=="0"&&$val=="NULL") {
                  $ADD=" OR FUSIONINVENTORY_12.items_id IS NULL";
               } else if ($nott=="1"&&$val=="NULL") {
                  $ADD=" OR FUSIONINVENTORY_12.items_id IS NOT NULL";
               }
               return $link." (FUSIONINVENTORY_13.name  LIKE '%".$val."%' $ADD ) ";
               break;

            // ** FusionInventory - switch port
            case "glpi_plugin_fusioninventory_networkports.id" :
               $ADD = "";
               if ($nott=="0"&&$val=="NULL") {
                  $ADD=" OR FUSIONINVENTORY_22.name IS NULL";
               } else if ($nott=="1"&&$val=="NULL") {
                  $ADD=" OR FUSIONINVENTORY_22.name IS NOT NULL";
               }
               return $link." (FUSIONINVENTORY_22.name  LIKE '%".$val."%' $ADD ) ";
               break;
         }
         break;

      // * Ports date connection - report (plugins/fusinvsnmp/report/ports_date_connections.php)
      case 'PluginFusioninventoryNetworkPort' :
         switch ($table.".".$field) {

            // ** Name and link of networking device (switch)
            case "glpi_plugin_fusioninventory_networkports.id" :
            break;

            // ** Name and link of port of networking device (port of switch)
            case "glpi_plugin_fusioninventory_networkports.networkports_id" :
               break;

            // ** Location of switch
            case "glpi_locations.id" :
               $ADD = "";
               if ($nott=="0"&&$val=="NULL") {
                  $ADD=" OR glpi_networkequipments.location IS NULL";
               } else if ($nott=="1"&&$val=="NULL") {
                  $ADD=" OR glpi_networkequipments.location IS NOT NULL";
               }
               if ($val == "0") {
                  return $link." (glpi_networkequipments.location >= -1 ) ";
               }
               return $link." (glpi_networkequipments.location = '".$val."' $ADD ) ";
               break;

            case "glpi_plugin_fusioninventory_networkports.lastup" :
               $ADD = "";
               //$val = str_replace("&lt;", ">", $val);
               //$val = str_replace("\\", "", $val);
               if ($nott=="0"&&$val=="NULL") {
                  $ADD=" OR $table.$field IS NULL";
               } else if ($nott=="1"&&$val=="NULL") {
                  $ADD=" OR $table.$field IS NOT NULL";
               }
               return $link." ($table.$field $val $ADD ) ";
               break;
         }
         break;

      // * range IP list (plugins/fusinvsnmp/front/iprange.php)
      case 'PluginFusioninventoryIPRange' :
         switch ($table.".".$field) {

            // ** Name of range IP and link to form
            case "glpi_plugin_fusioninventory_ipranges.name" :
               break;

            // ** Agent name associed to IP range and link to agent form
            case "glpi_plugin_fusinvsnmp_agents.id" :
               $ADD = "";
               if ($nott=="0"&&$val=="NULL") {
                  $ADD=" OR $table.name IS NULL";
               } else if ($nott=="1"&&$val=="NULL") {
                  $ADD=" OR $table.name IS NOT NULL";
               }
               return $link." ($table.name  LIKE '%".$val."%' $ADD ) ";
               break;

         }

         switch ($table.".".$field) {

            case "glpi_plugin_fusinvsnmp_agents.plugin_fusinvsnmp_agents_id_query" :
               $ADD = "";
               if ($nott=="0"&&$val=="NULL") {
                  $ADD=" OR $table.name IS NULL";
               } else if ($nott=="1"&&$val=="NULL") {
                  $ADD=" OR $table.name IS NOT NULL";
               }
               return $link." (gpta.name  LIKE '%".$val."%' $ADD ) ";
               break;

         }

         break;

      case 'PluginFusioninventoryNetworkPortLog' :
         switch ($table.".".$field) {

            // ** Display switch and Port
            case "glpi_networkports.id" :
               $ADD = "";
               if ($nott=="0"&&$val=="NULL") {
                  $ADD=" OR $table.id IS NULL ";
               } else if ($nott=="1"&&$val=="NULL") {
                  $ADD=" OR $table.id IS NOT NULL ";
               }
               return $link." ($table.id = '".$val."' $ADD ) ";
               break;

            // ** Display GLPI field of device
            case "glpi_plugin_fusinvsnmp_networkportlogs.field" :
               $ADD = "";
               if ($nott=="0"&&$val=="NULL") {
                  $ADD=" OR $table.$field IS NULL ";
               } else if ($nott=="1"&&$val=="NULL") {
                  $ADD=" OR $table.$field IS NOT NULL ";
               }
               if (!empty($val)) {
                  $map = new PluginFusioninventoryMapping;
                  $mapfields = $map->get('NetworkEquipment', $val);
                  if ($mapfields != FALSE) {
                     $val = $mapfields['tablefields'];
                  } else {
                     $val = '';
                  }
               }
               return $link." ($table.$field = '".addslashes($val)."' $ADD ) ";
               break;

         }
         break;

         }
   return "";
}



function plugin_pre_item_update_fusioninventory($parm) {
   if ($parm->fields['directory'] == 'fusioninventory') {
      $plugin = new Plugin();

      $a_plugins = PluginFusioninventoryModule::getAll();
      foreach($a_plugins as $datas) {
         $plugin->unactivate($datas['id']);
      }
   }
}

function plugin_pre_item_purge_fusioninventory($parm) {
   global $DB;

   switch (get_class($parm)) {

      case 'Computer':
         // Delete link between computer and agent fusion
         $query = "UPDATE `glpi_plugin_fusioninventory_agents`
                     SET `computers_id` = '0'
                     WHERE `computers_id` = '".$parm->getField('id')."'";
         $DB->query($query);

         PluginFusioninventoryInventoryComputerComputer::cleanComputer($parm->getField('id'));
         // Remove antivirus if set
         PluginFusioninventoryInventoryComputerAntivirus::cleanComputer($parm->getField('id'));
         break;

      case 'NetworkPort_NetworkPort':
      $networkPort = new NetworkPort();
      if ($networkPort->getFromDB($parm->fields['networkports_id_1'])) {
         if (($networkPort->fields['itemtype']) == 'NetworkEquipment') {
            PluginFusioninventoryNetworkPortLog::addLogConnection("remove",
                                                                $parm->fields['networkports_id_1']);
         } else {
            $networkPort->getFromDB($parm->fields['networkports_id_2']);
            if (($networkPort->fields['itemtype']) == 'NetworkEquipment') {
               PluginFusioninventoryNetworkPortLog::addLogConnection("remove",
                                                                $parm->fields['networkports_id_2']);
            }
         }
      }
      break;

   }
   return $parm;
}



function plugin_pre_item_delete_fusioninventory($parm) {
   global $DB;

   if (isset($parm["_item_type_"])) {
      switch ($parm["_item_type_"]) {

         case 'NetworkPort':
               $query_delete = "DELETE FROM `glpi_plugin_fusioninventory_networkports`
                  WHERE `networkports_id`='".$parm->getField('id')."';";
               $DB->query($query_delete);
            break;

      }
   }
   return $parm;
}



/**
 * Hook after updates
 *
 * @param $parm
 * @return nothing
 *
**/
function plugin_item_update_fusioninventory($parm) {
   if (isset($_SESSION["glpiID"])
           && $_SESSION["glpiID"]!=''
           && !isset($_SESSION['glpi_fusionionventory_nolock'])) { // manual task
      $plugin = new Plugin;
      if ($plugin->isActivated('fusioninventory')) {
         // lock fields which have been updated
         $type=get_class($parm);
         $id=$parm->getField('id');
         $fieldsToLock=$parm->updates;
         PluginFusioninventoryLock::addLocks($type, $id, $fieldsToLock);
      }
   }
}


function plugin_item_add_fusioninventory($parm) {

   switch (get_class($parm)) {

      case 'NetworkPort_NetworkPort':
         $networkPort = new NetworkPort();
         $networkPort->getFromDB($parm->fields['networkports_id_1']);
         if ($networkPort->fields['itemtype'] == 'NetworkEquipment') {
            PluginFusioninventoryNetworkPortLog::addLogConnection("make",
                                                                  $parm->fields['networkports_id_1']);
         } else {
            $networkPort->getFromDB($parm->fields['networkports_id_2']);
            if ($networkPort->fields['itemtype'] == 'NetworkEquipment') {
               PluginFusioninventoryNetworkPortLog::addLogConnection("make",
                                                                  $parm->fields['networkports_id_2']);
            }
         }
         break;

      case 'NetworkPort':
         if ($parm->fields['itemtype'] == 'NetworkEquipment') {
            $pfNetworkPort = new PluginFusioninventoryNetworkPort();
            $pfNetworkPort->add(array('networkports_id' => $parm->fields['id']));
         }
         break;

   }
   return $parm;
}


function plugin_item_purge_fusioninventory($parm) {

   switch (get_class($parm)) {

      case 'NetworkPort_NetworkPort':
         // If remove connection of a hub port (unknown device), we must delete this port too
         $NetworkPort = new NetworkPort();
         $NetworkPort_Vlan = new NetworkPort_Vlan();
         $pfUnmanaged = new PluginFusioninventoryUnmanaged();
         $networkPort_NetworkPort = new NetworkPort_NetworkPort();

         $a_hubs = array();

         $port_id = $NetworkPort->getContact($parm->getField('networkports_id_1'));
         $NetworkPort->getFromDB($parm->getField('networkports_id_1'));
         if ($NetworkPort->fields['itemtype'] == 'PluginFusioninventoryUnmanaged') {
            $pfUnmanaged->getFromDB($NetworkPort->fields['items_id']);
            if ($pfUnmanaged->fields['hub'] == '1') {
               $a_hubs[$NetworkPort->fields['items_id']] = 1;
               $NetworkPort->delete($NetworkPort->fields);
            }
         }
         $NetworkPort->getFromDB($port_id);
         if ($port_id) {
            if ($NetworkPort->fields['itemtype'] == 'PluginFusioninventoryUnmanaged') {
               $pfUnmanaged->getFromDB($NetworkPort->fields['items_id']);
               if ($pfUnmanaged->fields['hub'] == '1') {
                  $a_hubs[$NetworkPort->fields['items_id']] = 1;
               }
            }
         }
         $port_id = $NetworkPort->getContact($parm->getField('networkports_id_2'));
         $NetworkPort->getFromDB($parm->getField('networkports_id_2'));
         if ($NetworkPort->fields['itemtype'] == 'PluginFusioninventoryUnmanaged') {
            if ($pfUnmanaged->getFromDB($NetworkPort->fields['items_id'])) {
               if ($pfUnmanaged->fields['hub'] == '1') {
                  $a_vlans = $NetworkPort_Vlan->getVlansForNetworkPort($NetworkPort->fields['id']);
                  foreach ($a_vlans as $vlan_id) {
                     $NetworkPort_Vlan->unassignVlan($NetworkPort->fields['id'], $vlan_id);
                  }
                  $a_hubs[$NetworkPort->fields['items_id']] = 1;
                  $NetworkPort->delete($NetworkPort->fields);
               }
            }
         }
         if ($port_id) {
            $NetworkPort->getFromDB($port_id);
            if ($NetworkPort->fields['itemtype'] == 'PluginFusioninventoryUnmanaged') {
               $pfUnmanaged->getFromDB($NetworkPort->fields['items_id']);
               if ($pfUnmanaged->fields['hub'] == '1') {
                  $a_hubs[$NetworkPort->fields['items_id']] = 1;
               }
            }
         }

         // If hub have no port, delete it
         foreach (array_keys($a_hubs) as $unkowndevice_id) {
            $a_networkports = $NetworkPort->find("`itemtype`='PluginFusioninventoryUnmanaged'
               AND `items_id`='".$unkowndevice_id."' ");
            if (count($a_networkports) < 2) {
               $pfUnmanaged->delete(array('id'=>$unkowndevice_id), 1);
            } else if (count($a_networkports) == '2') {
               $switchPorts_id = 0;
               $otherPorts_id  = 0;
               foreach ($a_networkports as $data) {
                  if ($data['name'] == 'Link') {
                     $switchPorts_id = $NetworkPort->getContact($data['id']);
                  } else if ($otherPorts_id == '0') {
                     $otherPorts_id = $NetworkPort->getContact($data['id']);
                  } else {
                     $switchPorts_id = $NetworkPort->getContact($data['id']);
                  }
               }

               $pfUnmanaged->disconnectDB($switchPorts_id); // disconnect this port
               $pfUnmanaged->disconnectDB($otherPorts_id);     // disconnect destination port

               $networkPort_NetworkPort->add(array('networkports_id_1'=> $switchPorts_id,
                                                   'networkports_id_2' => $otherPorts_id));
            }
         }
         break;

      case 'NetworkEquipment':
         // Delete all ports
         $query_delete = "DELETE FROM `glpi_plugin_fusioninventory_networkequipments`
                          WHERE `networkequipments_id`='".$parm->fields["id"]."';";
         $DB->query($query_delete);

         $query_select = "SELECT `glpi_plugin_fusioninventory_networkports`.`id`,
                              `glpi_networkports`.`id` as nid
                          FROM `glpi_plugin_fusioninventory_networkports`
                               LEFT JOIN `glpi_networkports`
                                         ON `glpi_networkports`.`id` = `networkports_id`
                          WHERE `items_id`='".$parm->fields["id"]."'
                                AND `itemtype`='NetworkEquipment';";
         $result=$DB->query($query_select);
         while ($data=$DB->fetch_array($result)) {
            $query_delete = "DELETE FROM `glpi_plugin_fusioninventory_networkports`
                             WHERE `id`='".$data["id"]."';";
            $DB->query($query_delete);
            $query_delete = "DELETE FROM `glpi_plugin_fusinvsnmp_networkportlogs`
                           WHERE `networkports_id`='".$data['nid']."'";
            $DB->query($query_delete);
         }
         break;

      case "Printer":
         $query_delete = "DELETE FROM `glpi_plugin_fusioninventory_printers`
                          WHERE `printers_id`='".$parm->fields["id"]."';";
         $DB->query($query_delete);
         $query_delete = "DELETE FROM `glpi_plugin_fusioninventory_printercartridges`
                          WHERE `printers_id`='".$parm->fields["id"]."';";
         $DB->query($query_delete);
         $query_delete = "DELETE FROM `glpi_plugin_fusioninventory_printerlogs`
                          WHERE `printers_id`='".$parm->fields["id"]."';";
         $DB->query($query_delete);
         break;

      case 'PluginFusioninventoryUnmanaged' :
         $query_delete = "DELETE FROM `glpi_plugin_fusinvsnmp_unmanageds`
                          WHERE `plugin_fusioninventory_unmanageds_id`='".
                             $parm->fields["id"]."';";
         $DB->query($query_delete);
         break;

   }
   return $parm;
}


function plugin_item_transfer_fusioninventory($parm) {

   switch ($parm['type']) {

      case 'Computer':
         $pfAgent = new PluginFusioninventoryAgent();

         if ($agent_id = $pfAgent->getAgentWithComputerid($parm['id'])) {
            $input = array();
            $input['id'] = $agent_id;
            $computer = new Computer();
            $computer->getFromDB($parm['newID']);
            $input['entities_id'] = $computer->fields['entities_id'];
            $pfAgent->update($input);
         }

         break;
   }
   return FALSE;
}



function plugin_fusioninventory_registerMethods() {
   global $WEBSERVICES_METHOD;

   $WEBSERVICES_METHOD['fusioninventory.test'] = array(
                     'PluginFusioninventoryInventoryComputerWebservice',
                     'methodTest');
   $WEBSERVICES_METHOD['fusioninventory.computerextendedinfo'] = array(
       'PluginFusioninventoryInventoryComputerWebservice',
		 'methodExtendedInfo');


}

?>
