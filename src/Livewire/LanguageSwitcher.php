<?php

namespace Bleuren\JetstreamLivewireI18n\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageSwitcher extends Component
{
    public $locales;
    public $currentLocale;

    public function mount()
    {
        $this->locales = config('jetstream-livewire-i18n.supported_locales', ['en']);
        $this->currentLocale = App::getLocale();
    }

    public function setLocale($locale)
    {
        if (in_array($locale, $this->locales)) {
            Session::put('locale', $locale);
            App::setLocale($locale);
            $this->currentLocale = $locale;
            $this->dispatch('locale-changed');
        }
    }

    public function render()
    {
        return view('jetstream-livewire-i18n::language-switcher');
    }
}