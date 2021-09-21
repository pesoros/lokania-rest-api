<?php namespace App\Controllers\API\v1;
 
use CodeIgniter\RESTful\ResourceController;
 
class HistoryController extends ResourceController
{
    protected $format       = 'json';
    // protected $modelName    = 'App\Models\Category_model';
 
    public function index()
    {
        $result = '[

            {
                "id" : "1",
                "hotel" : "Sed ut perspiciatis unde omnis iste natus",
                "thumbnail" : "https://cf.bstatic.com/images/hotel/max1024x768/195/195444614.jpg",
                "guestName" : "John Doe",
                "bookingDate" : "22 - 25 August, 2020",
                "room" : 2,
                "guest" : 4,
                "rating" : "4,7"
            },
            {
                "id" : "2",
                "hotel" : "Nemo enim ipsam voluptatem quia voluptas sit ",
                "thumbnail" : "https://www.qontak.com/blog/wp-content/uploads/2020/05/hotel.jpg",
                "guestName" : "John Doe",
                "bookingDate" : "10 - 12 July, 2020",
                "room" : 4,
                "guest" : 8,
                "rating" : "4,2"
            },
            {
                "id" : "3",
                "hotel" : "Duis aute irure dolor in reprehenderit ",
                "thumbnail" : "https://q-cf.bstatic.com/images/hotel/max1024x768/211/211874461.jpg",
                "guestName" : "John Doe",
                "bookingDate" : "05 - 08 June, 2020",
                "room" : 1,
                "guest" : 2,
                "rating" : "4,5"
            }
        
        ]';
        return $this->respond($result, 200);
    }
}