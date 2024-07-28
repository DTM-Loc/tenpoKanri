<?php

// app/Models/Company.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    
    protected $table = 'companies';
    protected $primaryKey = 'CompanyCode';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'Name',
        'Furigana',
        'Abbreviation',
        'TaxRounding',
        'TaxTransfer',
        'AccountsPayableBalance',
        'BankCode',
        'PayeeBankName',
        'BankNameFurigana',
        'BranchCode',
        'MainBranchName',
        'BranchNameFurigana',
        'AccountType',
        'AccountNumber',
        'AccountHolder',
        'AccountHolderFurigana',
        'BreakpointA',
        'FeeA',
        'BreakpointB',
        'FeeB',
        'BreakpointC',
        'FeeC',
    ];
}
