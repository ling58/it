<?php

use Illuminate\Database\Seeder;

class DirectorateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Direktorat::create([
            'direktorat' => 'SALES & MARKETING',

        ]);

        \App\Direktorat::create([
            'direktorat' => 'COMPTROLLER',
            
        ]);

        \App\Direktorat::create([
            'direktorat' => 'FINANCE',
            
        ]);

        \App\Direktorat::create([
            'direktorat' => 'PROCUREMENT, QUALITY & RESEARCH',
            
        ]);

        \App\Direktorat::create([
            'direktorat' => 'PRODUCTION',
            
        ]);

        \App\Direktorat::create([
            'direktorat' => 'EXECUTIVE',
            
        ]);

        \App\Pt::create([
            'pt' => 'BAI',
        ]);

        \App\Pt::create([
            'pt' => 'IMI',
        ]);

        \App\Pt::create([
            'pt' => 'ST',
        ]);

        \App\Duty::create([
            'duty' => 'Head Office',
        ]);

        \App\Duty::create([
            'duty' => 'Branch',
        ]);

        \App\Duty::create([
            'duty' => 'Factory',
        ]);

        \App\Departement::create([
            'departement' => 'HR',
        ]);

        \App\Departement::create([
            'departement' => 'PRODUCT DEVELOPMENT',
        ]);
        
        \App\Departement::create([
            'departement' => 'SALES',
        ]);
        
        \App\Departement::create([
            'departement' => 'MARKETING',
        ]);

        \App\Departement::create([
            'departement' => 'SACCHARINE',
        ]);

        \App\Departement::create([
            'departement' => 'CYCLAMATE',
        ]);

        \App\Departement::create([
            'departement' => 'PACKING BA',
        ]);

        \App\Departement::create([
            'departement' => 'PACKING IMI',
        ]);

        \App\Departement::create([
            'departement' => 'PLASTIC ROPE',
        ]);

        \App\Departement::create([
            'departement' => 'UTILITIES & ENGINEERING',
        ]);

        \App\Departement::create([
            'departement' => 'PROCUREMENT',
        ]);

        \App\Departement::create([
            'departement' => 'R & D',
        ]);

        \App\Departement::create([
            'departement' => 'PPIC',
        ]);

        \App\Departement::create([
            'departement' => 'QC & LABORATORY',
        ]);

        \App\Departement::create([
            'departement' => 'INBOUND LOGISTIC',
        ]);

        \App\Departement::create([
            'departement' => 'OUTBOUND LOGISTIC',
        ]);

        \App\Departement::create([
            'departement' => 'FINANCE',
        ]);

        \App\Departement::create([
            'departement' => 'ACCOUNTING',
        ]);

        \App\Departement::create([
            'departement' => 'TAXATION',
        ]);

        \App\Departement::create([
            'departement' => 'BRANCH & BUDGET CONTROL',
        ]);

        \App\Departement::create([
            'departement' => 'IT',
        ]);

        \App\Departement::create([
            'departement' => 'INTERNAL AUDIT',
        ]);

        \App\Departement::create([
            'departement' => 'LEGAL & LICENSE',
        ]);

        \App\Departement::create([
            'departement' => 'QMS & HSE',
        ]);

        \App\Departement::create([
            'departement' => 'GENERAL AFFAIR',
        ]);

        \App\Jabatan::create([
            'jabatan' => 'Account Payable BA'
        ]);

        \App\Jabatan::create([
            'jabatan' => 'Account Payable IMI & ST'
        ]);

        \App\Jabatan::create([
            'jabatan' => 'Accounting Manager'
        ]);

        \App\Jabatan::create([
            'jabatan' => 'Billing'
        ]);

        \App\Jabatan::create([
            'jabatan' => 'Branch & Budget Control Asst. Manager'
        ]);

        \App\Jabatan::create([
            'jabatan' => 'Branch HR Supervisor'
        ]);

        \App\Jabatan::create([
            'jabatan' => 'Branch Manager'
        ]);

        \App\Jabatan::create([
            'jabatan' => 'Building Maintenance Staff'
        ]);

        \App\Jabatan::create([
            'jabatan' => 'Bulk Production Manager'
        ]);

        \App\Jabatan::create([
            'jabatan' => 'BWH - Administration'
        ]);

        \App\Jabatan::create([
            'jabatan' => 'BWH - Checker'
        ]);

        \App\Jabatan::create([
            'jabatan' => 'BWH - Helper'
        ]);

        \App\Jabatan::create([
            'jabatan' => 'BWH Coordinator'
        ]);

        \App\Jabatan::create([
            'jabatan' => 'Canvass Driver'
        ]);

        \App\Jabatan::create([
            'jabatan' => 'Canvasser'
        ]);

        \App\Jabatan::create([
            'jabatan' => 'Cashier'
        ]);

        \App\Jabatan::create([
            'jabatan' => 'Channel Manager'
        ]);
        
        \App\Jabatan::create([
            'jabatan' => 'Collection'
        ]);
        
        \App\Jabatan::create([
            'jabatan' => 'Compensation & Benefit Staff'
        ]);
        
        \App\Jabatan::create([
            'jabatan' => 'Cost Accounting'
        ]);
        
        \App\Jabatan::create([
            'jabatan' => 'Creative Design'
        ]);
        
        \App\Jabatan::create([
            'jabatan' => 'CWH - Administration'
        ]);
        
        \App\Jabatan::create([
            'jabatan' => 'CWH - Forklift Driver'
        ]);
        
        \App\Jabatan::create([
            'jabatan' => 'CWH - Helper'
        ]);
        
        \App\Jabatan::create([
            'jabatan' => 'CWH - Incoming Checker'
        ]);
        
        \App\Jabatan::create([
            'jabatan' => 'CWH - Return Goods Helper'
        ]);
        
        \App\Jabatan::create([
            'jabatan' => 'CWH - Storage Checker'
        ]);
        
        \App\Jabatan::create([
            'jabatan' => 'CWH Supervisor'
        ]);
        
        \App\Jabatan::create([
            'jabatan' => 'Cyclamate - Administration'
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
        
        \App\Jabatan::create([
            'jabatan' => ''
        ]);
    }
}

            
            
            
