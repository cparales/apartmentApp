<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Session;
use Auth;
use App\Models\House;
use App\Models\User;

class ListingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $sfh = House::where('type', 'SFH')->get(['id', 'title', 'photo_url'])->toArray();
        $duplex = House::where('type', 'duplex')->get(['id', 'title', 'photo_url'])->toArray();
        $houses = [
            'singleFamilyHome' => $sfh,
            'duplex' => $duplex
        ];

        
        foreach($houses as $key => $value)
            foreach($value as $houseKey => $houseValue)
                if(empty($houseValue['photo_url']))
                    $houses[$key][$houseKey]['photo_url'] = 'https://cdn.pixabay.com/photo/2019/10/13/20/07/house-4547140_640.jpg';
           
        return view('listing_index')->with('houses', $houses);
    }
    
    public function create(Request $request)
    {
        return view('listing_create');
    }

    public function show($id)
    {
        $house = House::findOrFail($id);
        return view('listing', [
            'house' => $house,
            'userName' => User::find($house->user_id)->name
        ]);
    }

    public function store(Request $request)
    {
        $result = 'FAILED';

        try
        {
            $request->merge(['user' =>  Auth::user()->name]);
            $house = self::mapRequestToObject($request);
            $insertResult = $house->save();
            if(!empty($insertResult)){
                $result = 'SUCCESS';
                Session::flash('houseId', $house->id);
            }
        }
        catch(Exception $e)
        {
            $result = 'FAILED';
        }
        finally
        {
            Session::flash('message', $result);
            return view('listing_create_success');
        }
    }

    private static function mapRequestToObject(Request $request){
        $mapArray = [
            'title' => 'title',
            'locality' => 'locality',
            'country' => 'country',
            'addressLine' => 'address',
            'houseType' => 'type',
            'roomNo' => 'rooms_nr',
            'floorNo' => 'floors_nr',
            'photo' => 'photo_url',
            'phone' => 'contact_nr',
            'description' => 'description',
            'price' => 'price'
        ];

        $house = new House;
        $house->user_id = Auth::user()->id;
        foreach($mapArray as $key => $value)
            if(!empty($request->$key))
                $house->$value = $request->$key;
        
        
        return $house;
    }
}
