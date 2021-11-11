<?php

namespace App\Http\Controllers;

use App\Venue;
use Illuminate\Http\Request;

class HomeController extends Controller
{

	public $sources = [
		[
			'model'      => '\\App\\Event',
			'date_field' => 'start_time',
			'field'      => 'name',
			'prefix'     => 'Event',
			'suffix'     => '',
			'route'      => 'admin.events.edit',
		],
		[
			'model'      => '\\App\\Meeting',
			'date_field' => 'start_time',
			'field'      => 'attendees',
			'prefix'     => 'Meeting with',
			'suffix'     => '',
			'route'      => 'admin.meetings.edit',
		],
	];

	public function index()
	{
		return view('welcome');
	}
	public function faculty()
	{
		return view('division.faculty');
	}
	public function media()
	{
		return view('division.media');
	}
	public function partnership()
	{
		return view('division.partnership');
	}
	public function technical()
	{
		return view('division.tech');
	}

	public function registerMember()
	{
		return view('register_member');
	}

	public function calendargdsc()
	{
		$events = [];

		$venues = Venue::all();

		foreach ($this->sources as $source) {
			$calendarEvents = $source['model']::when(request('venue_id') && $source['model'] == '\App\Event', function ($query) {
				return $query->where('venue_id', request('venue_id'));
			})->get();
			foreach ($calendarEvents as $model) {
				$crudFieldValue = $model->getOriginal($source['date_field']);

				if (!$crudFieldValue) {
					continue;
				}

				$events[] = [
					'title' => trim($source['prefix'] . " " . $model->{$source['field']}
						. " " . $source['suffix']),
					'start' => $crudFieldValue,
					'url'   => route($source['route'], $model->id),
				];
			}
		}

		return view('landing.calendar', compact('events', 'venues'));
	}
}
