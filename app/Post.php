<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use SoftDeletes;
    
 
    protected $dates = ['deleted_at'];
 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) { 
           
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

}
