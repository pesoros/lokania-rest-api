<?php namespace App\Controllers\API\v1;
 
use CodeIgniter\RESTful\ResourceController;
 
class HotelsController extends ResourceController
{
    protected $format       = 'json';
    // protected $modelName    = 'App\Models\Category_model';
 
    public function index()
    {
        $result = '[
            {
                "id": "1",
                "name": "Sir Joan Hotel",
                "location": "Ibiza Town",
                "full_location": "Passeig Joan Carles I, 07800 Ibiza Town, Spain",
                "price": 100,
                "discount_price": 180,
                "discount_text": "20% off",
                "rating": "4.4",
                "thumbnail": "https://cf.bstatic.com/images/hotel/max1280x900/110/110290594.jpg",
                "pictures": [
                    {
                        "id": "1",
                        "url": "https://cf.bstatic.com/images/hotel/max1280x900/148/148448579.jpg",
                        "caption": "Lorem ipsum dolor sit amet"
                    },
                    {
                        "id": "2",
                        "url": "https://cf.bstatic.com/images/hotel/max1280x900/148/148448522.jpg",
                        "caption": "consectetur adipiscing elit"
                    },
                    {
                        "id": "3",
                        "url": "https://d.otcdn.com/imglib/hotelfotos/8/225/sir-joan-hotel-ibiza-ciudad-014.jpg",
                        "caption": "sed do eiusmod tempor incididunt"
                    },
                    {
                        "id": "4",
                        "url": "https://mk0kexerucovvhuo7ouw.kinstacdn.com/wp-content/uploads/2018/11/148448590.jpg",
                        "caption": "ut labore et dolore magna aliqua"
                    },
                    {
                        "id": "5",
                        "url": "https://f22bfca7a5abd176cefa-59c40a19620c1f22577ade10e9206cf5.ssl.cf1.rackcdn.com/920x540/sir-joan-hotel-S-02.jpg",
                        "caption": "Ut enim ad minim veniam"
                    }
                ],
                "reviews": [
                    {
                        "id": "1",
                        "avatar": "https://i.pinimg.com/originals/65/9c/6e/659c6eb4c16fc2259253a98b2d73290c.jpg",
                        "name": "Korab",
                        "comment": "The restaurant Izakaya by far is one of the best in Ibiza. And also The Butcher burgers and milkshakes after you party are amazing.",
                        "rating": 4,
                        "created_at": "2020-06-10"
                    },
                    {
                        "id": "2",
                        "avatar": "https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
                        "name": "Sulaiman",
                        "comment": "One of the beat hotel experiences ever! The staff at the hotel made it a very pleasant stay with their smile since we arrived until we left.",
                        "rating": 5,
                        "created_at": "2020-05-21"
                    },
                    {
                        "id": "3",
                        "avatar": "https://cdnaws.sharechat.com/1534169931478_8306_compressed_40.jpg",
                        "name": "Ana",
                        "comment": "The service at Sir Joan is just wonderful. Such a nice team! The standard bedrooms are small and with no view and that was what I found less interesting.",
                        "rating": 5,
                        "created_at": "2020-07-12"
                    },
                    {
                        "id": "4",
                        "avatar": "https://organicthemes.com/demo/profile/files/2018/05/profile-pic.jpg",
                        "name": "Valerie",
                        "comment": "I was impressed with the outstanding customer service! From the first person till the last were so friendly at all times. I travel a lot and I have never experienced that level before.",
                        "rating": 3,
                        "created_at": "2020-08-01"
                    },
                    {
                        "id": "5",
                        "avatar": "https://cf.bstatic.com/static/img/review/avatars/ava-o/ecc2e23c1dd875ae18fc261d4a08d35f71db9440.png",
                        "name": "Olivia",
                        "comment": "Everything. Beautiful room with a stunning view of Ibiza old town. We were totally spoilt when we got there. Loved having the Bluetooth B&O speaker & mini library in the room.",
                        "rating": 2,
                        "created_at": "2020-08-12"
                    },
                    {
                        "id": "6",
                        "avatar": "https://vignette.wikia.nocookie.net/naruto/images/0/09/Naruto_newshot.png/revision/latest/scale-to-width-down/340?cb=20170621101134",
                        "name": "Naruto",
                        "comment": "Lorem ipsum dolor sit amet",
                        "rating": 4,
                        "created_at": "2020-08-12"
                    }
                ],
                "rooms": [
                    {
                        "id": "1",
                        "name": "Standard Double Room",
                        "bed": "1 queen bed",
                        "description": "Prices are per suite per 9 nights Included: 10 % VAT",
                        "price": 80,
                        "discount_price": 180,
                        "discount_text": "20% off",
                        "thumbnail": "https://pix10.agoda.net/hotelImages/230/2306823/2306823_17071918430054565196.jpg?s=1024x768",
                        "pictures": [
                            "https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BBlf9Zf.img?h=630&w=1200&m=6&q=60&o=t&l=f&f=jpg&x=1427&y=1122",
                            "https://images2.minutemediacdn.com/image/upload/c_crop,h_1191,w_2121,x_0,y_223/f_auto,q_auto,w_1100/v1555272928/shape/mentalfloss/50569-istock-486178472.jpg",
                            "https://www.gannett-cdn.com/-mm-/05b227ad5b8ad4e9dcb53af4f31d7fbdb7fa901b/c=0-64-2119-1259/local/-/media/USATODAY/USATODAY/2014/08/13/1407953244000-177513283.jpg?width=660&height=373&fit=crop&format=pjpg&auto=webp",
                            "https://media.nomadicmatt.com/hotelreview1a.jpg",
                            "https://dammedia.ledvance.info/media/img/asset-4086347//c,x,0,y,1058,w,4165,h,2342/s,x,1600,y,0/iStock-185270129.jpg"
                        ],
                        "facilities": [
                            "Free toiletries",
                            "Shower",
                            "Safe",
                            "Bidet",
                            "Toilet",
                            "Towels",
                            "Linens",
                            "Desk",
                            "TV",
                            "Heating",
                            "Hairdryer",
                            "Electric kettle"
                        ]
                    },
                    {
                        "id": "2",
                        "name": "Torture Room",
                        "bed": "2 king bed",
                        "description": "Prices are per suite per 9 nights Included: 10 % VAT",
                        "price": 100,
                        "discount_price": 220,
                        "discount_text": "20% off",
                        "thumbnail": "https://cf.bstatic.com/images/hotel/max1024x768/124/124033028.jpg",
                        "pictures": [
                            "https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BBlf9Zf.img?h=630&w=1200&m=6&q=60&o=t&l=f&f=jpg&x=1427&y=1122",
                            "https://images2.minutemediacdn.com/image/upload/c_crop,h_1191,w_2121,x_0,y_223/f_auto,q_auto,w_1100/v1555272928/shape/mentalfloss/50569-istock-486178472.jpg",
                            "https://www.gannett-cdn.com/-mm-/05b227ad5b8ad4e9dcb53af4f31d7fbdb7fa901b/c=0-64-2119-1259/local/-/media/USATODAY/USATODAY/2014/08/13/1407953244000-177513283.jpg?width=660&height=373&fit=crop&format=pjpg&auto=webp",
                            "https://media.nomadicmatt.com/hotelreview1a.jpg",
                            "https://dammedia.ledvance.info/media/img/asset-4086347//c,x,0,y,1058,w,4165,h,2342/s,x,1600,y,0/iStock-185270129.jpg"
                        ],
                        "facilities": [
                            "Free toiletries",
                            "Shower",
                            "Safe",
                            "Bidet",
                            "Toilet",
                            "Towels",
                            "Linens",
                            "Desk",
                            "TV",
                            "Heating",
                            "Hairdryer",
                            "Electric kettle"
                        ]
                    }
                ],
                "facilities": [
                    {
                        "name": "Swimming Pool",
                        "icon": "swim"
                    },
                    {
                        "name": "Non-smoking rooms",
                        "icon": "no_smoking"
                    },
                    {
                        "name": "Parking Area",
                        "icon": "parking"
                    },
                    {
                        "name": "Breakfast",
                        "icon": "breakfast"
                    },
                    {
                        "name": "WiFi in all areas",
                        "icon": "wifi"
                    }
                ],
                "description": "Located in Ibiza Town, 400 m from Pacha, Sir Joan Hotel features air-conditioned rooms with free WiFi throughout the property. Guests can enjoy the on-site bar and outdoor pool.\nAll rooms include a flat-screen TV. Certain units include a seating area where you can relax. Enjoy a cup of coffee from your terrace or balcony. The rooms come with a private bathroom fitted with a shower. Extras include bathrobes, slippers and free toiletries.\nYou will find a 24-hour front desk at the property. An à la carte breakfast is available from November to March for an extra cost.\nThe hotel also offers bike hire. Marina Botafoch is 400 m from Sir Joan Hotel, while Dalt Vila is 400 m from the property. The nearest airport is Ibiza Airport, 5 mi from Sir Joan Hotel.\nCouples in particular like the location – they rated it 8.7 for a two-person trip.\nWe speak your language!",
                "latitude": 38.922120,
                "longitude": 1.424070
            },
            {
                "id": "2",
                "name": "Axel San Sebastián",
                "location": "San Sebastián",
                "full_location": "26 Amara Kalea, 20006 San Sebastián, Spain",
                "price": 180,
                "discount_price": 280,
                "discount_text": "12% off",
                "rating": "4.2",
                "thumbnail": "https://cf.bstatic.com/images/hotel/max1280x900/230/230441446.jpg",
                "pictures": [
                    {
                        "id": "1",
                        "url": "https://cf.bstatic.com/images/hotel/max1280x900/230/230441427.jpg",
                        "caption": "Lorem ipsum dolor sit amet"
                    },
                    {
                        "id": "2",
                        "url": "https://cf.bstatic.com/images/hotel/max1280x900/230/230441442.jpg",
                        "caption": "consectetur adipiscing elit"
                    },
                    {
                        "id": "3",
                        "url": "https://cf.bstatic.com/images/hotel/max1280x900/230/230441561.jpg",
                        "caption": "sed do eiusmod tempor incididunt"
                    },
                    {
                        "id": "4",
                        "url": "https://cf.bstatic.com/images/hotel/max1280x900/230/230441603.jpg",
                        "caption": "ut labore et dolore magna aliqua"
                    },
                    {
                        "id": "5",
                        "url": "https://cf.bstatic.com/images/hotel/max1280x900/230/230441557.jpg",
                        "caption": "Ut enim ad minim veniam"
                    }
                ],
                "reviews": [
                    {
                        "id": "1",
                        "avatar": "https://i.pinimg.com/originals/65/9c/6e/659c6eb4c16fc2259253a98b2d73290c.jpg",
                        "name": "Korab",
                        "comment": "The restaurant Izakaya by far is one of the best in Ibiza. And also The Butcher burgers and milkshakes after you party are amazing.",
                        "rating": 4,
                        "created_at": "2020-06-10"
                    },
                    {
                        "id": "2",
                        "avatar": "https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
                        "name": "Sulaiman",
                        "comment": "One of the beat hotel experiences ever! The staff at the hotel made it a very pleasant stay with their smile since we arrived until we left.",
                        "rating": 5,
                        "created_at": "2020-05-21"
                    },
                    {
                        "id": "3",
                        "avatar": "https://cdnaws.sharechat.com/1534169931478_8306_compressed_40.jpg",
                        "name": "Ana",
                        "comment": "The service at Sir Joan is just wonderful. Such a nice team! The standard bedrooms are small and with no view and that was what I found less interesting.",
                        "rating": 5,
                        "created_at": "2020-07-12"
                    },
                    {
                        "id": "4",
                        "avatar": "https://organicthemes.com/demo/profile/files/2018/05/profile-pic.jpg",
                        "name": "Valerie",
                        "comment": "I was impressed with the outstanding customer service! From the first person till the last were so friendly at all times. I travel a lot and I have never experienced that level before.",
                        "rating": 3,
                        "created_at": "2020-08-01"
                    },
                    {
                        "id": "5",
                        "avatar": "https://cf.bstatic.com/static/img/review/avatars/ava-o/ecc2e23c1dd875ae18fc261d4a08d35f71db9440.png",
                        "name": "Olivia",
                        "comment": "Everything. Beautiful room with a stunning view of Ibiza old town. We were totally spoilt when we got there. Loved having the Bluetooth B&O speaker & mini library in the room.",
                        "rating": 2,
                        "created_at": "2020-08-12"
                    },
                    {
                        "id": "6",
                        "avatar": "https://vignette.wikia.nocookie.net/naruto/images/0/09/Naruto_newshot.png/revision/latest/scale-to-width-down/340?cb=20170621101134",
                        "name": "Naruto",
                        "comment": "Lorem ipsum dolor sit amet",
                        "rating": 4,
                        "created_at": "2020-08-12"
                    }
                ],
                "rooms": [
                    {
                        "id": "1",
                        "name": "Standard Double Room",
                        "bed": "1 queen bed",
                        "description": "Prices are per suite per 9 nights Included: 10 % VAT",
                        "price": 80,
                        "discount_price": 180,
                        "discount_text": "20% off",
                        "thumbnail": "https://pix10.agoda.net/hotelImages/230/2306823/2306823_17071918430054565196.jpg?s=1024x768",
                        "pictures": [
                            "https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BBlf9Zf.img?h=630&w=1200&m=6&q=60&o=t&l=f&f=jpg&x=1427&y=1122",
                            "https://images2.minutemediacdn.com/image/upload/c_crop,h_1191,w_2121,x_0,y_223/f_auto,q_auto,w_1100/v1555272928/shape/mentalfloss/50569-istock-486178472.jpg",
                            "https://www.gannett-cdn.com/-mm-/05b227ad5b8ad4e9dcb53af4f31d7fbdb7fa901b/c=0-64-2119-1259/local/-/media/USATODAY/USATODAY/2014/08/13/1407953244000-177513283.jpg?width=660&height=373&fit=crop&format=pjpg&auto=webp",
                            "https://media.nomadicmatt.com/hotelreview1a.jpg",
                            "https://dammedia.ledvance.info/media/img/asset-4086347//c,x,0,y,1058,w,4165,h,2342/s,x,1600,y,0/iStock-185270129.jpg"
                        ],
                        "facilities": [
                            "Free toiletries",
                            "Shower",
                            "Safe",
                            "Bidet",
                            "Toilet",
                            "Towels",
                            "Linens",
                            "Desk",
                            "TV",
                            "Heating",
                            "Hairdryer",
                            "Electric kettle"
                        ]
                    }
                ],
                "facilities": [
                    {
                        "name": "Swimming Pool",
                        "icon": "swim"
                    },
                    {
                        "name": "Non-smoking rooms",
                        "icon": "no_smoking"
                    },
                    {
                        "name": "Parking Area",
                        "icon": "parking"
                    },
                    {
                        "name": "Breakfast",
                        "icon": "breakfast"
                    },
                    {
                        "name": "WiFi in all areas",
                        "icon": "wifi"
                    }
                ],
                "description": "Located in Ibiza Town, 400 m from Pacha, Sir Joan Hotel features air-conditioned rooms with free WiFi throughout the property. Guests can enjoy the on-site bar and outdoor pool.\nAll rooms include a flat-screen TV. Certain units include a seating area where you can relax. Enjoy a cup of coffee from your terrace or balcony. The rooms come with a private bathroom fitted with a shower. Extras include bathrobes, slippers and free toiletries.\nYou will find a 24-hour front desk at the property. An à la carte breakfast is available from November to March for an extra cost.\nThe hotel also offers bike hire. Marina Botafoch is 400 m from Sir Joan Hotel, while Dalt Vila is 400 m from the property. The nearest airport is Ibiza Airport, 5 mi from Sir Joan Hotel.\nCouples in particular like the location – they rated it 8.7 for a two-person trip.\nWe speak your language!",
                "latitude": 28.031650,
                "longitude": -17.189440
            },
            {
                "id": "3",
                "name": "Hotel Arima",
                "location": "San Sebastián",
                "full_location": "Paseo de Miramon 162, 20014 San Sebastián, Spain",
                "price": 50,
                "discount_price": 90,
                "discount_text": "30% off",
                "rating": "4.7",
                "thumbnail": "https://cf.bstatic.com/images/hotel/max1280x900/156/156399805.jpg",
                "pictures": [
                    {
                        "id": "1",
                        "url": "https://cf.bstatic.com/images/hotel/max1280x900/132/132142224.jpg",
                        "caption": "Lorem ipsum dolor sit amet"
                    },
                    {
                        "id": "2",
                        "url": "https://cf.bstatic.com/images/hotel/max1280x900/168/168032746.jpg",
                        "caption": "consectetur adipiscing elit"
                    },
                    {
                        "id": "3",
                        "url": "https://cf.bstatic.com/images/hotel/max1280x900/213/213277781.jpg",
                        "caption": "sed do eiusmod tempor incididunt"
                    },
                    {
                        "id": "4",
                        "url": "https://cf.bstatic.com/images/hotel/max1280x900/159/159458361.jpg",
                        "caption": "ut labore et dolore magna aliqua"
                    },
                    {
                        "id": "5",
                        "url": "https://cf.bstatic.com/images/hotel/max1280x900/137/137138658.jpg",
                        "caption": "Ut enim ad minim veniam"
                    }
                ],
                "reviews": [
                    {
                        "id": "1",
                        "avatar": "https://i.pinimg.com/originals/65/9c/6e/659c6eb4c16fc2259253a98b2d73290c.jpg",
                        "name": "Korab",
                        "comment": "The restaurant Izakaya by far is one of the best in Ibiza. And also The Butcher burgers and milkshakes after you party are amazing.",
                        "rating": 4,
                        "created_at": "2020-06-10"
                    },
                    {
                        "id": "2",
                        "avatar": "https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
                        "name": "Sulaiman",
                        "comment": "One of the beat hotel experiences ever! The staff at the hotel made it a very pleasant stay with their smile since we arrived until we left.",
                        "rating": 5,
                        "created_at": "2020-05-21"
                    },
                    {
                        "id": "3",
                        "avatar": "https://cdnaws.sharechat.com/1534169931478_8306_compressed_40.jpg",
                        "name": "Ana",
                        "comment": "The service at Sir Joan is just wonderful. Such a nice team! The standard bedrooms are small and with no view and that was what I found less interesting.",
                        "rating": 5,
                        "created_at": "2020-07-12"
                    },
                    {
                        "id": "4",
                        "avatar": "https://organicthemes.com/demo/profile/files/2018/05/profile-pic.jpg",
                        "name": "Valerie",
                        "comment": "I was impressed with the outstanding customer service! From the first person till the last were so friendly at all times. I travel a lot and I have never experienced that level before.",
                        "rating": 3,
                        "created_at": "2020-08-01"
                    },
                    {
                        "id": "5",
                        "avatar": "https://cf.bstatic.com/static/img/review/avatars/ava-o/ecc2e23c1dd875ae18fc261d4a08d35f71db9440.png",
                        "name": "Olivia",
                        "comment": "Everything. Beautiful room with a stunning view of Ibiza old town. We were totally spoilt when we got there. Loved having the Bluetooth B&O speaker & mini library in the room.",
                        "rating": 2,
                        "created_at": "2020-08-12"
                    },
                    {
                        "id": "6",
                        "avatar": "https://vignette.wikia.nocookie.net/naruto/images/0/09/Naruto_newshot.png/revision/latest/scale-to-width-down/340?cb=20170621101134",
                        "name": "Naruto",
                        "comment": "Lorem ipsum dolor sit amet",
                        "rating": 4,
                        "created_at": "2020-08-12"
                    }
                ],
                "rooms": [
                    {
                        "id": "1",
                        "name": "Standard Double Room",
                        "bed": "1 queen bed",
                        "description": "Prices are per suite per 9 nights Included: 10 % VAT",
                        "price": 80,
                        "discount_price": 180,
                        "discount_text": "20% off",
                        "thumbnail": "https://pix10.agoda.net/hotelImages/230/2306823/2306823_17071918430054565196.jpg?s=1024x768",
                        "pictures": [
                            "https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BBlf9Zf.img?h=630&w=1200&m=6&q=60&o=t&l=f&f=jpg&x=1427&y=1122",
                            "https://images2.minutemediacdn.com/image/upload/c_crop,h_1191,w_2121,x_0,y_223/f_auto,q_auto,w_1100/v1555272928/shape/mentalfloss/50569-istock-486178472.jpg",
                            "https://www.gannett-cdn.com/-mm-/05b227ad5b8ad4e9dcb53af4f31d7fbdb7fa901b/c=0-64-2119-1259/local/-/media/USATODAY/USATODAY/2014/08/13/1407953244000-177513283.jpg?width=660&height=373&fit=crop&format=pjpg&auto=webp",
                            "https://media.nomadicmatt.com/hotelreview1a.jpg",
                            "https://dammedia.ledvance.info/media/img/asset-4086347//c,x,0,y,1058,w,4165,h,2342/s,x,1600,y,0/iStock-185270129.jpg"
                        ],
                        "facilities": [
                            "Free toiletries",
                            "Shower",
                            "Safe",
                            "Bidet",
                            "Toilet",
                            "Towels",
                            "Linens",
                            "Desk",
                            "TV",
                            "Heating",
                            "Hairdryer",
                            "Electric kettle"
                        ]
                    }
                ],
                "facilities": [
                    {
                        "name": "Swimming Pool",
                        "icon": "swim"
                    },
                    {
                        "name": "Non-smoking rooms",
                        "icon": "no_smoking"
                    },
                    {
                        "name": "Parking Area",
                        "icon": "parking"
                    },
                    {
                        "name": "Breakfast",
                        "icon": "breakfast"
                    },
                    {
                        "name": "WiFi in all areas",
                        "icon": "wifi"
                    }
                ],
                "description": "Located in Ibiza Town, 400 m from Pacha, Sir Joan Hotel features air-conditioned rooms with free WiFi throughout the property. Guests can enjoy the on-site bar and outdoor pool.\nAll rooms include a flat-screen TV. Certain units include a seating area where you can relax. Enjoy a cup of coffee from your terrace or balcony. The rooms come with a private bathroom fitted with a shower. Extras include bathrobes, slippers and free toiletries.\nYou will find a 24-hour front desk at the property. An à la carte breakfast is available from November to March for an extra cost.\nThe hotel also offers bike hire. Marina Botafoch is 400 m from Sir Joan Hotel, while Dalt Vila is 400 m from the property. The nearest airport is Ibiza Airport, 5 mi from Sir Joan Hotel.\nCouples in particular like the location – they rated it 8.7 for a two-person trip.\nWe speak your language!",
                "latitude": 40.058850,
                "longitude": -3.594310
            },
            {
                "id": "4",
                "name": "Emblemático San Agustin",
                "location": "Icod de los Vinos",
                "full_location": "San Agustín, 18, 38430 Icod de los Vinos, Spain",
                "price": 110,
                "discount_price": 160,
                "discount_text": "12% off",
                "rating": "4.1",
                "thumbnail": "https://cf.bstatic.com/images/hotel/max1280x900/197/19771223.jpg",
                "pictures": [
                    {
                        "id": "1",
                        "url": "https://cf.bstatic.com/images/hotel/max1280x900/197/19771079.jpg",
                        "caption": "Lorem ipsum dolor sit amet"
                    },
                    {
                        "id": "2",
                        "url": "https://cf.bstatic.com/images/hotel/max1280x900/197/19773711.jpg",
                        "caption": "consectetur adipiscing elit"
                    },
                    {
                        "id": "3",
                        "url": "https://cf.bstatic.com/images/hotel/max1280x900/114/114959184.jpg",
                        "caption": "sed do eiusmod tempor incididunt"
                    },
                    {
                        "id": "4",
                        "url": "https://cf.bstatic.com/images/hotel/max1280x900/197/19773248.jpg",
                        "caption": "ut labore et dolore magna aliqua"
                    },
                    {
                        "id": "5",
                        "url": "https://cf.bstatic.com/images/hotel/max1280x900/197/19771051.jpg",
                        "caption": "Ut enim ad minim veniam"
                    }
                ],
                "reviews": [
                    {
                        "id": "1",
                        "avatar": "https://i.pinimg.com/originals/65/9c/6e/659c6eb4c16fc2259253a98b2d73290c.jpg",
                        "name": "Korab",
                        "comment": "The restaurant Izakaya by far is one of the best in Ibiza. And also The Butcher burgers and milkshakes after you party are amazing.",
                        "rating": 4,
                        "created_at": "2020-06-10"
                    },
                    {
                        "id": "2",
                        "avatar": "https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
                        "name": "Sulaiman",
                        "comment": "One of the beat hotel experiences ever! The staff at the hotel made it a very pleasant stay with their smile since we arrived until we left.",
                        "rating": 5,
                        "created_at": "2020-05-21"
                    },
                    {
                        "id": "3",
                        "avatar": "https://cdnaws.sharechat.com/1534169931478_8306_compressed_40.jpg",
                        "name": "Ana",
                        "comment": "The service at Sir Joan is just wonderful. Such a nice team! The standard bedrooms are small and with no view and that was what I found less interesting.",
                        "rating": 5,
                        "created_at": "2020-07-12"
                    },
                    {
                        "id": "4",
                        "avatar": "https://organicthemes.com/demo/profile/files/2018/05/profile-pic.jpg",
                        "name": "Valerie",
                        "comment": "I was impressed with the outstanding customer service! From the first person till the last were so friendly at all times. I travel a lot and I have never experienced that level before.",
                        "rating": 3,
                        "created_at": "2020-08-01"
                    },
                    {
                        "id": "5",
                        "avatar": "https://cf.bstatic.com/static/img/review/avatars/ava-o/ecc2e23c1dd875ae18fc261d4a08d35f71db9440.png",
                        "name": "Olivia",
                        "comment": "Everything. Beautiful room with a stunning view of Ibiza old town. We were totally spoilt when we got there. Loved having the Bluetooth B&O speaker & mini library in the room.",
                        "rating": 2,
                        "created_at": "2020-08-12"
                    },
                    {
                        "id": "6",
                        "avatar": "https://vignette.wikia.nocookie.net/naruto/images/0/09/Naruto_newshot.png/revision/latest/scale-to-width-down/340?cb=20170621101134",
                        "name": "Naruto",
                        "comment": "Lorem ipsum dolor sit amet",
                        "rating": 4,
                        "created_at": "2020-08-12"
                    }
                ],
                "rooms": [
                    {
                        "id": "1",
                        "name": "Standard Double Room",
                        "bed": "1 queen bed",
                        "description": "Prices are per suite per 9 nights Included: 10 % VAT",
                        "price": 80,
                        "discount_price": 180,
                        "discount_text": "20% off",
                        "thumbnail": "https://pix10.agoda.net/hotelImages/230/2306823/2306823_17071918430054565196.jpg?s=1024x768",
                        "pictures": [
                            "https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BBlf9Zf.img?h=630&w=1200&m=6&q=60&o=t&l=f&f=jpg&x=1427&y=1122",
                            "https://images2.minutemediacdn.com/image/upload/c_crop,h_1191,w_2121,x_0,y_223/f_auto,q_auto,w_1100/v1555272928/shape/mentalfloss/50569-istock-486178472.jpg",
                            "https://www.gannett-cdn.com/-mm-/05b227ad5b8ad4e9dcb53af4f31d7fbdb7fa901b/c=0-64-2119-1259/local/-/media/USATODAY/USATODAY/2014/08/13/1407953244000-177513283.jpg?width=660&height=373&fit=crop&format=pjpg&auto=webp",
                            "https://media.nomadicmatt.com/hotelreview1a.jpg",
                            "https://dammedia.ledvance.info/media/img/asset-4086347//c,x,0,y,1058,w,4165,h,2342/s,x,1600,y,0/iStock-185270129.jpg"
                        ],
                        "facilities": [
                            "Free toiletries",
                            "Shower",
                            "Safe",
                            "Bidet",
                            "Toilet",
                            "Towels",
                            "Linens",
                            "Desk",
                            "TV",
                            "Heating",
                            "Hairdryer",
                            "Electric kettle"
                        ]
                    }
                ],
                "facilities": [
                    {
                        "name": "Swimming Pool",
                        "icon": "swim"
                    },
                    {
                        "name": "Non-smoking rooms",
                        "icon": "no_smoking"
                    },
                    {
                        "name": "Parking Area",
                        "icon": "parking"
                    },
                    {
                        "name": "Breakfast",
                        "icon": "breakfast"
                    },
                    {
                        "name": "WiFi in all areas",
                        "icon": "wifi"
                    }
                ],
                "description": "Located in Ibiza Town, 400 m from Pacha, Sir Joan Hotel features air-conditioned rooms with free WiFi throughout the property. Guests can enjoy the on-site bar and outdoor pool.\nAll rooms include a flat-screen TV. Certain units include a seating area where you can relax. Enjoy a cup of coffee from your terrace or balcony. The rooms come with a private bathroom fitted with a shower. Extras include bathrobes, slippers and free toiletries.\nYou will find a 24-hour front desk at the property. An à la carte breakfast is available from November to March for an extra cost.\nThe hotel also offers bike hire. Marina Botafoch is 400 m from Sir Joan Hotel, while Dalt Vila is 400 m from the property. The nearest airport is Ibiza Airport, 5 mi from Sir Joan Hotel.\nCouples in particular like the location – they rated it 8.7 for a two-person trip.\nWe speak your language!",
                "latitude": 1.879120,
                "longitude": -76.268590
            },
            {
                "id": "5",
                "name": "Sol Tenerife",
                "location": "Playa de las Americas",
                "full_location": "Avenida Rafael Puig Lliviana, s/n, 38660 Playa de las Americas, Spain",
                "price": 200,
                "discount_price": 380,
                "discount_text": "18% off",
                "rating": "4.9",
                "thumbnail": "https://cf.bstatic.com/images/hotel/max1280x900/411/41155952.jpg",
                "pictures": [
                    {
                        "id": "1",
                        "url": "https://cf.bstatic.com/images/hotel/max1280x900/123/12364012.jpg",
                        "caption": "Lorem ipsum dolor sit amet"
                    },
                    {
                        "id": "2",
                        "url": "https://cf.bstatic.com/images/hotel/max1280x900/411/41155953.jpg",
                        "caption": "consectetur adipiscing elit"
                    },
                    {
                        "id": "3",
                        "url": "https://cf.bstatic.com/images/hotel/max1280x900/411/41157134.jpg",
                        "caption": "sed do eiusmod tempor incididunt"
                    },
                    {
                        "id": "4",
                        "url": "https://cf.bstatic.com/images/hotel/max1280x900/411/41155954.jpg",
                        "caption": "ut labore et dolore magna aliqua"
                    },
                    {
                        "id": "5",
                        "url": "https://cf.bstatic.com/images/hotel/max1280x900/123/12364040.jpg",
                        "caption": "Ut enim ad minim veniam"
                    }
                ],
                "reviews": [
                    {
                        "id": "1",
                        "avatar": "https://i.pinimg.com/originals/65/9c/6e/659c6eb4c16fc2259253a98b2d73290c.jpg",
                        "name": "Korab",
                        "comment": "The restaurant Izakaya by far is one of the best in Ibiza. And also The Butcher burgers and milkshakes after you party are amazing.",
                        "rating": 4,
                        "created_at": "2020-06-10"
                    },
                    {
                        "id": "2",
                        "avatar": "https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
                        "name": "Sulaiman",
                        "comment": "One of the beat hotel experiences ever! The staff at the hotel made it a very pleasant stay with their smile since we arrived until we left.",
                        "rating": 5,
                        "created_at": "2020-05-21"
                    },
                    {
                        "id": "3",
                        "avatar": "https://cdnaws.sharechat.com/1534169931478_8306_compressed_40.jpg",
                        "name": "Ana",
                        "comment": "The service at Sir Joan is just wonderful. Such a nice team! The standard bedrooms are small and with no view and that was what I found less interesting.",
                        "rating": 5,
                        "created_at": "2020-07-12"
                    },
                    {
                        "id": "4",
                        "avatar": "https://organicthemes.com/demo/profile/files/2018/05/profile-pic.jpg",
                        "name": "Valerie",
                        "comment": "I was impressed with the outstanding customer service! From the first person till the last were so friendly at all times. I travel a lot and I have never experienced that level before.",
                        "rating": 3,
                        "created_at": "2020-08-01"
                    },
                    {
                        "id": "5",
                        "avatar": "https://cf.bstatic.com/static/img/review/avatars/ava-o/ecc2e23c1dd875ae18fc261d4a08d35f71db9440.png",
                        "name": "Olivia",
                        "comment": "Everything. Beautiful room with a stunning view of Ibiza old town. We were totally spoilt when we got there. Loved having the Bluetooth B&O speaker & mini library in the room.",
                        "rating": 2,
                        "created_at": "2020-08-12"
                    },
                    {
                        "id": "6",
                        "avatar": "https://vignette.wikia.nocookie.net/naruto/images/0/09/Naruto_newshot.png/revision/latest/scale-to-width-down/340?cb=20170621101134",
                        "name": "Naruto",
                        "comment": "Lorem ipsum dolor sit amet",
                        "rating": 4,
                        "created_at": "2020-08-12"
                    }
                ],
                "rooms": [
                    {
                        "id": "1",
                        "name": "Standard Double Room",
                        "bed": "1 queen bed",
                        "description": "Prices are per suite per 9 nights Included: 10 % VAT",
                        "price": 80,
                        "discount_price": 180,
                        "discount_text": "20% off",
                        "thumbnail": "https://pix10.agoda.net/hotelImages/230/2306823/2306823_17071918430054565196.jpg?s=1024x768",
                        "pictures": [
                            "https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BBlf9Zf.img?h=630&w=1200&m=6&q=60&o=t&l=f&f=jpg&x=1427&y=1122",
                            "https://images2.minutemediacdn.com/image/upload/c_crop,h_1191,w_2121,x_0,y_223/f_auto,q_auto,w_1100/v1555272928/shape/mentalfloss/50569-istock-486178472.jpg",
                            "https://www.gannett-cdn.com/-mm-/05b227ad5b8ad4e9dcb53af4f31d7fbdb7fa901b/c=0-64-2119-1259/local/-/media/USATODAY/USATODAY/2014/08/13/1407953244000-177513283.jpg?width=660&height=373&fit=crop&format=pjpg&auto=webp",
                            "https://media.nomadicmatt.com/hotelreview1a.jpg",
                            "https://dammedia.ledvance.info/media/img/asset-4086347//c,x,0,y,1058,w,4165,h,2342/s,x,1600,y,0/iStock-185270129.jpg"
                        ],
                        "facilities": [
                            "Free toiletries",
                            "Shower",
                            "Safe",
                            "Bidet",
                            "Toilet",
                            "Towels",
                            "Linens",
                            "Desk",
                            "TV",
                            "Heating",
                            "Hairdryer",
                            "Electric kettle"
                        ]
                    }
                ],
                "facilities": [
                    {
                        "name": "Swimming Pool",
                        "icon": "swim"
                    },
                    {
                        "name": "Non-smoking rooms",
                        "icon": "no_smoking"
                    },
                    {
                        "name": "Parking Area",
                        "icon": "parking"
                    },
                    {
                        "name": "Breakfast",
                        "icon": "breakfast"
                    },
                    {
                        "name": "WiFi in all areas",
                        "icon": "wifi"
                    }
                ],
                "description": "Located in Ibiza Town, 400 m from Pacha, Sir Joan Hotel features air-conditioned rooms with free WiFi throughout the property. Guests can enjoy the on-site bar and outdoor pool.\nAll rooms include a flat-screen TV. Certain units include a seating area where you can relax. Enjoy a cup of coffee from your terrace or balcony. The rooms come with a private bathroom fitted with a shower. Extras include bathrobes, slippers and free toiletries.\nYou will find a 24-hour front desk at the property. An à la carte breakfast is available from November to March for an extra cost.\nThe hotel also offers bike hire. Marina Botafoch is 400 m from Sir Joan Hotel, while Dalt Vila is 400 m from the property. The nearest airport is Ibiza Airport, 5 mi from Sir Joan Hotel.\nCouples in particular like the location – they rated it 8.7 for a two-person trip.\nWe speak your language!",
                "latitude": 40.4137818,
                "longitude": -3.6921271
            }
        ]';
        return $this->respond($result, 200);
    }
}