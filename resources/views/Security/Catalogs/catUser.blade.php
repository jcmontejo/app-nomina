{{-- Extends layout --}}
@extends('layouts.default')
{{-- Content --}}
@section('content')
    <div class="card card-custom">
        <form action="/users/users/{{ $obj->getUrl() }}" method="POST">
            <div class="card-body">
                @csrf
                {{ method_field($obj->getMethod()) }}
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Nombre<span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            placeholder="Introduce nombre" value="{{ old('name') ?? $obj->name }}" />
                        <input type="hidden" name="id" class="form-control" value="{{ $obj->id }}" />
                        @error('name')
                            <div class="fv-plugins-message-container">
                                <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                    <strong>{{ $message }}</strong>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label>Apellidos<span class="text-danger">*</span></label>
                        <input type="text" name="strLastName" class="form-control @error('strLastName') is-invalid @enderror"
                            placeholder="Introduce apellidos" value="{{ old('strLastName') ?? $obj->strLastName }}" />
                        @error('strLastName')
                            <div class="fv-plugins-message-container">
                                <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                    <strong>{{ $message }}</strong>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label>Dirección<span class="text-danger">*</span></label>
                        <input type="text" name="strAddres" class="form-control @error('strAddres') is-invalid @enderror"
                            placeholder="Introduce dirección" value="{{ old('strAddres') ?? $obj->strAddres }}" />
                        @error('strAddres')
                            <div class="fv-plugins-message-container">
                                <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                    <strong>{{ $message }}</strong>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label>Teléfono<span class="text-danger">*</span></label>
                        <input type="text" name="intPhoneNumber" class="form-control @error('intPhoneNumber') is-invalid @enderror"
                            placeholder="Introduce teléfono" value="{{ old('intPhoneNumber') ?? $obj->intPhoneNumber }}" />
                        @error('intPhoneNumber')
                            <div class="fv-plugins-message-container">
                                <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                    <strong>{{ $message }}</strong>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label>Correo Electrónico<span class="text-danger">*</span></label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="Introduce correo electrónico"
                            value="{{ old('email') ?? $obj->email }}" />
                        @error('email')
                            <div class="fv-plugins-message-container">
                                <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                    <strong>{{ $message }}</strong>
                                </div>
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="/branch/branch" class="btn btn-sm btn-secondary mr-2"><i class="fas fa-undo"></i>
                    Atras</a>
                <button type="submit" class="btn btn-sm btn-success btn-save-form"><i class="fas fa-check"></i>
                    Guardar</button>
            </div>
        </form>
    </div>
@endsection
{{-- Styles Section --}}
@section('styles')
    <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
{{-- Scripts Section --}}
@section('scripts')
    {{-- vendors --}}
    <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {})
    </script>
@endsection
