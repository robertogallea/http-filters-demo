<?php

namespace Tests\Feature;

use App\Category;
use App\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
use Tests\TestCase;

class FiltersTest extends TestCase
{
    use RefreshDatabase;

    private Category $foodCategory;
    private Collection $randomProducts;
    private Product $pizza;

    public function setUp(): void
    {
        parent::setUp();
        $this->withoutExceptionHandling();

        $this->foodCategory = factory(Category::class)->create(['name' => 'Food']);

        $this->randomProducts = factory(Product::class, 3)->create(['price' => 200]);

        $this->pizza = factory(Product::class)->create(['name' => 'Pizza', 'price' => 100, 'category_id' => $this->foodCategory->id]);
    }

    /** @test */
    public function it_can_list_products()
    {
        $this->getJson('/products')
            ->assertJsonCount(4);
    }
}
