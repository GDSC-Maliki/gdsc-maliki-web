<?php

namespace App\Http\Controllers\Admin;

use App\EventManagement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventManagementAdmin extends Controller
{
	//
	public function index()
	{
		$eventManage = EventManagement::get();
		return view('admin.event_management.index', compact('eventManage'));
	}

	public function destroy(EventManagement $eventM)
	{
		$eventM->delete();

		return back();
	}
}
