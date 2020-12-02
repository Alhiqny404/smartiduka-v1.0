<?php

use App\Models\User;
use App\Models\PostLoker;
use App\Models\Pelamar;
use App\Models\simpanloker;
use App\Models\kategori;
use App\Models\StatusNikah;
use App\Models\kualifikasi;

function countPostPending()
{
	return PostLoker::where('status','pending')->count();
}

function countPelamarPendingInCompany()
{
	return Pelamar::where('company_id',auth()->user()->ProfileCompany->id)->where('status','pending')->count();
}
function simpanloker($post_id)
{
	return simpanloker::where('user_id',auth()->User()->id)->where('post_id',$post_id);
}
function kategori()
{
	return kategori::all();
}
function status_nikah()
{
	return StatusNikah::all();
}

function kualifikasi()
{
	return kualifikasi::all();
}

