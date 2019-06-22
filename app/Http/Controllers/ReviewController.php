<?php

namespace App\Http\Controllers;
use App\Car;
use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function allReviews(){
        //read all cars
        $reviews = Review::all();
        return view('review',['reviews' => $reviews]);
    }

    public function index(){
        return view('newreview');
     } 

    
    public function newReview(){
        $this->validate(request(), [
            'body'=>'required',
            'car_id'=>'required'
        ]);
     
        //$car = Car::where('id', request('id'))->firstOrFail();
     
        $review = new Review;
        $review->body = request('body');
        $review->car_id = request('car_id');
        // $review->car_id = $car->id;
        $review->save();
     
        return view('newreview');
     }
          
}
