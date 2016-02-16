<?php
namespace App\Repositories;

use App\Models\Item;

class ItemRepository extends Item
{

    /**
     * Get paginated active items
     * @param  integer $perPage
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getActiveItems($perPage = 9)
    {
        return $this->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);
    }

    public function createItem($userId, array $data)
    {
        /*
          array:10 [▼
            "_token" => "CK1V0jfq36EqNMcPii6rLVeONf5XVyW07KeWZAeP"
            "title" => "Third Ad"
            "price" => "900,000.00"
            "condition" => "2nd Hand(Used)"
            "category" => "Buy and Sell"
            "description" => "Third Advertisement"
            "province" => "Bohol"
            "city" => "Borongan"
            "mobile" => "09494017653"
            "images" => UploadedFile {#30 ▼
              -test: false
              -originalName: "materialdesign_principles_metaphor.png"
              -mimeType: "image/png"
              -size: 9849
              -error: 0
            }
          ]
         */
    }
}
