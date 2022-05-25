{{-- Extends layout --}}
@extends('layouts.default')
{{-- Content --}}
@section('content')
    <div class="card card-custom">
        <form action="/users/users/{{ $obj->getUrl() }}" method="POST">
            @csrf
            {{ method_field($obj->getMethod()) }}
            <div class="card-body">
                <div class="col-12">
                    <!-- Tab Nav -->
                    <div class="nav-wrapper position-relative mb-2">
                        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 active d-flex align-items-center justify-content-center"
                                    id="tabs-icons-text-1-tab" data-bs-toggle="tab" href="#tabs-icons-text-1" role="tab"
                                    aria-controls="tabs-icons-text-1" aria-selected="true">
                                    <i class="icon icon-xs me-2 fas fa-user"></i>
                                    Datos Generales
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 d-flex align-items-center justify-content-center"
                                    id="tabs-icons-text-2-tab" data-bs-toggle="tab" href="#tabs-icons-text-2" role="tab"
                                    aria-controls="tabs-icons-text-2" aria-selected="false">
                                    <i class="icon icon-xs me-2 fas fa-building"></i>
                                    Centro de Trabajo
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End of Tab Nav -->
                    <!-- Tab Content -->
                    <div class="card border-0">
                        <div class="card-body p-0">
                            <div class="tab-content" id="tabcontent2">
                                <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                                    aria-labelledby="tabs-icons-text-1-tab">
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label>Nombre<span class="text-danger">*</span></label>
                                            <input type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                placeholder="Introduce nombre" value="{{ old('name') ?? $obj->name }}" />
                                            <input type="hidden" name="id" class="form-control"
                                                value="{{ $obj->id }}" />
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
                                            <input type="text" name="strLastName"
                                                class="form-control @error('strLastName') is-invalid @enderror"
                                                placeholder="Introduce apellidos"
                                                value="{{ old('strLastName') ?? $obj->strLastName }}" />
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
                                            <input type="text" name="strAddres"
                                                class="form-control @error('strAddres') is-invalid @enderror"
                                                placeholder="Introduce dirección"
                                                value="{{ old('strAddres') ?? $obj->strAddres }}" />
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
                                            <input type="text" name="intPhoneNumber"
                                                class="form-control @error('intPhoneNumber') is-invalid @enderror"
                                                placeholder="Introduce teléfono"
                                                value="{{ old('intPhoneNumber') ?? $obj->intPhoneNumber }}" />
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
                                            <input type="text" name="email"
                                                class="form-control @error('email') is-invalid @enderror"
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
                                        <div class="form-group col-md-4">
                                            <label>Tipo de Usuario<span class="text-danger">*</span></label>
                                            <select class="form-control" name="dblCatTypeUser" id="">
                                                <option value="">Selecciona opción</option>
                                                @foreach ($type_users as $type)
                                                    @php($selected = $type->dblCatTypeUser == $obj->dblCatTypeUser ? 'selected' : '')
                                                    <option {{ $selected }} value="{{ $type->dblCatTypeUser }}">
                                                        {{ $type->strTypeUser }}</option>
                                                @endforeach
                                            </select>
                                            @error('name')
                                                <div class="fv-plugins-message-container">
                                                    <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                                    aria-labelledby="tabs-icons-text-2-tab">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label>Centro de Trabajo<span class="text-danger">*</span></label>
                                            <select class="form-control" name="dblCatBranch" id="">
                                                <option value="">Selecciona opción</option>
                                                @foreach ($branchs as $branch)
                                                    @php($selected = $branch->dblCatBranch == $obj->dblCatBranch ? 'selected' : '')
                                                    <option {{ $selected }} value="{{ $branch->dblCatBranch }}">
                                                        {{ $branch->strBranch }}</option>
                                                @endforeach
                                            </select>
                                            @error('name')
                                                <div class="fv-plugins-message-container">
                                                    <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Tab Content -->
                </div>
            </div>
            <div class="card-footer">
                <a href="/users/users" class="btn btn-gray-700 mr-2"><i class="fas fa-undo"></i>
                    Atras</a>
                <button type="submit" class="btn btn-success btn-save-form"><i class="fas fa-check"></i>
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
