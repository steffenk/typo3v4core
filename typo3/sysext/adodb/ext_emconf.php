<?php

########################################################################
# Extension Manager/Repository config file for ext: "adodb"
#
# Auto generated 30-06-2006 13:38
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'ADOdb',
	'description' => 'This extension just includes a current version of ADOdb, a database abstraction library for PHP, for further use in TYPO3',
	'category' => 'misc',
	'shy' => 0,
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => 0,
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author' => 'Karsten Dambekalns',
	'author_email' => 'karsten@typo3.org',
	'author_company' => 'TYPO3 Association',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'version' => '4.90.0',
	'_md5_values_when_last_written' => 'a:265:{s:25:"checkconnectionwizard.php";s:4:"8600";s:27:"class.tx_adodb_tceforms.php";s:4:"5ad6";s:26:"datasource_flexform_ds.xml";s:4:"96fb";s:12:"ext_icon.gif";s:4:"c778";s:17:"ext_localconf.php";s:4:"6ec5";s:31:"locallang_datasource_config.xml";s:4:"0e21";s:20:"locallang_wizard.xml";s:4:"0e65";s:11:"CVS/Entries";s:4:"58ab";s:14:"CVS/Repository";s:4:"bccf";s:8:"CVS/Root";s:4:"63b1";s:7:"CVS/Tag";s:4:"c437";s:33:"adodb/adodb-active-record.inc.php";s:4:"f199";s:26:"adodb/adodb-csvlib.inc.php";s:4:"a61e";s:28:"adodb/adodb-datadict.inc.php";s:4:"7cbd";s:25:"adodb/adodb-error.inc.php";s:4:"aa4e";s:32:"adodb/adodb-errorhandler.inc.php";s:4:"d4aa";s:29:"adodb/adodb-errorpear.inc.php";s:4:"29e7";s:30:"adodb/adodb-exceptions.inc.php";s:4:"39c3";s:28:"adodb/adodb-iterator.inc.php";s:4:"b257";s:23:"adodb/adodb-lib.inc.php";s:4:"0826";s:25:"adodb/adodb-pager.inc.php";s:4:"1a5e";s:24:"adodb/adodb-pear.inc.php";s:4:"d3fa";s:24:"adodb/adodb-perf.inc.php";s:4:"1788";s:24:"adodb/adodb-php4.inc.php";s:4:"5a1f";s:24:"adodb/adodb-time.inc.php";s:4:"896a";s:29:"adodb/adodb-xmlschema.inc.php";s:4:"7576";s:31:"adodb/adodb-xmlschema03.inc.php";s:4:"2132";s:19:"adodb/adodb.inc.php";s:4:"2313";s:17:"adodb/license.txt";s:4:"8bd7";s:24:"adodb/pivottable.inc.php";s:4:"b694";s:16:"adodb/readme.txt";s:4:"856d";s:22:"adodb/rsfilter.inc.php";s:4:"4ef2";s:16:"adodb/server.php";s:4:"751f";s:22:"adodb/toexport.inc.php";s:4:"db65";s:20:"adodb/tohtml.inc.php";s:4:"4483";s:19:"adodb/xmlschema.dtd";s:4:"26f3";s:21:"adodb/xmlschema03.dtd";s:4:"1cd4";s:17:"adodb/CVS/Entries";s:4:"51be";s:20:"adodb/CVS/Repository";s:4:"cd1a";s:14:"adodb/CVS/Root";s:4:"63b1";s:13:"adodb/CVS/Tag";s:4:"c437";s:30:"adodb/contrib/toxmlrpc.inc.php";s:4:"4c40";s:25:"adodb/contrib/CVS/Entries";s:4:"cd9b";s:28:"adodb/contrib/CVS/Repository";s:4:"3c38";s:22:"adodb/contrib/CVS/Root";s:4:"63b1";s:21:"adodb/contrib/CVS/Tag";s:4:"c437";s:35:"adodb/cute_icons_for_site/adodb.gif";s:4:"9430";s:36:"adodb/cute_icons_for_site/adodb2.gif";s:4:"f540";s:37:"adodb/cute_icons_for_site/CVS/Entries";s:4:"77e1";s:40:"adodb/cute_icons_for_site/CVS/Repository";s:4:"10d9";s:34:"adodb/cute_icons_for_site/CVS/Root";s:4:"63b1";s:33:"adodb/cute_icons_for_site/CVS/Tag";s:4:"c437";s:38:"adodb/datadict/datadict-access.inc.php";s:4:"f2f0";s:35:"adodb/datadict/datadict-db2.inc.php";s:4:"fbb5";s:40:"adodb/datadict/datadict-firebird.inc.php";s:4:"9093";s:39:"adodb/datadict/datadict-generic.inc.php";s:4:"8e91";s:37:"adodb/datadict/datadict-ibase.inc.php";s:4:"61a6";s:40:"adodb/datadict/datadict-informix.inc.php";s:4:"becc";s:37:"adodb/datadict/datadict-mssql.inc.php";s:4:"dae6";s:37:"adodb/datadict/datadict-mysql.inc.php";s:4:"2c7b";s:36:"adodb/datadict/datadict-oci8.inc.php";s:4:"77d8";s:40:"adodb/datadict/datadict-postgres.inc.php";s:4:"320b";s:37:"adodb/datadict/datadict-sapdb.inc.php";s:4:"50fa";s:38:"adodb/datadict/datadict-sybase.inc.php";s:4:"902c";s:26:"adodb/datadict/CVS/Entries";s:4:"4253";s:29:"adodb/datadict/CVS/Repository";s:4:"9e19";s:23:"adodb/datadict/CVS/Root";s:4:"63b1";s:22:"adodb/datadict/CVS/Tag";s:4:"c437";s:33:"adodb/docs/docs-active-record.htm";s:4:"4ec5";s:25:"adodb/docs/docs-adodb.htm";s:4:"640d";s:28:"adodb/docs/docs-datadict.htm";s:4:"97d6";s:26:"adodb/docs/docs-oracle.htm";s:4:"2c7d";s:24:"adodb/docs/docs-perf.htm";s:4:"45d8";s:27:"adodb/docs/docs-session.htm";s:4:"f2d6";s:28:"adodb/docs/old-changelog.htm";s:4:"3158";s:21:"adodb/docs/readme.htm";s:4:"9a0e";s:32:"adodb/docs/tips_portable_sql.htm";s:4:"4027";s:19:"adodb/docs/tute.htm";s:4:"691e";s:22:"adodb/docs/CVS/Entries";s:4:"1488";s:25:"adodb/docs/CVS/Repository";s:4:"ad28";s:19:"adodb/docs/CVS/Root";s:4:"63b1";s:18:"adodb/docs/CVS/Tag";s:4:"c437";s:34:"adodb/drivers/adodb-access.inc.php";s:4:"7c8c";s:31:"adodb/drivers/adodb-ado.inc.php";s:4:"0aa0";s:32:"adodb/drivers/adodb-ado5.inc.php";s:4:"0852";s:38:"adodb/drivers/adodb-ado_access.inc.php";s:4:"fee1";s:37:"adodb/drivers/adodb-ado_mssql.inc.php";s:4:"3fda";s:41:"adodb/drivers/adodb-borland_ibase.inc.php";s:4:"2de7";s:31:"adodb/drivers/adodb-csv.inc.php";s:4:"e453";s:31:"adodb/drivers/adodb-db2.inc.php";s:4:"614b";s:33:"adodb/drivers/adodb-fbsql.inc.php";s:4:"c2c1";s:36:"adodb/drivers/adodb-firebird.inc.php";s:4:"ffaa";s:33:"adodb/drivers/adodb-ibase.inc.php";s:4:"dc96";s:36:"adodb/drivers/adodb-informix.inc.php";s:4:"6890";s:38:"adodb/drivers/adodb-informix72.inc.php";s:4:"6fc9";s:32:"adodb/drivers/adodb-ldap.inc.php";s:4:"43d7";s:33:"adodb/drivers/adodb-mssql.inc.php";s:4:"adc3";s:35:"adodb/drivers/adodb-mssqlpo.inc.php";s:4:"a29a";s:33:"adodb/drivers/adodb-mysql.inc.php";s:4:"e9aa";s:34:"adodb/drivers/adodb-mysqli.inc.php";s:4:"2686";s:34:"adodb/drivers/adodb-mysqlt.inc.php";s:4:"ac71";s:35:"adodb/drivers/adodb-netezza.inc.php";s:4:"bcec";s:32:"adodb/drivers/adodb-oci8.inc.php";s:4:"7354";s:34:"adodb/drivers/adodb-oci805.inc.php";s:4:"545b";s:34:"adodb/drivers/adodb-oci8po.inc.php";s:4:"372e";s:32:"adodb/drivers/adodb-odbc.inc.php";s:4:"1970";s:36:"adodb/drivers/adodb-odbc_db2.inc.php";s:4:"182b";s:38:"adodb/drivers/adodb-odbc_mssql.inc.php";s:4:"ca70";s:39:"adodb/drivers/adodb-odbc_oracle.inc.php";s:4:"3500";s:33:"adodb/drivers/adodb-odbtp.inc.php";s:4:"655a";s:41:"adodb/drivers/adodb-odbtp_unicode.inc.php";s:4:"29b5";s:34:"adodb/drivers/adodb-oracle.inc.php";s:4:"2b2a";s:31:"adodb/drivers/adodb-pdo.inc.php";s:4:"8883";s:37:"adodb/drivers/adodb-pdo_mssql.inc.php";s:4:"7ddc";s:37:"adodb/drivers/adodb-pdo_mysql.inc.php";s:4:"a2c7";s:35:"adodb/drivers/adodb-pdo_oci.inc.php";s:4:"e96d";s:37:"adodb/drivers/adodb-pdo_pgsql.inc.php";s:4:"df33";s:36:"adodb/drivers/adodb-postgres.inc.php";s:4:"f2ae";s:38:"adodb/drivers/adodb-postgres64.inc.php";s:4:"9813";s:37:"adodb/drivers/adodb-postgres7.inc.php";s:4:"220e";s:37:"adodb/drivers/adodb-postgres8.inc.php";s:4:"4af9";s:33:"adodb/drivers/adodb-proxy.inc.php";s:4:"1461";s:33:"adodb/drivers/adodb-sapdb.inc.php";s:4:"5727";s:39:"adodb/drivers/adodb-sqlanywhere.inc.php";s:4:"e638";s:34:"adodb/drivers/adodb-sqlite.inc.php";s:4:"a79c";s:36:"adodb/drivers/adodb-sqlitepo.inc.php";s:4:"a3a7";s:34:"adodb/drivers/adodb-sybase.inc.php";s:4:"fae1";s:38:"adodb/drivers/adodb-sybase_ase.inc.php";s:4:"8f64";s:31:"adodb/drivers/adodb-vfp.inc.php";s:4:"3510";s:25:"adodb/drivers/CVS/Entries";s:4:"9fa1";s:28:"adodb/drivers/CVS/Repository";s:4:"7121";s:22:"adodb/drivers/CVS/Root";s:4:"63b1";s:21:"adodb/drivers/CVS/Tag";s:4:"c437";s:27:"adodb/lang/adodb-ar.inc.php";s:4:"6f2a";s:27:"adodb/lang/adodb-bg.inc.php";s:4:"666d";s:31:"adodb/lang/adodb-bgutf8.inc.php";s:4:"6316";s:27:"adodb/lang/adodb-ca.inc.php";s:4:"96da";s:27:"adodb/lang/adodb-cn.inc.php";s:4:"155e";s:27:"adodb/lang/adodb-cz.inc.php";s:4:"6964";s:27:"adodb/lang/adodb-da.inc.php";s:4:"2ea2";s:27:"adodb/lang/adodb-de.inc.php";s:4:"26c5";s:27:"adodb/lang/adodb-en.inc.php";s:4:"0820";s:27:"adodb/lang/adodb-es.inc.php";s:4:"de07";s:34:"adodb/lang/adodb-esperanto.inc.php";s:4:"32b9";s:27:"adodb/lang/adodb-fr.inc.php";s:4:"dd47";s:27:"adodb/lang/adodb-hu.inc.php";s:4:"f308";s:27:"adodb/lang/adodb-it.inc.php";s:4:"15e2";s:27:"adodb/lang/adodb-nl.inc.php";s:4:"ed3d";s:27:"adodb/lang/adodb-pl.inc.php";s:4:"333e";s:30:"adodb/lang/adodb-pt-br.inc.php";s:4:"e973";s:27:"adodb/lang/adodb-ro.inc.php";s:4:"779e";s:31:"adodb/lang/adodb-ru1251.inc.php";s:4:"e828";s:27:"adodb/lang/adodb-sv.inc.php";s:4:"81fa";s:31:"adodb/lang/adodb-uk1251.inc.php";s:4:"3203";s:22:"adodb/lang/CVS/Entries";s:4:"3cd2";s:25:"adodb/lang/CVS/Repository";s:4:"a65e";s:19:"adodb/lang/CVS/Root";s:4:"63b1";s:18:"adodb/lang/CVS/Tag";s:4:"c437";s:26:"adodb/pear/readme.Auth.txt";s:4:"4970";s:22:"adodb/pear/CVS/Entries";s:4:"9347";s:25:"adodb/pear/CVS/Repository";s:4:"a002";s:19:"adodb/pear/CVS/Root";s:4:"63b1";s:18:"adodb/pear/CVS/Tag";s:4:"c437";s:27:"adodb/pear/Auth/CVS/Entries";s:4:"38cc";s:30:"adodb/pear/Auth/CVS/Repository";s:4:"b224";s:24:"adodb/pear/Auth/CVS/Root";s:4:"63b1";s:23:"adodb/pear/Auth/CVS/Tag";s:4:"c437";s:35:"adodb/pear/Auth/Container/ADOdb.php";s:4:"c236";s:37:"adodb/pear/Auth/Container/CVS/Entries";s:4:"1359";s:40:"adodb/pear/Auth/Container/CVS/Repository";s:4:"4fb1";s:34:"adodb/pear/Auth/Container/CVS/Root";s:4:"63b1";s:33:"adodb/pear/Auth/Container/CVS/Tag";s:4:"c437";s:27:"adodb/perf/perf-db2.inc.php";s:4:"26b7";s:32:"adodb/perf/perf-informix.inc.php";s:4:"8948";s:29:"adodb/perf/perf-mssql.inc.php";s:4:"94ff";s:29:"adodb/perf/perf-mysql.inc.php";s:4:"6273";s:28:"adodb/perf/perf-oci8.inc.php";s:4:"7104";s:32:"adodb/perf/perf-postgres.inc.php";s:4:"e010";s:22:"adodb/perf/CVS/Entries";s:4:"b02d";s:25:"adodb/perf/CVS/Repository";s:4:"dbc5";s:19:"adodb/perf/CVS/Root";s:4:"63b1";s:18:"adodb/perf/CVS/Tag";s:4:"c437";s:38:"adodb/session/adodb-compress-bzip2.php";s:4:"0971";s:37:"adodb/session/adodb-compress-gzip.php";s:4:"7497";s:36:"adodb/session/adodb-cryptsession.php";s:4:"ef9f";s:38:"adodb/session/adodb-encrypt-mcrypt.php";s:4:"99ba";s:35:"adodb/session/adodb-encrypt-md5.php";s:4:"e61d";s:38:"adodb/session/adodb-encrypt-secret.php";s:4:"f28d";s:36:"adodb/session/adodb-encrypt-sha1.php";s:4:"5c92";s:28:"adodb/session/adodb-sess.txt";s:4:"260b";s:36:"adodb/session/adodb-session-clob.php";s:4:"ba1b";s:31:"adodb/session/adodb-session.php";s:4:"ab3e";s:38:"adodb/session/adodb-sessions.mysql.sql";s:4:"42fe";s:44:"adodb/session/adodb-sessions.oracle.clob.sql";s:4:"3c64";s:39:"adodb/session/adodb-sessions.oracle.sql";s:4:"08d0";s:27:"adodb/session/crypt.inc.php";s:4:"4dad";s:32:"adodb/session/session_schema.xml";s:4:"6443";s:25:"adodb/session/CVS/Entries";s:4:"1124";s:28:"adodb/session/CVS/Repository";s:4:"7999";s:22:"adodb/session/CVS/Root";s:4:"63b1";s:21:"adodb/session/CVS/Tag";s:4:"c437";s:40:"adodb/session/old/adodb-cryptsession.php";s:4:"506f";s:40:"adodb/session/old/adodb-session-clob.php";s:4:"4dc3";s:35:"adodb/session/old/adodb-session.php";s:4:"3680";s:31:"adodb/session/old/crypt.inc.php";s:4:"5a4e";s:29:"adodb/session/old/CVS/Entries";s:4:"3edc";s:32:"adodb/session/old/CVS/Repository";s:4:"0805";s:26:"adodb/session/old/CVS/Root";s:4:"63b1";s:25:"adodb/session/old/CVS/Tag";s:4:"c437";s:25:"adodb/tests/benchmark.php";s:4:"0c86";s:22:"adodb/tests/client.php";s:4:"bcce";s:19:"adodb/tests/pdo.php";s:4:"9688";s:18:"adodb/tests/rr.htm";s:4:"abeb";s:34:"adodb/tests/test-active-record.php";s:4:"c3ad";s:33:"adodb/tests/test-active-recs2.php";s:4:"2f5e";s:29:"adodb/tests/test-datadict.php";s:4:"1c50";s:25:"adodb/tests/test-perf.php";s:4:"b95e";s:27:"adodb/tests/test-pgblob.php";s:4:"62b6";s:25:"adodb/tests/test-php5.php";s:4:"b804";s:30:"adodb/tests/test-xmlschema.php";s:4:"b467";s:20:"adodb/tests/test.php";s:4:"14ea";s:21:"adodb/tests/test2.php";s:4:"384b";s:21:"adodb/tests/test3.php";s:4:"dd69";s:21:"adodb/tests/test4.php";s:4:"5604";s:21:"adodb/tests/test5.php";s:4:"023a";s:29:"adodb/tests/test_rs_array.php";s:4:"1ccf";s:25:"adodb/tests/testcache.php";s:4:"1ff5";s:33:"adodb/tests/testdatabases.inc.php";s:4:"82f6";s:25:"adodb/tests/testgenid.php";s:4:"1576";s:25:"adodb/tests/testmssql.php";s:4:"42d3";s:24:"adodb/tests/testoci8.php";s:4:"e01d";s:30:"adodb/tests/testoci8cursor.php";s:4:"cf50";s:26:"adodb/tests/testpaging.php";s:4:"5e94";s:24:"adodb/tests/testpear.php";s:4:"83e8";s:28:"adodb/tests/testsessions.php";s:4:"3430";s:20:"adodb/tests/time.php";s:4:"b158";s:22:"adodb/tests/tmssql.php";s:4:"3d7a";s:31:"adodb/tests/xmlschema-mssql.xml";s:4:"5c70";s:25:"adodb/tests/xmlschema.xml";s:4:"19ca";s:23:"adodb/tests/CVS/Entries";s:4:"658f";s:26:"adodb/tests/CVS/Repository";s:4:"5257";s:20:"adodb/tests/CVS/Root";s:4:"63b1";s:19:"adodb/tests/CVS/Tag";s:4:"c437";s:29:"adodb/xsl/convert-0.1-0.2.xsl";s:4:"29d9";s:29:"adodb/xsl/convert-0.1-0.3.xsl";s:4:"6aad";s:29:"adodb/xsl/convert-0.2-0.1.xsl";s:4:"5d27";s:29:"adodb/xsl/convert-0.2-0.3.xsl";s:4:"4098";s:24:"adodb/xsl/remove-0.2.xsl";s:4:"0b2b";s:24:"adodb/xsl/remove-0.3.xsl";s:4:"678d";s:21:"adodb/xsl/CVS/Entries";s:4:"9483";s:24:"adodb/xsl/CVS/Repository";s:4:"3cb3";s:18:"adodb/xsl/CVS/Root";s:4:"63b1";s:17:"adodb/xsl/CVS/Tag";s:4:"c437";s:18:"doc/490.DBAL.patch";s:4:"2037";s:10:"doc/README";s:4:"40a5";s:25:"doc/mssql-error-fix.patch";s:4:"8757";s:15:"doc/CVS/Entries";s:4:"a5e7";s:18:"doc/CVS/Repository";s:4:"f6db";s:12:"doc/CVS/Root";s:4:"63b1";s:11:"doc/CVS/Tag";s:4:"c437";s:23:"res/checkconnection.gif";s:4:"1760";s:15:"res/CVS/Entries";s:4:"f828";s:18:"res/CVS/Repository";s:4:"442c";s:12:"res/CVS/Root";s:4:"63b1";s:11:"res/CVS/Tag";s:4:"c437";}',
	'constraints' => array(
		'depends' => array(
			'php' => '4.1.0-',
			'typo3' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
);

?>