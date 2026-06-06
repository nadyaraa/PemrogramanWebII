<?php
namespace App\Models;
use CodeIgniter\Model;

class MahasiswaModel extends Model {
    public function getData() {
        return [
            'nama' => 'Nadya Ramadhani',
            'nim'  => '2410817120019',
            'prodi' => 'Teknologi Informasi',
            'hobi'  => 'Main, Baca, Nonton',
            'makan' => 'Noodles for life',
            'skill' => ['Bernafas', 'Berjalan', 'Berlari', 'Berbaring', 'Bermimpi', 'Bertahan Hidup'],
            'foto'  => base_url('pp.jpg'),
            'qotd'  => 'Quotes of the Day: Jadilah manusia yang HIDUP karena itu berarti tidak MATI'
        ];
    }
}
?>