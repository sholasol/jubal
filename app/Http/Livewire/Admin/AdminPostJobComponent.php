<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ServiceCategory;
use App\Models\Jobs;
use App\Models\Services;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class AdminPostJobComponent extends Component
{

    use WithFileUploads;

    public $title;
    public $service_category;
    public $gender;
    public $male;
    public $female;
    public $no_singer;
    public $no_song;
    public $timeline;
    public $demo;
    public $proposed_title;
    public $writing_nature;
    public $language;
    public $genre;
    public $need_instrumentalist_engineer;
    public $no_instrumentalist;
    public $location;
    public $instrumentalist_available;
    public $no_session;
    public $work_proxy;
    public $instrumentalist_category;
    public $no_location;
    public $nature_performance;
    public $song_type;
    public $nature_musician;
    public $duration;
    public $dress_code;
    public $presentation_date;
    public $song_title;
    public $nature_event;
    public $event_type;
    public $no_guest;
    public $event_date;
    public $equipment_available;
    public $preferred_song;
    public $preferred_location;
    public $recording_type;
    public $audio_recording;
    public $have_studio_engr;
    public $need_instrumentalist;
    public $additional_instrumentalist;
    public $proposed_date;
    public $production_stage;
    public $timeline_delivery;
    public $producer_caliber;
    public $music_style;
    public $fresh_beat;
    public $no_beat;
    public $beat_maker_caliber;
    public $reference;
    public $learning_area;
    public $instrument;
    public $learning_scope;
    public $trainee_age;
    public $prior_knowledge;
    public $proficiency;
    public $director_caliber;
    public $nature_album;
    public $artist_name;
    public $additional_information;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'title' => 'required',
            'service_category' => 'required',
            'additional_information' => 'required'
        ]);
    }

    public function postJob()
    {
        $this->validate([
            'title' => 'required',
            'service_category' => 'required',
            'additional_information' => 'required'
        ]); 
        
        $job = new Jobs();
        $job->title = $this->title;
        $job->service_category = $this->service_category;
        $job->gender = $this->gender;
        $job->user_id = Auth::user()->id;
        $job->male = $this->male;
        $job->female    = $this->female;
        $job->no_singer = $this->no_singer;
        $job->no_song = $this->no_song;
        $job->timeline = $this->timeline;

        $demoName = Carbon::now()->timestamp.'.'.$this->demo->extension();
        $this->demo->storeAs('demos', $demoName); //storage directory and image name
        $job->demo = $demoName;
        //$job->demo = $this->
        $job->proposed_title = $this->proposed_title;
        $job->writing_nature = $this->writing_nature;
        $job->language = $this->language;
        $job->genre = $this->genre; 
        $job->need_instrumentalist_engineer = $this->need_instrumentalist_engineer;
        $job->no_instrumentalist = $this->no_instrumentalist;
        $job->location = $this->location;
        $job->instrumentalist_available = $this->instrumentalist_available;
        $job->no_session = $this->no_session;
        $job->work_proxy = $this->work_proxy;
        $job->instrumentalist_category = $this->instrumentalist_category;
        $job->no_location = $this->no_location;
        $job->nature_performance = $this->nature_performance;
        $job->song_type = $this->song_type;
        $job->nature_musician = $this->nature_musician;
        $job->duration = $this->duration;
        $job->dress_code = $this->dress_code;
        $job->presentation_date = $this->presentation_date;
        $job->song_title = $this->song_title;
        $job->nature_event = $this->nature_event;
        $job->event_type = $this->event_type;
        $job->no_guest = $this->no_guest;
        $job->event_date = $this->event_date;
        $job->equipment_available = $this->equipment_available;
        $job->preferred_song = $this->preferred_song;
        $job->preferred_location = $this->preferred_location;
        $job->recording_type = $this->recording_type;
        $job->audio_recording = $this->audio_recording;
        $job->have_studio_engr = $this->have_studio_engr;
        $job->need_instrumentalist = $this->need_instrumentalist;
        $job->additional_instrumentalist = $this->additional_instrumentalist;
        $job->proposed_date = $this->proposed_date;
        $job->production_stage = $this->production_stage;
        $job->timeline_delivery = $this->timeline_delivery;
        $job->producer_caliber = $this->producer_caliber;
        $job->music_style = $this->music_style;
        $job->fresh_beat = $this->fresh_beat;
        $job->no_beat = $this->no_beat;
        $job->beat_maker_caliber = $this->beat_maker_caliber;
        $job->reference = $this->reference;
        $job->learning_area = $this->learning_area;
        $job->instrument = $this->instrument;
        $job->learning_scope = $this->learning_scope;
        $job->trainee_age = $this->trainee_age;
        $job->prior_knowledge = $this->prior_knowledge;
        $job->proficiency = $this->proficiency;
        $job->director_caliber = $this->director_caliber;
        $job->nature_album = $this->nature_album;
        $job->artist_name = $this->artist_name;

        $job->additional_information = $this->additional_information;

        $job->save();
        $this->dispatchBrowserEvent('done');

        
   
    }
 




    public function render()
    {
        $scategories = ServiceCategory::orderBy('name', 'ASC')->get();
        $services = Services::all();
        $instruments = Services::where('service_category_id', 18)->get();
        return view('livewire.admin.admin-post-job-component', ['scategories'=>$scategories, 'services'=>$services, 'instruments'=>$instruments])->layout('layouts.admin');
    }
}
 