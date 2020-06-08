<?php namespace App\Database\Seeds;

class ProductsSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
      function slug($string)
      {
          return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string), '-'));
      }

        $product1 = 'Product one name test';
        $ProductSlug1 = slug($product1);

        $product2 = 'Product two name test';
        $ProductSlug2 = slug($product2);

        $this->db->table('products')->where('id_product >', 0)->delete();

        $item1 = [
            'product_name' => $product1,
            'product_slug' => $ProductSlug1,
            'product_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'product_image' => 'product-default.png',
            'product_price' => 2499,
            'product_price_discount' => 1999,
            'product_paypal_code' => null,
            'product_featured' => null,
            'product_status' => null,
            'category_id' => 1,
            'brand_id' => 1,
        ];

        $item2 = [
            'product_name' => $product2,
            'product_slug' => $ProductSlug2,
            'product_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'product_image' => 'product-default.png',
            'product_price' => 2499,
            'product_price_discount' => null,
            'product_paypal_code' => null,
            'product_featured' => null,
            'product_status' => null,
            'category_id' => 2,
            'brand_id' => 2,
        ];

        $this->db->table('products')->insert($item1);
        $this->db->table('products')->insert($item2);

    }


}
