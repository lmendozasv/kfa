<?php
namespace App\Observers;

use App\ordenes;

class ordenesObserver
{
    
    /**
     * Listen to the ordenes creating event.
     *
     * @param  ordenes  $ordenes
     * @return void
     */
    public function creating(ordenes $ordenes)
    {
        //code...
    }

     /**
     * Listen to the ordenes created event.
     *
     * @param  ordenes  $ordenes
     * @return void
     */
    public function created(ordenes $ordenes)
    {
        //code...
    }

    /**
     * Listen to the ordenes updating event.
     *
     * @param  ordenes  $ordenes
     * @return void
     */
    public function updating(ordenes $ordenes)
    {
        //code...
    }

    /**
     * Listen to the ordenes updated event.
     *
     * @param  ordenes  $ordenes
     * @return void
     */
    public function updated(ordenes $ordenes)
    {
        //code...
    }

    /**
     * Listen to the ordenes saving event.
     *
     * @param  ordenes  $ordenes
     * @return void
     */
    public function saving(ordenes $ordenes)
    {
        //code...
    }

    /**
     * Listen to the ordenes saved event.
     *
     * @param  ordenes  $ordenes
     * @return void
     */
    public function saved(ordenes $ordenes)
    {
        //code...
    }

    /**
     * Listen to the ordenes deleting event.
     *
     * @param  ordenes  $ordenes
     * @return void
     */
    public function deleting(ordenes $ordenes)
    {
        //code...
    }

    /**
     * Listen to the ordenes deleted event.
     *
     * @param  ordenes  $ordenes
     * @return void
     */
    public function deleted(ordenes $ordenes)
    {
        //code...
    }

    /**
     * Listen to the ordenes restoring event.
     *
     * @param  ordenes  $ordenes
     * @return void
     */
    public function restoring(ordenes $ordenes)
    {
        //code...
    }

    /**
     * Listen to the ordenes restored event.
     *
     * @param  ordenes  $ordenes
     * @return void
     */
    public function restored(ordenes $ordenes)
    {
        //code...
    }
}