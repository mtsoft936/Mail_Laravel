<?php

namespace App\Http\Livewire\Backend\Settings;

use Livewire\Component;
use App\Models\Setting;

class Gmail extends Component {

    /**
     * Components State
     */
    public $state = [
        'gmail' => '',
        'password' => ''
    ];

    public function updatedState($value) {
        $this->emit('gmailUpdated', $value);
    }

    public function mount() {
        $this->state['gmail'] = config('app.settings.gmail');
        // $this->state['password'] = config('app.settings.password');
        // $this->state['delivery']['key'] = base64_encode(config('app.url') . '|' . $this->state['delivery']['key']);
    }

    public function update() {
        $setting = Setting::where('key', 'gmail')->first();
        // $setting->value = serialize($this->state[$setting->key]);
        // $setting->save();
        $this->emit('saved');
    }

    public function render() {
        return view('backend.settings.gmail');
    }
}
