**Here is an example code of how to call the components**
```
@component('components.bootstrap.modal', [
    'id'        => 'office-add-calendar-events-modal',
    'title'     => __('Add Appointent'),
    'size'      => 'modal-lg',
    'buttons'   => '<button type="button" class="btn btn-secondary" data-target="#office-add-calendar-events-modal" data-toggle="modal">'.__('Close').'</button>' .
                   '<button type="button" class="btn btn-primary" id="save-btn">'.__('Save Event').'</button',
    'options'       => [
        'backdrop'  => true,
        'keyboard'  => true,
        'focus'     => true,
        'show'      => (request()->has('errors'))? true : false
    ]
])
    {{-- Modal Body can be defined here --}}

@endcomponent
```