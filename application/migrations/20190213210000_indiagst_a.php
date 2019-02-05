<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_IndiaGST_A extends CI_Migration
{
	public function __construct()
	{
		parent::__construct();
	}

	public function up()
	{
		execute_script(APPPATH . 'migrations/sqlscripts/3.3.0_indiagst_a.sql');

		error_log('Fix definition of Supplier.Tax Id');

		error_log('Definition of Supplier.Tax Id corrected');
	}

	public function down()
	{
	}

}
?>
