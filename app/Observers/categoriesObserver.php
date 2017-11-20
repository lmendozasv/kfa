<?php
namespace App\Observers;

use App\categories;

class categoriesObserver
{
    
    /**
     * Listen to the categories creating event.
     *
     * @param  categories  $categories
     * @return void
     */
    public function creating(categories $categories)
    {
        //code...
    }

     /**
     * Listen to the categories created event.
     *
     * @param  categories  $categories
     * @return void
     */
    public function created(categories $categories)
    {
        //code...
    }

    /**
     * Listen to the categories updating event.
     *
     * @param  categories  $categories
     * @return void
     */
    public function updating(categories $categories)
    {
        //code...
    }

    /**
     * Listen to the categories updated event.
     *
     * @param  categories  $categories
     * @return void
     */
    public function updated(categories $categories)
    {
        //code...
    }

    /**
     * Listen to the categories saving event.
     *
     * @param  categories  $categories
     * @return void
     */
    public function saving(categories $categories)
    {
        //code...
    }

    /**
     * Listen to the categories saved event.
     *
     * @param  categories  $categories
     * @return void
     */
    public function saved(categories $categories)
    {
        //code...
    }

    /**
     * Listen to the categories deleting event.
     *
     * @param  categories  $categories
     * @return void
     */
    public function deleting(categories $categories)
    {
        //code...
    }

    /**
     * Listen to the categories deleted event.
     *
     * @param  categories  $categories
     * @return void
     */
    public function deleted(categories $categories)
    {
        //code...
    }

    /**
     * Listen to the categories restoring event.
     *
     * @param  categories  $categories
     * @return void
     */
    public function restoring(categories $categories)
    {
        //code...
    }

    /**
     * Listen to the categories restored event.
     *
     * @param  categories  $categories
     * @return void
     */
    public function restored(categories $categories)
    {
        //code...
    }
}