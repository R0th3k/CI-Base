<?php namespace App\Database\Seeds;

class BrandsSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
      function slug($string)
      {
          return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string), '-'));
      }

        $brand1 = 'brand one name test';
        $brandSlug1 = slug($brand1);

        $brand2 = 'brand two name test';
        $brandSlug2 = slug($brand2);

        $this->db->table('brands')->where('id_brand >', 0)->delete();

        $item1 = [
            'brand_name' => $brand1,
            'brand_slug' => $brandSlug1,

        ];

        $item2 = [
            'brand_name' => $brand2,
            'brand_slug' => $brandSlug2,

        ];

        $this->db->table('brands')->insert($item1);
        $this->db->table('brands')->insert($item2);

    }


}
