<?php namespace Venturecraft\Revisionable;

/*
* This file was added to the Revisionable package by Venture Craft by InstanceOfMichael
*
* (c) Venture Craft <http://www.venturecraft.com.au>
*
* I just found out that multiple observers work
* 
* e.g. 
*      self::observe(new ItemObserver);
*      self::observe(new RevisionableObserver);
* 
*/

class RevisionableObserver {

    public function saving(RevisionableInterface $model)
    {
        $model->preSave();
    }

    public function saved(RevisionableInterface $model)
    {
        $model->postSave();
    }

    public function deleted(RevisionableInterface $model)
    {
        $model->preSave();
        $model->postDelete();
    }

}
