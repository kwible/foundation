<?php

namespace Flyer\Foundation\Events;

class Events
{

	protected static $events = array();

	public static function create($event)
	{
		if (is_object($event))
		{
			self::$events[$event->getTitle] = $event->getEvent;
		} else if (is_array($event)) {
			self::$events[$event['title']] = $event['event'];
		} else {
			throw new \Exception("Events: Cannot create new event, becayse $event isn't a object or array.");
		}
	}

	public static function trigger($eventTitle)
	{
<<<<<<< HEAD
		if (self::exists($eventTitle))
		{
			$event = self::$events[$eventTitle];

			if (is_object($event) && $event instanceof Closure)
			{
				return $event();
			} else {
=======
		if (isset(self::$events[$eventTitle]))
		{
			$event = self::$events[$eventTitle];

			if (is_object($event))
			{
				return $event();

			} else {
				
				// Call as a anomynous function
>>>>>>> 67f38b5d7ca6afeae7b4a6f41160c8cca4fda232
				return $event();
			}
		} else {
			throw new \Exception("Events: Failed to find event, called '" . $eventTitle . "'!");

			return false;
		}
	}

<<<<<<< HEAD
	public static function exists($eventTitle)
	{
		if (isset(self::$events[$eventTitle]))
		{
			return true;
		} else {
			return false;
		}
	}

=======
>>>>>>> 67f38b5d7ca6afeae7b4a6f41160c8cca4fda232
	public function showEvents()
	{
		print_r(self::$events);
	}
}