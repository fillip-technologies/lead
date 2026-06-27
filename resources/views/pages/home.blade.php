{{-- @props(['leads' => [$leads]]) --}}

@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <x-home :totalwebsite="$totalwebsite" :totaldigitalmarketing="$totaldigitalmarketing" :totalsocialmedia="$totalsocialmedia" :totalgmb="$totalgmb" :gmb="$gmb" :socialmedia="$socialmedia"
        :digitalmarketing="$digitalmarketing" :website="$website" :leads="$leads" :totalLeads="$totalLeads" :activeLeads="$activeLeads" :completedLeads="$completedLeads"
        :servicesStats="$servicesStats" :leadIndustries="$leadIndustries" :leadRatings="$leadRatings" :leadSources="$leadSources" :leadAddresses="$leadAddresses" />
@endsection
