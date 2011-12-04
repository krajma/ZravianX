<?php
#################################################################################
##                                                                             ##
##              -= YOU MUST NOT REMOVE OR CHANGE THIS NOTICE =-                ##
##                                                                             ##
## --------------------------------------------------------------------------- ##
##                                                                             ##
##  Project:       ZravianX                                                    ##
##  Version:       2011.11.06                                                  ##
##  Filename:      install/process.php                                         ##
##  Edited by:     ZZJHONS                                                     ##
##  License:       Creative Commons BY-NC-SA 3.0                               ##
##  Copyright:     ZravianX (c) 2011 - All rights reserved                     ##
##  URLs:          http://zravianx.zzjhons.com                                 ##
##  Source code:   http://www.github.com/ZZJHONS/ZravianX                      ##
##                                                                             ##
#################################################################################

        if(file_exists("include/constant.php")) {
        	include ("include/database.php");
        }
        class Process {

        	function Process() {
        		if(isset($_POST['subconst'])) {
        			$this->constForm();
        		} else
        			if(isset($_POST['substruc'])) {
        				$this->createStruc();
        			} else
        				if(isset($_POST['subwdata'])) {
        					$this->createWdata();
        				} else
        					if(isset($_POST['subacc'])) {
        						$this->createAcc();
        						} else {
        							header("Location: index.php");
        						}
        	}

        	function constForm() {
        		$myFile = "include/constant.php";
        		$fh = fopen($myFile, 'w') or die("<br/><br/><br/>Can't open file: install\include\constant.php");
        		$text = file_get_contents("data/constant_format.tpl");
        		$text = preg_replace("'%SERVERNAME%'", $_POST['servername'], $text);
        		$text = preg_replace("'%LANG%'", $_POST['lang'], $text);
        		$text = preg_replace("'%SPEED%'", $_POST['speed'], $text);
        		$text = preg_replace("'%INCSPEED%'", $_POST['incspeed'], $text);
        		$text = preg_replace("'%TRADERCAP%'", $_POST['tradercap'], $text);
        		$text = preg_replace("'%STORAGE_MULTIPLIER%'", $_POST['storage_multiplier'], $text);
        		$text = preg_replace("'%UTRACK%'", $_POST['trackusers'], $text);
        		$text = preg_replace("'%UTOUT%'", $_POST['timeout'], $text);
        		$text = preg_replace("'%AUTOD%'", $_POST['autodel'], $text);
        		$text = preg_replace("'%AUTODT%'", $_POST['autodeltime'], $text);
        		$text = preg_replace("'%MAX%'", $_POST['wmax'], $text);
        		$text = preg_replace("'%GP%'", $_POST['gpack'], $text);
        		$text = preg_replace("'%SSERVER%'", $_POST['sserver'], $text);
        		$text = preg_replace("'%SUSER%'", $_POST['suser'], $text);
        		$text = preg_replace("'%SPASS%'", $_POST['spass'], $text);
        		$text = preg_replace("'%SDB%'", $_POST['sdb'], $text);
        		$text = preg_replace("'%PREFIX%'", $_POST['prefix'], $text);
        		$text = preg_replace("'%CONNECTT%'", $_POST['connectt'], $text);
        		$text = preg_replace("'%AEMAIL%'", $_POST['aemail'], $text);
        		$text = preg_replace("'%ANAME%'", $_POST['aname'], $text);
        		$text = preg_replace("'%SUBDOM%'", $_POST['subdom'], $text);
        		$text = preg_replace("'%LOGBUILD%'", $_POST['log_build'], $text);
        		$text = preg_replace("'%LOGTECH%'", $_POST['log_tech'], $text);
        		$text = preg_replace("'%LOGLOGIN%'", $_POST['log_login'], $text);
        		$text = preg_replace("'%LOGGOLDFIN%'", $_POST['log_gold_fin'], $text);
        		$text = preg_replace("'%LOGADMIN%'", $_POST['log_admin'], $text);
        		$text = preg_replace("'%LOGWAR%'", $_POST['log_war'], $text);
        		$text = preg_replace("'%LOGMARKET%'", $_POST['log_market'], $text);
        		$text = preg_replace("'%LOGILLEGAL%'", $_POST['log_illegal'], $text);
        		$text = preg_replace("'%MINUSERLENGTH%'", $_POST['userlength'], $text);
        		$text = preg_replace("'%MINPASSLENGTH%'", $_POST['passlength'], $text);
        		$text = preg_replace("'%SPECIALCHARS%'", $_POST['specialchars'], $text);
        		$text = preg_replace("'%ACTIVATE%'", $_POST['activate'], $text);
        		$text = preg_replace("'%ARANK%'", $_POST['admin_rank'], $text);
        		$text = preg_replace("'%QUEST%'", $_POST['quest'], $text);
        		$text = preg_replace("'%BEGINNER%'", $_POST['beginner'], $text);
        		$text = preg_replace("'%STARTTIME%'", time(), $text);
        		$text = preg_replace("'%DOMAIN%'", $_POST['domain'], $text);
        		$text = preg_replace("'%HOMEPAGE%'", $_POST['homepage'], $text);
        		$text = preg_replace("'%LIMIT_MAILBOX%'", $_POST['limit_mailbox'], $text);
        		$text = preg_replace("'%MAX_MAILS%'", $_POST['max_mails'], $text);
        		$text = preg_replace("'%DEMOLISH%'", $_POST['demolish'], $text);
        		$text = preg_replace("'%BOX1%'", $_POST['box1'], $text);
        		$text = preg_replace("'%BOX2%'", $_POST['box2'], $text);
        		$text = preg_replace("'%BOX3%'", $_POST['box3'], $text);
        		$text = preg_replace("'%VILLAGE_EXPAND%'", $_POST['village_expand'], $text);
        		$text = preg_replace("'%ERROR%'", $_POST['error'], $text);
        		$text = preg_replace("'%GP_LOCATE%'", $_POST['gp_locate'], $text);
        		$text = preg_replace("'%PLUS_TIME%'", $_POST['plus_time'], $text);
        		$text = preg_replace("'%PLUS_PRODUCTION%'", $_POST['plus_production'], $text);
        		$text = preg_replace("'%GREAT_WKS%'", $_POST['great_wks'], $text);
        		$text = preg_replace("'%TS_THRESHOLD%'", $_POST['ts_threshold'], $text);
        		$text = preg_replace("'%WW%'", $_POST['ww'], $text);
				$text = preg_replace("'%ZRAVIANX4%'", $_POST['zravianx4'], $text);
				$text = preg_replace("'%HOME1%'", $_POST['home1'], $text);
				$text = preg_replace("'%HOME2%'", $_POST['home2'], $text);
				$text = preg_replace("'%HOME3%'", $_POST['home3'], $text);

        		fwrite($fh, $text);

        		if(file_exists("include/constant.php")) {
        			header("Location: index.php?s=2");
        		} else {
        			header("Location: index.php?s=1&c=1");
        		}

        		fclose($fh);
        	}

        	function createStruc() {
        		global $database;
        		$str = file_get_contents("data/sql.sql");
        		$str = preg_replace("'%PREFIX%'", TB_PREFIX, $str);
        		if(DB_TYPE) {
        			$result = $database->connection->multi_query($str);
        		} else {
        			$result = $database->mysql_exec_batch($str);
        		}
        		if($result) {
        			header("Location: index.php?s=3");
        		} else {
        			header("Location: index.php?s=2&c=1");
        		}
        	}

        	function createWdata() {
        		header("Location: include/wdata.php");
        	}
        };
        $process = new Process;
?>