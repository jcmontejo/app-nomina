{{-- Extends layout --}}
@extends('layouts.default')
{{-- Content --}}
@section('content')
    <div class="card card-custom">
        <form action="/branch/branch/{{ $obj->getUrl() }}" method="POST">
            <div class="card-body">
                @csrf
                {{ method_field($obj->getMethod()) }}
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Centro de Trabajo<span class="text-danger">*</span></label>
                        <input type="text" name="strBranch" class="form-control @error('strBranch') is-invalid @enderror"
                            placeholder="Introduce nombre" value="{{ old('strBranch') ?? $obj->strBranch }}" />
                        <input type="hidden" name="dblCatBranch" class="form-control" value="{{ $obj->dblCatBranch }}" />
                        @error('strBranch')
                            <div class="fv-plugins-message-container">
                                <div data-field="username" data-validator="notEmpty" class="fv-help-block">
                                    <strong>{{ $message }}</strong>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label>Dirección<span class="text-danger">*</span></label>
                        <input type="text" name="strAddress" class="form-control @error('strAddress') is-invalid @enderror"
                            placeholder="Introduce dirección"
                            value="{{ old('strAddress') ?? $obj->strAddress }}" />
                        <input type="hidden" name="dblCatBranch" class="form-control"
                            value="{{ $obj->dblCatBranch }}" />
                        @error('strAddress')
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
                            placeholder="Introduce teléfono"
                            value="{{ old('intPhoneNumber') ?? $obj->intPhoneNumber }}" />
                        <input type="hidden" name="dblCatBranch" class="form-control"
                            value="{{ $obj->dblCatBranch }}" />
                        @error('intPhoneNumber')
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
