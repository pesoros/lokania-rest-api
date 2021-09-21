<?php namespace App\Controllers\API\v1;
 
use CodeIgniter\RESTful\ResourceController;
 
class NotificationsController extends ResourceController
{
    protected $format       = 'json';
    // protected $modelName    = 'App\Models\Category_model';
 
    public function index()
    {
        $result = '[
            {
                "id": "1",
                "title": "Payment",
                "message": "Payment bill for lorem ipsum hotel",
                "createdAt": "Today, 10:21 AM",
                "image": "assets/images/icons/payment.png",
                "seen": false
            },
            {
                "id": "2",
                "title": "Topup",
                "message": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "createdAt": "Today, 07:30 AM",
                "image": "assets/images/icons/money-2.png",
                "seen": true
            },
            {
                "id": "3",
                "title": "Gift",
                "message": "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "createdAt": "Today, 08:21 PM",
                "image": "assets/images/icons/coupon.png",
                "seen": true
            },
            {
                "id": "4",
                "title": "Payment",
                "message": "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ",
                "createdAt": "Yesterday, 10:15 AM",
                "image": "assets/images/icons/payment.png",
                "seen": false
            },
            {
                "id": "5",
                "title": "Lorem",
                "message": "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
                "createdAt": "Yesterday, 01:11 AM",
                "image": "assets/images/icons/money-2.png",
                "seen": true
            }
        ]';
        return $this->respond($result, 200);
    }
}