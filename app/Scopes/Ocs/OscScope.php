<?php
namespace App\Scopes\Osc;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;


class OscScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $user = auth()->user()->id;
        //dd($user);
        $builder->where('osc_id',$user);
    }

}