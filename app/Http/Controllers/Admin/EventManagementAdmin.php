<?php

namespace App\Http\Controllers\Admin;

use App\EventManagement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Gate;

class EventManagementAdmin extends Controller
{
	//
	public function index()
	{
		$eventManage = EventManagement::get();
		return view('admin.event_management.index', compact('eventManage'));
	}

	public function destroy($event)
	{
		// abort_if(Gate::denies('event_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
		$eventManage = EventManagement::find($event);
		$eventManage->delete();

		return back();
	}
	// public function destroy($id)
	// {
	//     $blg = Blog::find($id);
	//     $blg->delete();
	//     return redirect(route('blog.index'))->with('success', 'Blog has been deleted');
	// }
}
