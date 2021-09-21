<?php namespace App\Controllers\API\v1;
 
use CodeIgniter\RESTful\ResourceController;
 
class PlacesController extends ResourceController
{
    protected $format       = 'json';
    // protected $modelName    = 'App\Models\Category_model';
 
    public function index()
    {
        $result = '[
            {
                "id": "1",
                "name": "Barcelona",
                "image": "https://media-cdn.tripadvisor.com/media/photo-s/12/4f/1e/5f/barcelona.jpg",
                "latitude": 41.390205,
                "longitude": 2.154007
            },
            {
                "id": "2",
                "name": "Alicante",
                "image": "https://thumbnails.trvl-media.com/L9cTxwtVYPL-Ap7hUkxGZMvR594=/773x530/smart/filters:quality(60)/images.trvl-media.com/hotels/2000000/1410000/1407700/1407699/0f8de35e_z.jpg",
                "latitude": 38.534168,
                "longitude": -0.131389
            },
            {
                "id": "3",
                "name": "Valencia",
                "image": "https://d1ez3020z2uu9b.cloudfront.net/imagecache/blog-photos/17973_Crop_720_480.jpg",
                "latitude": 38.966667,
                "longitude": -0.183333
            },
            {
                "id": "4",
                "name": "Málaga",
                "image": "https://www.spain.info/export/sites/segtur/.content/imagenes/cabeceras-grandes/andalucia/malaga-52886652-istock.jpg_1014274486.jpg",
                "latitude": 36.516666,
                "longitude": -4.883333
            },
            {
                "id": "5",
                "name": "Biscay",
                "image": "https://www.cruise1st.co.uk/blog/wp-content/uploads/2016/06/Fotolia_86185164_S-702x336.jpg",
                "latitude": 43.262985,
                "longitude": -2.935013
            },
            {
                "id": "6",
                "name": "Gipuzkoa",
                "image": "https://previews.123rf.com/images/galtza/galtza1912/galtza191200048/138430371-port-of-mutriku-aerial-view-gipuzkoa-basque-country.jpg",
                "latitude": 43.312691,
                "longitude": -1.993332 
            },
            {
                "id": "7",
                "name": "Cádiz",
                "image": "https://image.shutterstock.com/image-photo/picturesque-sight-beautiful-olvera-province-260nw-1517510528.jpg",
                "latitude": 36.533333,
                "longitude": -6.283333
            },
            {
                "id": "8",
                "name": "Granada",
                "image": "https://blog.fuertehoteles.com/wp-content/uploads/2018/05/montefrio-granada-atardecer.jpg",
                "latitude": 37.178055,
                "longitude": -3.600833
            },
            {
                "id": "9",
                "name": "Castellón",
                "image": "https://media-cdn.tripadvisor.com/media/photo-s/17/24/c4/1f/provincia-de-castellon.jpg",
                "latitude": 39.978569,
                "longitude": -0.055444
            }
        ]';
        return $this->respond($result, 200);
    }
}