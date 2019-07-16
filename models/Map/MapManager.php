<?php

namespace App\Map;
use App\Managers;

class MapManager extends \App\Managers\Manager {

    public function addEvent($name, $lat, $lng, $date, $com) {
        $q = $this->dbConnect()->prepare('INSERT INTO map_events (event_name, event_lat, event_lng, onboarding_date, event_comments) VALUES (?, ?, ?, ?, ?)');
        $eventToAdd = $q->execute(array($name, $lat, $lng, $date, $com));
    }

    public function displayEvents() {
        $events = [];

        $q = $this->dbConnect()->query('SELECT * FROM map_events');
        
        while ($data = $q->fetch(\PDO::FETCH_ASSOC)) {
            $events[] = new Map($data);
        }
        return $events;
    }

    public function displayEditedEvent($id) {
        $q = $this->dbConnect()->prepare('SELECT * FROM map_events WHERE event_id = ?');
        $q->execute(array($id));

        $data = $q->fetch();
                
        return $data;
    }

    public function updateEvent($name, $lat, $lng, $date, $com, $id) {
        $q = $this->dbConnect()->prepare('UPDATE map_events SET event_name = ?, event_lat = ?, event_lng = ?, onboarding_date = ?, event_comments = ?  WHERE event_id = ?');
        $q->execute(array($name, $lat, $lng, $date, $com, $id));
    }

    public function deleteEvent($event_id) {
        $q = $this->dbConnect()->prepare('DELETE FROM map_events WHERE event_id = ?');
        $eventToDelete = $q->execute(array($event_id));
    }
}