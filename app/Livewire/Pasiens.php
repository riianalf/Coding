<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Patient;
use Illuminate\Validation\Rule;

class Pasiens extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public $search = '';
    public $perPage = 15;

    public $showModal = false;
    public $editing = null; // Patient model when editing

    public $state = [
        'nik' => '',
        'full_name' => '',
        'birth_date' => null,
        'gender' => null,
        'desa' => null,
        'kecamatan' => null,
        'kabupaten' => null,
        'provinsi' => null,
        'phone' => null,
        'email' => null,
        'bpjs_number' => null,
        'bpjs_active' => false,
    ];

    protected $rules = [
        'state.nik' => 'required|string|max:25',
        'state.full_name' => 'required|string|max:255',
        'state.birth_date' => 'nullable|date',
        'state.gender' => 'nullable|in:male,female,other',
        'state.email' => 'nullable|email',
        'state.bpjs_number' => 'nullable|string|max:50',
    ];

    protected $listeners = ['deleteConfirmed' => 'delete'];
    public function render()
    {
        $query = Patient::query();

        if ($this->search) {
            $query->where(function ($q) {
                $q->where('full_name', 'like', '%' . $this->search . '%')
                    ->orWhere('nik', 'like', '%' . $this->search . '%')
                    ->orWhere('bpjs_number', 'like', '%' . $this->search . '%');
            });
        }

        $patients = $query->orderBy('full_name')->paginate($this->perPage);

        return view('livewire.pasiens', compact('patients'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function create()
    {
        $this->resetState();
        $this->editing = null;
        $this->showModal = true;
    }

    public function edit($id)
    {
        $patient = Patient::find($id);
        if (! $patient) {
            session()->flash('message', 'Pasien tidak ditemukan.');
            return;
        }

        $this->editing = $patient;
        $this->state = $patient->only(array_keys($this->state));
        // ensure boolean cast
        $this->state['bpjs_active'] = (bool) ($this->state['bpjs_active'] ?? false);
        $this->showModal = true;
    }

    public function save()
    {
        $rules = $this->rules;

        // unique rule for nik when creating/updating
        if ($this->editing) {
            $rules['state.nik'] = ['required','string','max:25', Rule::unique('patients','nik')->ignore($this->editing->id)];
        } else {
            $rules['state.nik'] = ['required','string','max:25', Rule::unique('patients','nik')];
        }

        $this->validate($rules);

        if ($this->editing) {
            $this->editing->update($this->state);
            session()->flash('message', 'Pasien diperbarui.');
        } else {
            Patient::create($this->state);
            session()->flash('message', 'Pasien baru dibuat.');
        }

        $this->showModal = false;
        $this->resetPage();
    }

    public function confirmDelete($id)
    {
        // emit to frontend or simple delete
        $this->dispatchBrowserEvent('confirm-delete', ['id' => $id]);
    }

    public function delete($id)
    {
        $p = Patient::find($id);
        if ($p) {
            $p->delete();
            session()->flash('message', 'Pasien dihapus.');
        }
        $this->resetPage();
    }

    protected function resetState()
    {
        $this->state = array_map(function ($v) { return null; }, $this->state);
        $this->state['bpjs_active'] = false;
    }
}
