<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Websitedesign;
use App\Models\Digitalmarketing;
use App\Models\Socialmedia;
use App\Models\Gmb;
use App\Models\LeadIndustry;
use App\Models\LeadRating;
use App\Models\LeadSource;
use App\Models\LeadAddress;


class HomeController extends Controller
{
    public function homePage(){
        $leads = Client::oldest()->get(); 
        $totalLeads = Client::count();
        $activeLeads = Client::where('status', 'In Progress')->count();
        $completedLeads = Client::where('status', 'Completed')->count();

        $servicesStats = Client::select('services', \DB::raw('count(*) as total'))
            ->groupBy('services')
            ->get();

        $website = Websitedesign::oldest()->get(); 
        $totalwebsite = Websitedesign::count();
        $digitalmarketing = Digitalmarketing::oldest()->get(); 
        $totaldigitalmarketing = Digitalmarketing::count();
        $socialmedia = Socialmedia::oldest()->get(); 
        $totalsocialmedia = Socialmedia::count();
        $gmb = Gmb::oldest()->get();
        $totalgmb = Gmb::count();

        $leadIndustries = LeadIndustry::oldest()->get();
        $leadRatings    = LeadRating::oldest()->get();
        $leadSources    = LeadSource::oldest()->get();
        $leadAddresses  = LeadAddress::oldest()->get();

        return view('pages.home', compact(
            'leads', 'totalLeads', 'totalwebsite', 'totaldigitalmarketing', 'totalsocialmedia', 'totalgmb',
            'activeLeads', 'completedLeads', 'servicesStats',
            'website', 'digitalmarketing', 'socialmedia', 'gmb',
            'leadIndustries', 'leadRatings', 'leadSources', 'leadAddresses'
        ));
        // return view('pages.home');
    }

    public function showWebsiteCampaign($id)
    {
        $data = Websitedesign::findOrFail($id);

        return view('pages.websitecampaign-user', compact('data'));
    }

     public function showDigitalMarketingCampaign($id)
    {
        $data = Digitalmarketing::findOrFail($id);

        return view('pages.digitalmarketing-user', compact('data'));
    }

    public function showSocialMediaCampaign($id)
    {
        $data = Socialmedia::findOrFail($id);

        return view('pages.socialmedia-user', compact('data'));
    }

    public function showGmbCampaign($id)
    {
        $data = Gmb::findOrFail($id);

        return view('pages.gmb-user', compact('data'));
    }

    public function login(){
        return view('pages.login');
    }

    public function registration(){
        return view('pages.registration');
    }
    
    //  public function edit(){
    //     return view('pages.edit-lead');
    // }

    public function edit($id)
    {
        $lead = Client::findOrFail($id);
        return view('pages.edit-lead', compact('lead'));
    }

    public function update(Request $request, $id)
    {
        $lead = Client::findOrFail($id);

        $lead->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'status' => $request->status,
            'source' => $request->source,
            'rating' => $request->rating,
            'industry' => $request->industry,
            'services' => $request->services,
            'description' => $request->description,
            'country' => $request->country,
            'state' => $request->state,
            'district' => $request->district,
            'deadline' => $request->deadline,
            'notes' => $request->notes,
        ]);

        return redirect()->route('home')->with('success', 'Lead updated successfully!');
    }

    public function user(){
        return view('pages.user');
    }

    public function websitecampaign(){
        return view('pages.website-campaign');
    }

    public function digitalmarketing(){
        return view('pages.digital-marketing');
    }

    public function socialmediamarketing(){
        return view('pages.social-media-marketing');
    }

    public function management(){
        return view('pages.management');
    }

    public function gmb(){
        return view('pages.gmb');
    }

    public function soicalmediamarketingandmanagement(){
        return view('pages.soical-media-marketing-and-management');
    }

     public function training(){
        return view('pages.training');
    }
    
    public function thankyou(){
    return view('pages.thankyou');
}
    
    
}
