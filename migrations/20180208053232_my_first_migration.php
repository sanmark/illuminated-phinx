<?php

use Illuminate\Database\Schema\Blueprint ;
use Sanmark\IlluminatedPhinx\Migration\Migration ;

class MyFirstMigration extends Migration
{

	public function up ()
	{
		$this -> schema -> create ( 'example' , function (Blueprint $t)
		{
			$t
				-> increments ( 'id' ) ;
			$t
				-> string ( 'column_1' )
				-> nullable ( FALSE )
				-> unique () ;
			$t
				-> string ( 'column_2' )
				-> nullable ( FALSE ) ;

			$t
				-> softDeletes () ;
			$t
				-> timestamps () ;
		} ) ;
	}

	public function down ()
	{
		$this -> schema -> dropIfExists ( 'example' ) ;
	}

}
