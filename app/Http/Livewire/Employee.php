<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\EmployeeModel;


class Employee extends Component
{
    public
        $employees,
        $postId,
        $emp_id,
        $emp_name,
        $emp_email,
        $emp_phone,
        $position,
        $emp_address;

    public $isModalOpen = 0;

    public function render()
    {
        $this->employees = EmployeeModel::all();
        return view('livewire.employee');
    }

    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm()
    {
        $this->postId = '';
        $this->emp_id = '';
        $this->emp_name = '';
        $this->emp_email = '';
        $this->emp_phone = '';
        $this->position = '';
        $this->emp_address = '';
    }

    public function store()
    {
        $this->validate([
            'emp_id' => 'required',
            'emp_name' => 'required',
            'emp_email' => 'required',
            'emp_phone' => 'required',
            'position' => 'required',
            'emp_address' => 'required',
        ]);

        EmployeeModel::updateOrCreate(['id' => $this->postId], [
            'emp_id' => $this->emp_id,
            'emp_name' => $this->emp_name,
            'emp_email' => $this->emp_email,
            'emp_phone' => $this->emp_phone,
            'position' => $this->position,
            'emp_address' => $this->emp_address,
        ]);

        session()->flash('message', $this->id ? 'Data Employee updated.' : 'Data Employee created.');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $employee = EmployeeModel::findOrFail($id);
        $this->postId = $employee->id;
        $this->emp_id = $employee->emp_id;
        $this->emp_name = $employee->emp_name;
        $this->emp_email = $employee->emp_email;
        $this->emp_phone = $employee->emp_phone;
        $this->position = $employee->position;
        $this->emp_address = $employee->emp_address;
        $this->openModalPopover();
    }

    public function delete($id)
    {
        EmployeeModel::find($id)->delete();
        session()->flash('message', 'Data Employee deleted.');
    }
}
