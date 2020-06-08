<?php namespace App\Database\Seeds;

class CategoriesSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
      function slug($string)
      {
          return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string), '-'));
      }

        $category1 = 'Category One';
        $categorySlug1 = slug($category1);

        $category2 = 'Category Two';
        $categorySlug2 = slug($category2);

        $this->db->table('categories')->where('id_category >', 0)->delete();

        $item1 = [
            'category_name' => $category1,
            'category_slug' => $categorySlug1,

        ];

        $item2 = [
            'category_name' => $category2,
            'category_slug' => $categorySlug2,

        ];

        $this->db->table('categories')->insert($item1);
        $this->db->table('categories')->insert($item2);

    }


}
