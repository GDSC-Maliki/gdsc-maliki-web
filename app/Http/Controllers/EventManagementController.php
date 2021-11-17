<?php

namespace App\Http\Controllers;

use App\EventManagement;
use Illuminate\Http\Request;

class EventManagementController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function qep()
	{
		return view('events.qep');
	}
	public function qepStore(Request $request)
	{
		// dd($request);
		$this->validate(request(), [
			'email'    => 'required|string|unique:event_management',
			'nama'    => 'required|string',
			'instansi'    => 'required',
			'pernahbelum'    => 'required',
			'bersedia'    => 'required',
			'kendala'    => 'required',
			'harapan'    => 'required',
			'nowa'    => 'required',
		]);
		$eventManagement = EventManagement::create([
			'email'     => $request->email,
			'nama'     => $request->nama,
			'instansi'   => $request->instansi,
			'pernahbelum'   => $request->pernahbelum,
			'bersedia'   => $request->bersedia,
			'kendala'   => $request->kendala,
			'harapan'   => $request->harapan,
			'nowa'   => $request->nowa,
		]);

		return redirect(url('https://chat.whatsapp.com/LVl1KUeU81E337PtAHghG0'));
	}
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\EventManagement  $eventManagement
	 * @return \Illuminate\Http\Response
	 */
	public function show(EventManagement $eventManagement)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\EventManagement  $eventManagement
	 * @return \Illuminate\Http\Response
	 */
	public function edit(EventManagement $eventManagement)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\EventManagement  $eventManagement
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, EventManagement $eventManagement)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\EventManagement  $eventManagement
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(EventManagement $eventManagement)
	{
		//
	}
}
