@extends('layouts.app')

@section('title', 'Edit Page')

@section('content')
    <x-leads.edit-clients :lead="$lead" />

@endsection
