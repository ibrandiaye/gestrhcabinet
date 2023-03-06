<?php
namespace App;

use Maatwebsite\Excel\Concerns\FromCollection;
class CandidatExport implements FromCollection
{
  public function collection()
  {
     return Candidat::with(['autorisations','autorisations.prolongations','documents'])
    ->get();
  }
}
