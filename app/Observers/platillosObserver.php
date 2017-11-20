<?php
namespace App\Observers;

use App\platillos;
use Automattic\WooCommerce\Client;

class platillosObserver
{
    
    /**
     * Listen to the platillos creating event.
     *
     * @param  platillos  $platillos
     * @return void
     */
    public function creating(platillos $platillos)
    {
        
          
        
        //code...
    }

     /**
     * Listen to the platillos created event.
     *
     * @param  platillos  $platillos
     * @return void
     */
    public function created(platillos $platillos)
    {
              $woocommerce = new Client(
    'http://koalafood.com', 
    'ck_9b67e449fa20b85a4de47c582748e7bb5fda0bcb', 
    'cs_48ab4d01b33895b5843b6bcd6abc8c3c7d9bd222',
    [
        'wp_api' => true,
        'version' => 'wc/v2',
    ]
);
      
        $data = [
    'name' => $platillos->title,
    'type' => 'simple',
    'regular_price' => $platillos->price,
    'description' => $platillos->title,
    'short_description' => $platillos->subtitle,
            'manage_stock'=>'true',
            'stock_quantity'=> $platillos->qty_available,
            'in_stock'=>'true',
            'sku'=>$platillos->id_creator."_".$platillos->id,            
    'categories' => [
        [
            'id' => $platillos->category_id
        ]
    ],
    'images' => [
        [
            'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg',
            'position' => 0
        ],
        [
            'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_back.jpg',
            'position' => 1
        ]
    ]
];
        
       $woocommerce->post('products', $data);
    }

    /**
     * Listen to the platillos updating event.
     *
     * @param  platillos  $platillos
     * @return void
     */
    public function updating(platillos $platillos)
    {
        //code...
    }

    /**
     * Listen to the platillos updated event.
     *
     * @param  platillos  $platillos
     * @return void
     */
    public function updated(platillos $platillos)
    {
        //code...
    }

    /**
     * Listen to the platillos saving event.
     *
     * @param  platillos  $platillos
     * @return void
     */
    public function saving(platillos $platillos)
    {
        //code...
    }

    /**
     * Listen to the platillos saved event.
     *
     * @param  platillos  $platillos
     * @return void
     */
    public function saved(platillos $platillos)
    {
        //code...
    }

    /**
     * Listen to the platillos deleting event.
     *
     * @param  platillos  $platillos
     * @return void
     */
    public function deleting(platillos $platillos)
    {
        //code...
    }

    /**
     * Listen to the platillos deleted event.
     *
     * @param  platillos  $platillos
     * @return void
     */
    public function deleted(platillos $platillos)
    {
        //code...
    }

    /**
     * Listen to the platillos restoring event.
     *
     * @param  platillos  $platillos
     * @return void
     */
    public function restoring(platillos $platillos)
    {
        //code...
    }

    /**
     * Listen to the platillos restored event.
     *
     * @param  platillos  $platillos
     * @return void
     */
    public function restored(platillos $platillos)
    {
        //code...
    }
}