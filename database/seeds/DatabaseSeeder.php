<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call('Reg_emplosTableSeeder');
    }
}

class Reg_emplosTableSeeder extends Seeder
{
    public function run()
    {
        DB::insert('insert into reg_emplos
                (c_name_emplo, e_sex_emplo, c_area_emplo, d_datebirth_emplo, c_email_emplo,
                i_phone_emplo, created_at)
                values(?,?,?,?,?,?,?)',
                array('Alfreds Futterkiste','M', 'Computing', '1987-11-22', 
                    'alfredsfutterkiste@gmail.com', 916478299, date('Y-m-d H:i:s')));
        
        DB::insert('insert into reg_emplos
                (c_name_emplo, e_sex_emplo, c_area_emplo, d_datebirth_emplo, c_email_emplo,
                i_phone_emplo, created_at)
                values(?,?,?,?,?,?,?)',
                array('Antonio Moreno','M', 'Computing', '1987-11-22', 
                    'antoniomoreno@gmail.com', 916478299, date('Y-m-d H:i:s')));
        
        DB::insert('insert into reg_emplos
                (c_name_emplo, e_sex_emplo, c_area_emplo, d_datebirth_emplo, c_email_emplo,
                i_phone_emplo, created_at)
                values(?,?,?,?,?,?,?)',
                array('Thomas Hardy','M', 'Computing', '1989-11-22', 
                    'thomashardy@gmail.com', 916458299, date('Y-m-d H:i:s')));
        
        DB::insert('insert into reg_emplos
                (c_name_emplo, e_sex_emplo, c_area_emplo, d_datebirth_emplo, c_email_emplo,
                i_phone_emplo, created_at)
                values(?,?,?,?,?,?,?)',
                array('Francisco Chang','M', 'Computing', '1977-11-22', 
                    'franciscochang@gmail.com', 918768299, date('Y-m-d H:i:s')));
        
        DB::insert('insert into reg_emplos
                (c_name_emplo, e_sex_emplo, c_area_emplo, d_datebirth_emplo, c_email_emplo,
                i_phone_emplo, created_at)
                values(?,?,?,?,?,?,?)',
                array('Patricio Simpson','M', 'Computing', '1990-11-22', 
                    'patriciosimpson@gmail.com', 916479129, date('Y-m-d H:i:s')));
        
        DB::insert('insert into reg_emplos
                (c_name_emplo, e_sex_emplo, c_area_emplo, d_datebirth_emplo, c_email_emplo,
                i_phone_emplo, created_at)
                values(?,?,?,?,?,?,?)',
                array('Ana Trujillo','F', 'financial', '1987-11-22', 
                    'anatrujillo@gmail.com', 916478245, date('Y-m-d H:i:s')));
        
        DB::insert('insert into reg_emplos
                (c_name_emplo, e_sex_emplo, c_area_emplo, d_datebirth_emplo, c_email_emplo,
                i_phone_emplo, created_at)
                values(?,?,?,?,?,?,?)',
                array('Christina Berglund','F', 'financial', '1988-11-22', 
                    'christinaberglund@gmail.com', 916471239, date('Y-m-d H:i:s')));
        
        DB::insert('insert into reg_emplos
                (c_name_emplo, e_sex_emplo, c_area_emplo, d_datebirth_emplo, c_email_emplo,
                i_phone_emplo, created_at)
                values(?,?,?,?,?,?,?)',
                array('Hanna Moos','F', 'human Resources', '1991-11-22', 
                    'hannamoos@gmail.com', 916478200, date('Y-m-d H:i:s')));
        
        DB::insert('insert into reg_emplos
                (c_name_emplo, e_sex_emplo, c_area_emplo, d_datebirth_emplo, c_email_emplo,
                i_phone_emplo, created_at)
                values(?,?,?,?,?,?,?)',
                array('Elizabeth Brown','F', 'human Resources', '1967-11-22', 
                    'elizabethbrown@gmail.com', 916478212, date('Y-m-d H:i:s')));
        
        DB::insert('insert into reg_emplos
                (c_name_emplo, e_sex_emplo, c_area_emplo, d_datebirth_emplo, c_email_emplo,
                i_phone_emplo, created_at)
                values(?,?,?,?,?,?,?)',
                array('Roland Mendel','M', 'human Resources', '1987-11-22', 
                    'rolandmendel@gmail.com', 916478119, date('Y-m-d H:i:s')));
        
        DB::insert('insert into reg_emplos
                (c_name_emplo, e_sex_emplo, c_area_emplo, d_datebirth_emplo, c_email_emplo,
                i_phone_emplo, created_at)
                values(?,?,?,?,?,?,?)',
                array('Ann Devon','F', 'human Resources', '1991-11-22', 
                    'anndevon@gmail.com', 916478291, date('Y-m-d H:i:s')));
        
        DB::insert('insert into reg_emplos
                (c_name_emplo, e_sex_emplo, c_area_emplo, d_datebirth_emplo, c_email_emplo,
                i_phone_emplo, created_at)
                values(?,?,?,?,?,?,?)',
                array('Lino Rodriguez','M', 'sales', '1987-11-22', 
                    'linorodriguez@gmail.com', 916476759, date('Y-m-d H:i:s')));
        
        DB::insert('insert into reg_emplos
                (c_name_emplo, e_sex_emplo, c_area_emplo, d_datebirth_emplo, c_email_emplo,
                i_phone_emplo, created_at)
                values(?,?,?,?,?,?,?)',
                array('Eduardo Saavedra','M', 'sales', '1983-11-22', 
                    'eduardosaavedra@gmail.com', 916478127, date('Y-m-d H:i:s')));
        
        DB::insert('insert into reg_emplos
                (c_name_emplo, e_sex_emplo, c_area_emplo, d_datebirth_emplo, c_email_emplo,
                i_phone_emplo, created_at)
                values(?,?,?,?,?,?,?)',
                array('Maria Larsson','F', 'sales', '1987-11-22', 
                    'marialarsson@gmail.com', 963782099, date('Y-m-d H:i:s')));
        
        DB::insert('insert into reg_emplos
                (c_name_emplo, e_sex_emplo, c_area_emplo, d_datebirth_emplo, c_email_emplo,
                i_phone_emplo, created_at)
                values(?,?,?,?,?,?,?)',
                array('Carine Schmitt','F', 'sales', '1988-11-22', 
                    'carineschmitt@gmail.com', 923984346, date('Y-m-d H:i:s')));
        
        DB::insert('insert into reg_emplos
                (c_name_emplo, e_sex_emplo, c_area_emplo, d_datebirth_emplo, c_email_emplo,
                i_phone_emplo, created_at)
                values(?,?,?,?,?,?,?)',
                array('Helen Bennett','F', 'sales', '1995-11-22', 
                    'helenbennett@gmail.com', 916778299, date('Y-m-d H:i:s')));
        
        DB::insert('insert into reg_emplos
                (c_name_emplo, e_sex_emplo, c_area_emplo, d_datebirth_emplo, c_email_emplo,
                i_phone_emplo, created_at)
                values(?,?,?,?,?,?,?)',
                array('Carlos Hernández','M', 'sales', '1984-11-22', 
                    'carloshernández@gmail.com', 916478599, date('Y-m-d H:i:s')));
        
        DB::insert('insert into reg_emplos
                (c_name_emplo, e_sex_emplo, c_area_emplo, d_datebirth_emplo, c_email_emplo,
                i_phone_emplo, created_at)
                values(?,?,?,?,?,?,?)',
                array('Philip Cramer','M', 'sales', '1975-11-22', 
                    'philipcramer@gmail.com', 916445299, date('Y-m-d H:i:s')));
        
        DB::insert('insert into reg_emplos
                (c_name_emplo, e_sex_emplo, c_area_emplo, d_datebirth_emplo, c_email_emplo,
                i_phone_emplo, created_at)
                values(?,?,?,?,?,?,?)',
                array('John Steel','M', 'sales', '1987-11-22', 
                    'johnsteel@gmail.com', 916478274, date('Y-m-d H:i:s')));
        
        DB::insert('insert into reg_emplos
                (c_name_emplo, e_sex_emplo, c_area_emplo, d_datebirth_emplo, c_email_emplo,
                i_phone_emplo, created_at)
                values(?,?,?,?,?,?,?)',
                array('Yvonne Moncada','F', 'sales', '1967-11-22', 
                    'yvonnemoncada@gmail.com', 916478111, date('Y-m-d H:i:s')));
        
        DB::insert('insert into reg_emplos
                (c_name_emplo, e_sex_emplo, c_area_emplo, d_datebirth_emplo, c_email_emplo,
                i_phone_emplo, created_at)
                values(?,?,?,?,?,?,?)',
                array('Marie Bertrand','F', 'sales', '1968-11-22', 
                    'mariebertrand@gmail.com', 926478120, date('Y-m-d H:i:s')));
    } 
}