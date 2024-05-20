<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    use HasFactory;

    protected $table = 'camions';
    protected $fillable = [
        "matricule",
        "statue",
        "is_for_aej",
        "marque",
        "genre",
        "type_carburant",
        "n_chasie",
        "puissanse_fiscale",
        "premier_mise",
        "consommation"
    ];
    static public function getData()
    {
        $data = self::select("camions.*");
        // if (Request()->get('search')) {
        //     $data = $data->where('name', 'like', '%' . Request()->get('search') . '%');
        // }
        return $data->latest()->paginate(5);
    }
}
